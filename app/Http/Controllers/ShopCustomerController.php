<?php

namespace App\Http\Controllers;

use App\Models\ShopCustomer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ShopCustomerController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        ShopCustomer::create($this->validatedData($request));

        return redirect()
            ->route('dashboard.customers')
            ->with('success', 'Customer created.');
    }

    public function update(Request $request, ShopCustomer $shopCustomer): RedirectResponse
    {
        $shopCustomer->update($this->validatedData($request, $shopCustomer));

        return redirect()
            ->route('dashboard.customers')
            ->with('success', 'Customer updated.');
    }

    public function destroy(ShopCustomer $shopCustomer): RedirectResponse
    {
        $shopCustomer->delete();

        return redirect()
            ->route('dashboard.customers')
            ->with('success', 'Customer deleted.');
    }

    private function validatedData(Request $request, ?ShopCustomer $shopCustomer = null): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('shop_customers', 'email')->ignore($shopCustomer),
            ],
            'phone' => ['nullable', 'string', 'max:50'],
            'address' => ['nullable', 'string', 'max:1000'],
            'status' => ['required', Rule::in(['active', 'vip', 'watchlist', 'inactive'])],
            'notes' => ['nullable', 'string', 'max:2000'],
        ]);
    }
}
