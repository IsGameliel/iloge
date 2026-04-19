@extends('layouts.admin')

@section('title', 'ILOGE | Customer Management')
@section('activeAdminPage', 'customers')
@section('headerTitle', 'Customer Management')
@section('searchPlaceholder', 'Search customers...')
@section('searchLabel', 'Search customer records')
@section('mainClass', 'min-h-screen px-4 pb-24 pt-28 sm:px-6 lg:ml-72 lg:px-12 lg:pt-32')

@php
    $isEditing = filled($editingCustomer);
    $formAction = $isEditing ? route('dashboard.customers.update', $editingCustomer) : route('dashboard.customers.store');
    $statuses = [
        'active' => 'Active',
        'vip' => 'VIP',
        'watchlist' => 'Watchlist',
        'inactive' => 'Inactive',
    ];
@endphp

@section('headerAction')
    <a href="#customer-form" class="font-headline hidden rounded-full border border-primary/10 bg-surface-container-high px-6 py-2 text-[10px] font-bold uppercase tracking-widest text-primary transition-colors hover:bg-primary hover:text-on-primary md:block">
        New Customer
    </a>
@endsection

@section('content')
    @if (session('success'))
        <div class="mb-8 rounded-xl border border-primary/20 bg-primary/10 px-5 py-4 text-sm font-semibold text-primary">
            {{ session('success') }}
        </div>
    @endif

    <section class="mb-12 flex flex-col gap-8 lg:mb-16 lg:flex-row lg:items-end lg:justify-between">
        <div class="max-w-3xl">
            <h1 class="font-headline mb-4 text-5xl font-black leading-[0.9] tracking-tighter text-on-surface sm:text-6xl lg:text-7xl">
                Customer <br><span class="text-primary">Relations.</span>
            </h1>
            <p class="max-w-2xl text-base font-light leading-relaxed text-on-surface-variant sm:text-lg">
                Manage customer profiles, contact details, order context, and relationship status from the executive dashboard.
            </p>
        </div>

        <div class="grid w-full grid-cols-2 gap-4 sm:w-auto lg:grid-cols-4">
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[120px]">
                <span class="font-headline block text-3xl font-bold text-primary">{{ $totalCustomers }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">Customers</span>
            </div>
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[120px]">
                <span class="font-headline block text-3xl font-bold text-on-surface">{{ $customersWithOrders }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">Ordered</span>
            </div>
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[120px]">
                <span class="font-headline block text-3xl font-bold text-primary">{{ $vipCustomers }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">VIP</span>
            </div>
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[140px]">
                <span class="font-headline block text-3xl font-bold text-on-surface">${{ number_format($totalCustomerRevenue, 0) }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">Revenue</span>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-12 gap-8">
        <section class="col-span-12 space-y-8 xl:col-span-8" aria-labelledby="customer-directory-heading">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 id="customer-directory-heading" class="font-headline text-2xl font-bold text-on-surface">Customer Directory</h2>
                <a href="#customer-form" class="font-headline flex items-center gap-2 text-sm font-semibold text-primary hover:underline">
                    <span class="material-symbols-outlined text-lg" aria-hidden="true">person_add</span>
                    Add Customer
                </a>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                @forelse ($customers as $customer)
                    @php
                        $statusClass = match ($customer->status) {
                            'vip' => 'bg-primary text-on-primary',
                            'watchlist' => 'bg-error-container text-on-error-container',
                            'inactive' => 'bg-on-surface text-surface',
                            default => 'bg-surface-container-high text-on-surface-variant',
                        };
                    @endphp

                    <article class="rim-light rounded-xl bg-surface-container-low p-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_-20px_rgba(241,204,25,0.15)]">
                        <div class="mb-6 flex items-start justify-between gap-4">
                            <div class="flex min-w-0 items-center gap-4">
                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary">
                                    <span class="material-symbols-outlined filled-icon" aria-hidden="true">person</span>
                                </div>
                                <div class="min-w-0">
                                    <h3 class="truncate font-headline text-xl font-bold text-on-surface">{{ $customer->name }}</h3>
                                    <p class="truncate text-sm text-on-surface-variant">{{ $customer->email }}</p>
                                </div>
                            </div>
                            <span class="{{ $statusClass }} rounded-full px-3 py-1 text-[10px] font-black uppercase tracking-widest">{{ $statuses[$customer->status] ?? ucfirst($customer->status) }}</span>
                        </div>

                        <div class="grid grid-cols-2 gap-4 border-y border-outline-variant/10 py-5">
                            <div>
                                <span class="block text-[10px] uppercase tracking-widest text-on-surface-variant/50">Orders</span>
                                <span class="font-headline text-2xl font-bold text-on-surface">{{ $customer->orders_count }}</span>
                            </div>
                            <div>
                                <span class="block text-[10px] uppercase tracking-widest text-on-surface-variant/50">Spent</span>
                                <span class="font-headline text-2xl font-bold text-primary">${{ number_format((float) ($customer->total_spent ?? 0), 2) }}</span>
                            </div>
                        </div>

                        <div class="mt-5 space-y-2 text-sm text-on-surface-variant">
                            <p class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary" aria-hidden="true">call</span>
                                {{ $customer->phone ?: 'No phone recorded' }}
                            </p>
                            <p class="line-clamp-2 flex items-start gap-2">
                                <span class="material-symbols-outlined mt-0.5 text-base text-primary" aria-hidden="true">location_on</span>
                                <span>{{ $customer->address ?: 'No delivery address recorded' }}</span>
                            </p>
                        </div>

                        <div class="mt-6 flex items-center justify-between border-t border-outline-variant/10 pt-5">
                            <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/40">Updated {{ $customer->updated_at->format('d M Y') }}</span>
                            <div class="flex gap-4">
                                <a class="flex items-center gap-1 text-xs font-bold uppercase tracking-tight text-on-surface-variant transition-colors hover:text-primary" href="{{ route('dashboard.customers', ['edit' => $customer->id]) }}#customer-form">
                                    <span class="material-symbols-outlined text-sm" aria-hidden="true">edit</span>
                                    Edit
                                </a>
                                <form method="post" action="{{ route('dashboard.customers.destroy', $customer) }}" onsubmit="return confirm('Delete this customer? Existing orders will remain for records.')">
                                    @csrf
                                    @method('delete')
                                    <button class="flex items-center gap-1 text-xs font-bold uppercase tracking-tight text-on-surface-variant transition-colors hover:text-error" type="submit">
                                        <span class="material-symbols-outlined text-sm" aria-hidden="true">delete</span>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="md:col-span-2 rounded-xl border border-outline-variant/20 bg-surface-container-low p-12 text-center">
                        <span class="material-symbols-outlined text-5xl text-primary" aria-hidden="true">groups</span>
                        <h3 class="mt-6 font-headline text-2xl font-bold">No Customers Yet</h3>
                        <p class="mx-auto mt-3 max-w-md text-sm text-on-surface/50">Customers created here or captured at checkout will appear in this directory.</p>
                    </div>
                @endforelse
            </div>

            @if ($customers->hasPages())
                <div class="flex justify-end gap-2">
                    @if ($customers->previousPageUrl())
                        <a class="rounded border border-outline-variant/30 px-4 py-2 text-[10px] font-bold uppercase text-on-surface-variant transition-colors hover:border-on-surface-variant" href="{{ $customers->previousPageUrl() }}">Prev</a>
                    @endif
                    @if ($customers->nextPageUrl())
                        <a class="rounded border border-primary px-4 py-2 text-[10px] font-bold uppercase text-on-surface transition-colors hover:bg-primary/10" href="{{ $customers->nextPageUrl() }}">Next</a>
                    @endif
                </div>
            @endif
        </section>

        <aside class="col-span-12 xl:col-span-4">
            <div id="customer-form" class="rim-light rounded-xl bg-surface-container p-6 xl:sticky xl:top-32 xl:p-8">
                <div class="mb-6 flex items-start justify-between gap-4">
                    <div>
                        <h2 class="font-headline text-xl font-bold text-on-surface">{{ $isEditing ? 'Edit Customer' : 'Add Customer' }}</h2>
                        <p class="mt-1 text-xs text-on-surface/40">{{ $isEditing ? 'Update the selected profile.' : 'Create a customer profile manually.' }}</p>
                    </div>
                    @if ($isEditing)
                        <a class="text-[10px] font-bold uppercase tracking-widest text-primary hover:underline" href="{{ route('dashboard.customers') }}#customer-form">New</a>
                    @endif
                </div>

                <form class="space-y-6" method="post" action="{{ $formAction }}">
                    @csrf
                    @if ($isEditing)
                        @method('patch')
                    @endif

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Full Name</span>
                        <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="name" placeholder="Customer name" type="text" value="{{ old('name', $editingCustomer->name ?? '') }}" required>
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </label>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Email</span>
                        <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="email" placeholder="customer@example.com" type="email" value="{{ old('email', $editingCustomer->email ?? '') }}" required>
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </label>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-1">
                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Phone</span>
                            <input class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:ring-1 focus:ring-primary" name="phone" placeholder="+234..." type="text" value="{{ old('phone', $editingCustomer->phone ?? '') }}">
                            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                        </label>

                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Status</span>
                            <select class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary" name="status">
                                @foreach ($statuses as $value => $label)
                                    <option value="{{ $value }}" @selected(old('status', $editingCustomer->status ?? 'active') === $value)>{{ $label }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </label>
                    </div>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Address</span>
                        <textarea class="w-full resize-none border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="address" placeholder="Delivery address..." rows="3">{{ old('address', $editingCustomer->address ?? '') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                    </label>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Notes</span>
                        <textarea class="w-full resize-none border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="notes" placeholder="Preferences, follow-up notes, relationship context..." rows="4">{{ old('notes', $editingCustomer->notes ?? '') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('notes')" />
                    </label>

                    <button class="liquid-gold-bg font-headline w-full rounded-xl py-4 text-xs font-bold uppercase tracking-widest text-on-primary transition-all hover:shadow-[0_10px_30px_-5px_rgba(241,204,25,0.3)] active:scale-[0.98]" type="submit">
                        {{ $isEditing ? 'Update Customer' : 'Create Customer' }}
                    </button>
                </form>
            </div>
        </aside>
    </div>
@endsection
