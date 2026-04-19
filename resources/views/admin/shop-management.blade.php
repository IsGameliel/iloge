@extends('layouts.admin')

@section('title', 'ILOGE | Shop Management')
@section('activeAdminPage', 'Shop')
@section('headerTitle', 'Shop Management')
@section('searchPlaceholder', 'Search products...')
@section('searchLabel', 'Search shop inventory')
@section('mainClass', 'min-h-screen px-4 pb-24 pt-28 sm:px-6 lg:ml-72 lg:px-12 lg:pt-32')

@php
    $isEditing = filled($editingProduct);
    $formAction = $isEditing ? route('dashboard.shop.update', $editingProduct) : route('dashboard.shop.store');
    $categories = ['Hardcover Book', 'Paperback Book', 'Ebook', 'PDF Collection', 'Video Series', 'Audio Material', 'Workshop Material'];
@endphp

@section('headerAction')
    <a href="#product-form" class="font-headline hidden rounded-full border border-primary/10 bg-surface-container-high px-6 py-2 text-[10px] font-bold uppercase tracking-widest text-primary transition-colors hover:bg-primary hover:text-on-primary md:block">
        New Item
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
            <h1 class="font-headline mb-4 text-5xl font-black leading-[0.9] tracking-tighter text-on-surface sm:text-6xl lg:text-7xl xl:text-[5rem]">
                Inventory <br><span class="text-primary">Control.</span>
            </h1>
            <p class="max-w-2xl text-base font-light leading-relaxed text-on-surface-variant sm:text-lg">
                Add, edit, publish, and archive books or materials from one command center. Published items appear automatically on the public shop page.
            </p>
        </div>

        <div class="grid w-full grid-cols-3 gap-4 sm:w-auto">
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[120px]">
                <span class="font-headline block text-3xl font-bold text-primary">{{ $totalShopProducts }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">Total Items</span>
            </div>
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[120px]">
                <span class="font-headline block text-3xl font-bold text-on-surface">{{ $publishedShopProducts }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">Published</span>
            </div>
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[120px]">
                <span class="font-headline block text-3xl font-bold text-error">{{ $lowStockProducts }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">Low Stock</span>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-12 gap-8">
        <section id="inventory-grid" class="col-span-12 space-y-8 xl:col-span-8" aria-label="Shop inventory">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                @forelse ($shopProducts as $product)
                    @php
                        $availabilityClass = match ($product->availability_label) {
                            'Archived' => 'bg-on-surface text-surface',
                            'Out of Stock', 'Low Stock' => 'bg-error-container text-on-error-container',
                            default => 'bg-primary text-on-primary',
                        };
                    @endphp

                    <article class="rim-light group overflow-hidden rounded-xl bg-surface-container-low transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_50px_-20px_rgba(241,204,25,0.15)]">
                        <div class="relative h-64 overflow-hidden">
                            <img alt="{{ $product->name }}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ $product->image_url }}">
                            <span class="{{ $availabilityClass }} absolute left-4 top-4 rounded-full px-3 py-1 text-[10px] font-black uppercase tracking-widest">
                                {{ $product->availability_label }}
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-t from-surface-container-low to-transparent opacity-60"></div>
                        </div>

                        <div class="p-6 sm:p-8">
                            <div class="mb-4 flex items-start justify-between gap-4">
                                <h2 class="font-headline text-2xl font-extrabold tracking-tight text-on-surface">{{ $product->name }}</h2>
                                <span class="font-headline whitespace-nowrap font-bold text-primary">${{ number_format((float) $product->price, 2) }}</span>
                            </div>
                            <p class="mb-8 line-clamp-2 text-sm leading-relaxed text-on-surface-variant">{{ $product->description }}</p>

                            <div class="flex flex-col gap-4 border-t border-outline-variant/10 pt-6 sm:flex-row sm:items-center sm:justify-between">
                                <div class="flex gap-4">
                                    <a href="{{ route('dashboard.shop', ['edit' => $product->id]) }}#product-form" class="flex items-center gap-1 text-xs font-bold uppercase tracking-tight text-on-surface-variant transition-colors hover:text-primary">
                                        <span class="material-symbols-outlined text-sm" aria-hidden="true">edit</span>
                                        Edit
                                    </a>
                                    <form method="post" action="{{ route('dashboard.shop.destroy', $product) }}" onsubmit="return confirm('Delete this shop item?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="flex items-center gap-1 text-xs font-bold uppercase tracking-tight text-on-surface-variant transition-colors hover:text-error">
                                            <span class="material-symbols-outlined text-sm" aria-hidden="true">delete</span>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/40">{{ $product->sku ?: 'NO SKU' }} · {{ $product->stock }} in stock</span>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="md:col-span-2 rounded-xl border border-outline-variant/20 bg-surface-container-low p-12 text-center">
                        <span class="material-symbols-outlined text-5xl text-primary" aria-hidden="true">shopping_bag</span>
                        <h2 class="mt-6 font-headline text-2xl font-bold">No Shop Items Yet</h2>
                        <p class="mx-auto mt-3 max-w-md text-sm text-on-surface/50">Create your first book or material from the management form. Published items will appear on the public shop page.</p>
                    </div>
                @endforelse
            </div>

            @if ($shopProducts->hasPages())
                <div class="flex justify-end gap-2">
                    @if ($shopProducts->previousPageUrl())
                        <a class="rounded border border-outline-variant/30 px-4 py-2 text-[10px] font-bold uppercase text-on-surface-variant transition-colors hover:border-on-surface-variant" href="{{ $shopProducts->previousPageUrl() }}">Prev</a>
                    @endif
                    @if ($shopProducts->nextPageUrl())
                        <a class="rounded border border-primary px-4 py-2 text-[10px] font-bold uppercase text-on-surface transition-colors hover:bg-primary/10" href="{{ $shopProducts->nextPageUrl() }}">Next</a>
                    @endif
                </div>
            @endif
        </section>

        <aside class="col-span-12 xl:col-span-4">
            <div id="product-form" class="rim-light rounded-xl bg-surface-container p-6 xl:sticky xl:top-32 xl:p-8">
                <div class="mb-6 flex items-start justify-between gap-4">
                    <div>
                        <h2 class="font-headline text-xl font-bold text-on-surface">{{ $isEditing ? 'Edit Shop Item' : 'Add Shop Item' }}</h2>
                        <p class="mt-1 text-xs text-on-surface/40">{{ $isEditing ? 'Update the selected book or material.' : 'Create a book, digital product, or learning material.' }}</p>
                    </div>
                    @if ($isEditing)
                        <a class="text-[10px] font-bold uppercase tracking-widest text-primary hover:underline" href="{{ route('dashboard.shop') }}#product-form">New</a>
                    @endif
                </div>

                <form class="space-y-6" method="post" action="{{ $formAction }}">
                    @csrf
                    @if ($isEditing)
                        @method('patch')
                    @endif

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Title</span>
                        <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="name" placeholder="The Sovereign Architect" type="text" value="{{ old('name', $editingProduct->name ?? '') }}" required>
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </label>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-1">
                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Category</span>
                            <select class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary" name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category }}" @selected(old('category', $editingProduct->category ?? 'Hardcover Book') === $category)>{{ $category }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('category')" />
                        </label>

                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">SKU</span>
                            <input class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:ring-1 focus:ring-primary" name="sku" placeholder="BOOK-001" type="text" value="{{ old('sku', $editingProduct->sku ?? '') }}">
                            <x-input-error class="mt-2" :messages="$errors->get('sku')" />
                        </label>
                    </div>

                    <div class="grid grid-cols-2 gap-5">
                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Price</span>
                            <input class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:ring-1 focus:ring-primary" name="price" min="0" step="0.01" type="number" value="{{ old('price', $editingProduct->price ?? '') }}" required>
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </label>

                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Stock</span>
                            <input class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:ring-1 focus:ring-primary" name="stock" min="0" step="1" type="number" value="{{ old('stock', $editingProduct->stock ?? 0) }}" required>
                            <x-input-error class="mt-2" :messages="$errors->get('stock')" />
                        </label>
                    </div>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Image URL</span>
                        <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="image_url" placeholder="https://..." type="url" value="{{ old('image_url', $editingProduct->image_url ?? '') }}" required>
                        <x-input-error class="mt-2" :messages="$errors->get('image_url')" />
                    </label>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Description</span>
                        <textarea class="w-full resize-none border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="description" placeholder="Brief summary of this item..." rows="3">{{ old('description', $editingProduct->description ?? '') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('description')" />
                    </label>

                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 xl:grid-cols-1">
                        <label class="flex items-center gap-3 rounded-lg bg-surface-container-high px-4 py-3">
                            <input class="rounded border-outline-variant bg-surface text-primary focus:ring-primary" name="is_published" type="checkbox" value="1" @checked(old('is_published', $editingProduct->is_published ?? true))>
                            <span class="text-sm text-on-surface/70">Publish on shop page</span>
                        </label>

                        <label class="flex items-center gap-3 rounded-lg bg-surface-container-high px-4 py-3">
                            <input class="rounded border-outline-variant bg-surface text-primary focus:ring-primary" name="is_featured" type="checkbox" value="1" @checked(old('is_featured', $editingProduct->is_featured ?? false))>
                            <span class="text-sm text-on-surface/70">Mark as featured</span>
                        </label>
                    </div>

                    <button class="liquid-gold-bg font-headline w-full rounded-xl py-4 text-xs font-bold uppercase tracking-widest text-on-primary transition-all hover:shadow-[0_10px_30px_-5px_rgba(241,204,25,0.3)] active:scale-[0.98]" type="submit">
                        {{ $isEditing ? 'Update Item' : 'Publish Item' }}
                    </button>
                </form>
            </div>
        </aside>

        <section class="col-span-12 mt-8" aria-labelledby="archive-heading">
            <h2 id="archive-heading" class="font-headline mb-10 text-sm font-black uppercase tracking-[0.4em] text-on-surface-variant/50">Inventory Records</h2>
            <div class="rim-light overflow-hidden rounded-xl bg-surface-container-lowest p-4 sm:p-8">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[820px] border-separate border-spacing-y-4 text-left">
                        <thead>
                            <tr class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">
                                <th class="px-4 pb-4 font-black">Item Name</th>
                                <th class="px-4 pb-4 font-black">Category</th>
                                <th class="px-4 pb-4 font-black">Availability</th>
                                <th class="px-4 pb-4 font-black">Last Modified</th>
                                <th class="px-4 pb-4 text-right font-black">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            @forelse ($shopProducts as $product)
                                <tr class="group bg-surface-container-low/50 transition-colors hover:bg-surface-container-high">
                                    <td class="rounded-l-lg px-4 py-4 font-bold text-on-surface">{{ $product->name }}</td>
                                    <td class="px-4 py-4 text-on-surface-variant">{{ $product->category }}</td>
                                    <td class="px-4 py-4 text-on-surface">
                                        <span class="{{ $product->is_published ? 'bg-primary' : 'bg-secondary-fixed-dim/40' }} mr-2 inline-block h-2 w-2 rounded-full"></span>
                                        {{ $product->availability_label }}
                                    </td>
                                    <td class="px-4 py-4 text-on-surface-variant">{{ $product->updated_at->format('d M Y') }}</td>
                                    <td class="rounded-r-lg px-4 py-4">
                                        <div class="flex justify-end gap-4">
                                            <a class="material-symbols-outlined text-on-surface/40 transition-colors hover:text-primary" href="{{ route('dashboard.shop', ['edit' => $product->id]) }}#product-form" aria-label="Edit {{ $product->name }}">edit</a>
                                            <form method="post" action="{{ route('dashboard.shop.destroy', $product) }}" onsubmit="return confirm('Delete this shop item?')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="material-symbols-outlined text-on-surface/40 transition-colors hover:text-error" aria-label="Delete {{ $product->name }}">delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-4 py-10 text-center text-sm text-on-surface/50" colspan="5">No shop items have been created yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('floatingAction')
    <div class="fixed bottom-8 right-8 z-40">
        <a href="#product-form" class="liquid-gold-gradient flex h-16 w-16 items-center justify-center rounded-full text-on-primary shadow-2xl transition-all hover:scale-110 active:scale-95" aria-label="Add shop inventory item">
            <span class="material-symbols-outlined filled-icon text-3xl" aria-hidden="true">add</span>
        </a>
    </div>
@endsection
