<?php

namespace App\Http\Controllers;

use App\Models\ShopProduct;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ShopProductController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedData($request);
        $data['user_id'] = $request->user()->id;
        $data['sku'] = $data['sku'] ?: null;
        $data['is_published'] = $request->boolean('is_published');
        $data['is_featured'] = $request->boolean('is_featured');

        ShopProduct::create($data);

        return redirect()
            ->route('dashboard.shop')
            ->with('success', 'Shop item created.');
    }

    public function update(Request $request, ShopProduct $shopProduct): RedirectResponse
    {
        $data = $this->validatedData($request, $shopProduct);
        $data['sku'] = $data['sku'] ?: null;
        $data['is_published'] = $request->boolean('is_published');
        $data['is_featured'] = $request->boolean('is_featured');

        $shopProduct->update($data);

        return redirect()
            ->route('dashboard.shop')
            ->with('success', 'Shop item updated.');
    }

    public function destroy(ShopProduct $shopProduct): RedirectResponse
    {
        $shopProduct->delete();

        return redirect()
            ->route('dashboard.shop')
            ->with('success', 'Shop item deleted.');
    }

    private function validatedData(Request $request, ?ShopProduct $shopProduct = null): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string', 'max:1000'],
            'price' => ['required', 'numeric', 'min:0', 'max:999999.99'],
            'stock' => ['required', 'integer', 'min:0', 'max:1000000'],
            'sku' => [
                'nullable',
                'string',
                'max:100',
                Rule::unique('shop_products', 'sku')->ignore($shopProduct),
            ],
            'image_url' => ['required', 'url', 'max:2048'],
        ]);
    }
}
