@extends('layouts.admin')

@section('title', 'ILOGE | Gallery Updates')
@section('activeAdminPage', 'gallery')
@section('headerTitle', 'Gallery & Press Admin')
@section('searchPlaceholder', 'Search assets...')
@section('mainClass', 'min-h-screen px-4 pb-24 pt-28 sm:px-6 lg:ml-72 lg:px-12 lg:pt-32')

@php
    $isEditing = filled($editingItem);
    $formAction = $isEditing ? route('dashboard.gallery.update', $editingItem) : route('dashboard.gallery.store');
    $categories = ['Architecture', 'Interior', 'Commercial', 'Portrait', 'Editorial', 'Events'];
    $assetTypes = ['8K Ultra-Res', 'Editorial', 'Masterplan', 'Press Kit', 'Portrait', 'Brand Asset'];
@endphp

@section('headerAction')
    <a href="#asset-form" class="font-headline hidden rounded-lg border border-outline-variant/10 bg-surface-container-high px-6 py-2 text-[10px] font-bold uppercase tracking-widest text-on-surface transition-colors hover:bg-surface-variant md:block">
        New Asset
    </a>
@endsection

@section('content')
    @if (session('success'))
        <div class="mb-8 rounded-xl border border-primary/20 bg-primary/10 px-5 py-4 text-sm font-semibold text-primary">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-12 flex flex-col gap-8 lg:mb-16 lg:flex-row lg:items-end lg:justify-between">
        <div class="max-w-2xl">
            <h1 class="font-headline mb-4 text-4xl font-extrabold leading-none tracking-tighter text-on-surface sm:text-5xl lg:text-6xl">The Sovereign <span class="text-primary">Creative</span></h1>
            <p class="text-lg leading-relaxed text-on-surface/50">Curate the digital legacy. Manage high-fidelity architectural concepts and global press communications from a single command center.</p>
        </div>
        <div class="flex flex-col lg:items-end">
            <span class="mb-2 text-[10px] uppercase tracking-[0.3em] text-primary">Workspace status</span>
            <span class="font-headline text-3xl font-light text-on-surface">Synchronized</span>
            <span class="mt-2 text-xs text-on-surface/40">{{ $totalGalleryItems }} assets · {{ $featuredGalleryItems }} featured</span>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-8">
        <section class="col-span-12 space-y-8 lg:col-span-8" aria-labelledby="gallery-heading">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <h3 id="gallery-heading" class="font-headline text-2xl font-bold text-on-surface">High-Res Gallery</h3>
                <a href="#asset-form" class="font-headline flex items-center gap-2 text-sm font-semibold text-primary hover:underline">
                    <span class="material-symbols-outlined text-lg" aria-hidden="true">upload_file</span>
                    Upload New Asset
                </a>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                @forelse ($galleryItems as $item)
                    <article class="rim-light group relative aspect-[4/3] overflow-hidden rounded-xl bg-surface-container-low transition-all duration-500 hover:shadow-2xl {{ $item->is_featured ? 'md:col-span-2' : '' }}">
                        <img alt="{{ $item->title }}" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ $item->image_url }}">
                        <div class="absolute inset-0 flex flex-col justify-end bg-gradient-to-t from-black/80 via-transparent to-transparent p-6 {{ $item->is_featured ? 'sm:p-8' : '' }}">
                            @if ($item->is_featured)
                                <span class="mb-3 w-fit rounded bg-primary px-3 py-1 text-[10px] font-black uppercase tracking-widest text-on-primary">Featured</span>
                            @endif
                            <h4 class="font-headline {{ $item->is_featured ? 'text-2xl' : 'text-lg' }} font-bold">{{ $item->title }}</h4>
                            <p class="mt-1 text-xs uppercase tracking-widest text-on-surface/60">{{ $item->category }} - {{ $item->asset_type }}</p>
                            @if ($item->description)
                                <p class="mt-2 line-clamp-2 text-sm text-on-surface/60">{{ $item->description }}</p>
                            @endif
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center gap-4 bg-black/40 opacity-0 backdrop-blur-sm transition-opacity group-hover:opacity-100">
                            <a class="flex h-12 w-12 items-center justify-center rounded-full bg-primary text-on-primary transition-transform hover:scale-110" href="{{ route('dashboard.gallery', ['edit' => $item->id]) }}#asset-form" aria-label="Edit {{ $item->title }}">
                                <span class="material-symbols-outlined" aria-hidden="true">edit</span>
                            </a>
                            <form method="post" action="{{ route('dashboard.gallery.destroy', $item) }}" onsubmit="return confirm('Delete this gallery asset?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="flex h-12 w-12 items-center justify-center rounded-full bg-error-container text-on-error-container transition-transform hover:scale-110" aria-label="Delete {{ $item->title }}">
                                    <span class="material-symbols-outlined" aria-hidden="true">delete</span>
                                </button>
                            </form>
                        </div>
                    </article>
                @empty
                    <div class="md:col-span-2 rounded-xl border border-outline-variant/20 bg-surface-container-low p-12 text-center">
                        <span class="material-symbols-outlined text-5xl text-primary" aria-hidden="true">photo_library</span>
                        <h4 class="mt-6 font-headline text-2xl font-bold">No Gallery Assets Yet</h4>
                        <p class="mx-auto mt-3 max-w-md text-sm text-on-surface/50">Create your first visual asset from the management form. It will appear in this gallery immediately.</p>
                    </div>
                @endforelse
            </div>

            @if ($galleryItems->hasPages())
                <div class="flex justify-end gap-2">
                    @if ($galleryItems->previousPageUrl())
                        <a class="rounded border border-outline-variant/30 px-4 py-2 text-[10px] font-bold uppercase text-on-surface-variant transition-colors hover:border-on-surface-variant" href="{{ $galleryItems->previousPageUrl() }}">Prev</a>
                    @endif
                    @if ($galleryItems->nextPageUrl())
                        <a class="rounded border border-primary px-4 py-2 text-[10px] font-bold uppercase text-on-surface transition-colors hover:bg-primary/10" href="{{ $galleryItems->nextPageUrl() }}">Next</a>
                    @endif
                </div>
            @endif
        </section>

        <aside class="col-span-12 space-y-8 lg:col-span-4">
            <div id="asset-form" class="rim-light rounded-2xl bg-surface-container p-6 lg:sticky lg:top-32 lg:p-8">
                <div class="mb-6 flex items-start justify-between gap-4">
                    <div>
                        <h3 class="font-headline text-xl font-bold text-on-surface">{{ $isEditing ? 'Edit Gallery Asset' : 'Asset Management' }}</h3>
                        <p class="mt-1 text-xs text-on-surface/40">{{ $isEditing ? 'Revise the selected visual asset.' : 'Create a new high-fidelity gallery asset.' }}</p>
                    </div>
                    @if ($isEditing)
                        <a class="text-[10px] font-bold uppercase tracking-widest text-primary hover:underline" href="{{ route('dashboard.gallery') }}#asset-form">New</a>
                    @endif
                </div>

                <form class="space-y-6" method="post" action="{{ $formAction }}">
                    @csrf
                    @if ($isEditing)
                        @method('patch')
                    @endif

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Title</span>
                        <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="title" placeholder="New HQ Concept" type="text" value="{{ old('title', $editingItem->title ?? '') }}" required>
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </label>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-1">
                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Category</span>
                            <select class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary" name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category }}" @selected(old('category', $editingItem->category ?? 'Architecture') === $category)>{{ $category }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('category')" />
                        </label>

                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Asset Type</span>
                            <select class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary" name="asset_type">
                                @foreach ($assetTypes as $assetType)
                                    <option value="{{ $assetType }}" @selected(old('asset_type', $editingItem->asset_type ?? 'Editorial') === $assetType)>{{ $assetType }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('asset_type')" />
                        </label>
                    </div>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Image URL</span>
                        <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="image_url" placeholder="https://..." type="url" value="{{ old('image_url', $editingItem->image_url ?? '') }}" required>
                        <x-input-error class="mt-2" :messages="$errors->get('image_url')" />
                    </label>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Description</span>
                        <textarea class="w-full resize-none border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="description" placeholder="Brief summary of the asset..." rows="3">{{ old('description', $editingItem->description ?? '') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('description')" />
                    </label>

                    <label class="flex items-center gap-3 rounded-lg bg-surface-container-high px-4 py-3">
                        <input class="rounded border-outline-variant bg-surface text-primary focus:ring-primary" name="is_featured" type="checkbox" value="1" @checked(old('is_featured', $editingItem->is_featured ?? false))>
                        <span class="text-sm text-on-surface/70">Feature this asset across the gallery grid</span>
                    </label>

                    <button class="liquid-gold-bg font-headline w-full rounded-xl py-4 text-xs font-bold uppercase tracking-widest text-on-primary transition-all hover:shadow-[0_10px_30px_-5px_rgba(241,204,25,0.3)] active:scale-[0.98]" type="submit">
                        {{ $isEditing ? 'Update Asset' : 'Publish Asset' }}
                    </button>
                </form>
            </div>

            <div class="rim-light rounded-2xl border border-outline-variant/10 bg-surface-container-low p-6 lg:p-8">
                <div class="mb-6 flex items-start justify-between">
                    <div>
                        <h3 class="font-headline text-lg font-bold text-on-surface">Media Kit</h3>
                        <p class="mt-1 text-xs text-on-surface/40">{{ $totalGalleryItems }} Standard Assets</p>
                    </div>
                    <span class="material-symbols-outlined text-primary" aria-hidden="true">cloud_done</span>
                </div>
                <p class="mb-8 text-sm leading-relaxed text-on-surface/60">Ensure all external partners have access to the latest brand signatures and executive portraits.</p>
                <a href="#asset-form" class="font-headline block w-full rounded-xl border border-outline py-3 text-center text-xs font-bold uppercase tracking-widest text-outline transition-colors hover:border-primary hover:text-primary">
                    Update Media Kit
                </a>
            </div>
        </aside>

        <section class="col-span-12 mt-8 space-y-6" aria-labelledby="asset-table-heading">
            <h3 id="asset-table-heading" class="font-headline text-2xl font-bold text-on-surface">Asset Registry</h3>
            <div class="rim-light overflow-hidden rounded-2xl border border-outline-variant/5 bg-surface-container">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[820px] border-collapse text-left">
                        <thead>
                            <tr class="border-b border-outline-variant/10 bg-surface-container-high/50">
                                <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-[0.2em] text-on-surface/40">Asset</th>
                                <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-[0.2em] text-on-surface/40">Category</th>
                                <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-[0.2em] text-on-surface/40">Updated</th>
                                <th class="px-8 py-5 text-right text-[10px] font-bold uppercase tracking-[0.2em] text-on-surface/40">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/5">
                            @forelse ($galleryItems as $item)
                                <tr class="group transition-colors hover:bg-surface-container-highest/30">
                                    <td class="px-8 py-6">
                                        <div class="font-headline font-semibold text-on-surface transition-colors group-hover:text-primary">{{ $item->title }}</div>
                                        <div class="mt-1 text-xs italic text-on-surface/40">{{ $item->asset_type }}{{ $item->is_featured ? ' - Featured' : '' }}</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-primary/10 px-3 py-1 text-[10px] font-bold uppercase tracking-widest text-primary">
                                            <span class="h-1.5 w-1.5 rounded-full bg-primary"></span> {{ $item->category }}
                                        </span>
                                    </td>
                                    <td class="px-8 py-6 text-sm text-on-surface/60">{{ $item->updated_at->format('M d, Y - H:i') }}</td>
                                    <td class="px-8 py-6 text-right">
                                        <div class="flex justify-end gap-4">
                                            <a class="material-symbols-outlined text-on-surface/40 transition-colors hover:text-primary" href="{{ route('dashboard.gallery', ['edit' => $item->id]) }}#asset-form" aria-label="Edit">edit</a>
                                            <a class="material-symbols-outlined text-on-surface/40 transition-colors hover:text-primary" href="{{ $item->image_url }}" target="_blank" rel="noreferrer" aria-label="View">visibility</a>
                                            <form method="post" action="{{ route('dashboard.gallery.destroy', $item) }}" onsubmit="return confirm('Delete this gallery asset?')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="material-symbols-outlined text-on-surface/40 transition-colors hover:text-error" aria-label="Delete">delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-8 py-10 text-center text-sm text-on-surface/50" colspan="4">No gallery assets have been created yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
