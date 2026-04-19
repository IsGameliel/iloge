<?php

namespace App\Http\Controllers;

use App\Models\ShopOrder;
use App\Models\ShopCustomer;
use App\Models\ShopProduct;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ShopCartController extends Controller
{
    public function add(Request $request, ShopProduct $shopProduct): RedirectResponse
    {
        $this->ensureProductCanBePurchased($shopProduct);

        $quantity = $request->validate([
            'quantity' => ['nullable', 'integer', 'min:1', 'max:99'],
        ])['quantity'] ?? 1;

        $cart = $request->session()->get('shop.cart', []);
        $currentQuantity = (int) ($cart[$shopProduct->id] ?? 0);
        $cart[$shopProduct->id] = min($shopProduct->stock, $currentQuantity + $quantity);

        $request->session()->put('shop.cart', $cart);

        return back()->with('success', "{$shopProduct->name} added to cart.");
    }

    public function update(Request $request, ShopProduct $shopProduct): RedirectResponse
    {
        $quantity = (int) $request->validate([
            'quantity' => ['required', 'integer', 'min:0', 'max:99'],
        ])['quantity'];

        $cart = $request->session()->get('shop.cart', []);

        if ($quantity === 0) {
            unset($cart[$shopProduct->id]);
        } else {
            $this->ensureProductCanBePurchased($shopProduct);
            $cart[$shopProduct->id] = min($shopProduct->stock, $quantity);
        }

        $request->session()->put('shop.cart', $cart);

        return back()->with('success', 'Cart updated.');
    }

    public function remove(Request $request, ShopProduct $shopProduct): RedirectResponse
    {
        $cart = $request->session()->get('shop.cart', []);
        unset($cart[$shopProduct->id]);
        $request->session()->put('shop.cart', $cart);

        return back()->with('success', 'Item removed from cart.');
    }

    public function toggleFavorite(Request $request, ShopProduct $shopProduct): RedirectResponse
    {
        abort_unless($shopProduct->is_published, 404);

        $favorites = collect($request->session()->get('shop.favorites', []))
            ->map(fn ($id) => (int) $id);

        if ($favorites->contains($shopProduct->id)) {
            $favorites = $favorites->reject(fn ($id) => $id === $shopProduct->id);
            $message = "{$shopProduct->name} removed from favorites.";
        } else {
            $favorites = $favorites->push($shopProduct->id)->unique();
            $message = "{$shopProduct->name} added to favorites.";
        }

        $request->session()->put('shop.favorites', $favorites->values()->all());

        return back()->with('success', $message);
    }

    public function checkout(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_email' => ['required', 'email', 'max:255'],
            'customer_phone' => ['nullable', 'string', 'max:50'],
            'delivery_address' => ['nullable', 'string', 'max:1000'],
        ]);

        $cart = collect($request->session()->get('shop.cart', []))
            ->mapWithKeys(fn ($quantity, $id) => [(int) $id => (int) $quantity])
            ->filter(fn ($quantity) => $quantity > 0);

        if ($cart->isEmpty()) {
            return back()->withErrors(['cart' => 'Your cart is empty.']);
        }

        $order = DB::transaction(function () use ($data, $cart) {
            $products = ShopProduct::query()
                ->where('is_published', true)
                ->whereIn('id', $cart->keys())
                ->lockForUpdate()
                ->get()
                ->keyBy('id');

            if ($products->count() !== $cart->count()) {
                throw ValidationException::withMessages([
                    'cart' => 'One or more cart items are no longer available.',
                ]);
            }

            foreach ($cart as $productId => $quantity) {
                $product = $products->get($productId);

                if ($product->stock < $quantity) {
                    throw ValidationException::withMessages([
                        'cart' => "{$product->name} only has {$product->stock} available.",
                    ]);
                }
            }

            $subtotal = $cart->map(function ($quantity, $productId) use ($products) {
                return (float) $products->get($productId)->price * $quantity;
            })->sum();

            $customer = $this->customerFromCheckout($data);

            $order = ShopOrder::create([
                ...$data,
                'shop_customer_id' => $customer->id,
                'order_number' => 'ILG-' . now()->format('Ymd') . '-' . Str::upper(Str::random(6)),
                'subtotal' => $subtotal,
                'status' => 'pending',
            ]);

            foreach ($cart as $productId => $quantity) {
                $product = $products->get($productId);
                $lineTotal = (float) $product->price * $quantity;

                $order->items()->create([
                    'shop_product_id' => $product->id,
                    'product_name' => $product->name,
                    'sku' => $product->sku,
                    'unit_price' => $product->price,
                    'quantity' => $quantity,
                    'line_total' => $lineTotal,
                ]);

                $product->decrement('stock', $quantity);
            }

            return $order;
        });

        $request->session()->forget('shop.cart');

        return redirect()
            ->route('shop')
            ->with('success', "Checkout complete. Your order number is {$order->order_number}.");
    }

    private function customerFromCheckout(array $data): ShopCustomer
    {
        $customer = ShopCustomer::firstOrNew([
            'email' => $data['customer_email'],
        ]);

        $customer->fill([
            'name' => $data['customer_name'],
            'phone' => $data['customer_phone'] ?? null,
            'address' => $data['delivery_address'] ?? null,
            'status' => $customer->status ?: 'active',
        ]);

        $customer->save();

        return $customer;
    }

    private function ensureProductCanBePurchased(ShopProduct $shopProduct): void
    {
        abort_unless($shopProduct->is_published, 404);

        if ($shopProduct->stock <= 0) {
            abort(422, 'This item is sold out.');
        }
    }
}
