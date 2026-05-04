@extends('layouts.admin')

@section('title', 'ILOGE | Podcast Curation')
@section('activeAdminPage', 'podcast')
@section('headerTitle', 'Podcast Curation')
@section('searchPlaceholder', 'Search episodes...')
@section('mainClass', 'min-h-screen px-4 pb-24 pt-28 sm:px-6 lg:ml-72 lg:px-12 lg:pt-32')

@php
    $isEditing = filled($editingEpisode);
    $formAction = $isEditing ? route('dashboard.podcast.update', $editingEpisode) : route('dashboard.podcast.store');
    $categories = ['Tech Innovation', 'Leadership Blueprints', 'Investment Insights', 'Global Strategy', 'Masterclass', 'Diary Notes'];
@endphp

@section('headerAction')
    <a href="#episode-form" class="font-headline hidden rounded-full border border-primary/10 bg-surface-container-high px-6 py-2 text-[10px] font-bold uppercase tracking-widest text-primary transition-colors hover:bg-primary hover:text-on-primary md:block">
        New Episode
    </a>
@endsection

@section('content')
    @if (session('success'))
        <div class="mb-8 rounded-xl border border-primary/20 bg-primary/10 px-5 py-4 text-sm font-semibold text-primary">
            {{ session('success') }}
        </div>
    @endif

    <section class="mb-12 grid grid-cols-1 gap-8 lg:mb-16 lg:grid-cols-3">
        <div class="space-y-5 lg:col-span-2">
            <div>
                <h1 class="font-headline text-5xl font-black leading-[0.9] tracking-tighter text-on-surface sm:text-6xl lg:text-7xl">
                    Podcast <br><span class="text-primary">Curation.</span>
                </h1>
                <p class="mt-5 max-w-2xl text-base font-light leading-relaxed text-on-surface-variant sm:text-lg">
                    Add YouTube podcast episodes, publish them to the public podcast page, and curate featured transmissions from one dashboard.
                </p>
            </div>

            <div class="group relative overflow-hidden rounded-xl border-l-4 border-primary/40 bg-surface-container-low p-6 sm:p-8">
                <div class="pointer-events-none absolute -right-12 -top-12 opacity-5 transition-opacity duration-700 group-hover:opacity-10">
                    <span class="material-symbols-outlined text-[12rem]" aria-hidden="true">youtube_activity</span>
                </div>
                <div class="relative z-10 flex flex-col gap-4 md:flex-row md:items-end">
                    <label class="flex-1 space-y-2">
                        <span class="font-headline text-[10px] font-bold uppercase tracking-widest text-primary">YouTube Episode URL</span>
                        <input form="podcast-episode-form" class="font-headline w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent py-4 text-xl placeholder:text-on-surface/10 transition-colors focus:border-primary focus:ring-0" name="youtube_url" placeholder="https://www.youtube.com/watch?v=..." type="url" value="{{ old('youtube_url', $editingEpisode->youtube_url ?? '') }}" required>
                    </label>
                    <button form="podcast-episode-form" type="submit" class="font-headline flex items-center justify-center gap-3 self-stretch rounded-lg border border-primary/10 bg-surface-container-high px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface transition-all duration-300 hover:bg-surface-container-highest md:self-end">
                        {{ $isEditing ? 'Update Episode' : 'Integrate Episode' }}
                        <span class="material-symbols-outlined text-primary" aria-hidden="true">dynamic_feed</span>
                    </button>
                </div>
                <x-input-error class="mt-3" :messages="$errors->get('youtube_url')" />
            </div>
        </div>

        <aside class="relative flex flex-col justify-between overflow-hidden rounded-xl border border-outline-variant/10 bg-surface-container p-8">
            <div class="space-y-4">
                <div class="flex items-center gap-2 text-primary">
                    <span class="material-symbols-outlined text-sm" aria-hidden="true">trending_up</span>
                    <span class="font-headline text-[10px] font-bold uppercase tracking-widest">Metrics Hub</span>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <div class="font-headline text-3xl font-black tracking-tight">{{ $totalPodcastEpisodes }}</div>
                        <div class="text-[10px] uppercase tracking-widest text-on-surface/40">Total</div>
                    </div>
                    <div>
                        <div class="font-headline text-3xl font-black tracking-tight text-primary">{{ $publishedPodcastEpisodes }}</div>
                        <div class="text-[10px] uppercase tracking-widest text-on-surface/40">Live</div>
                    </div>
                    <div>
                        <div class="font-headline text-3xl font-black tracking-tight">{{ $featuredPodcastEpisodes }}</div>
                        <div class="text-[10px] uppercase tracking-widest text-on-surface/40">Featured</div>
                    </div>
                </div>
            </div>
            <div class="mt-8 flex h-32 items-end gap-1">
                <div class="h-[40%] flex-1 rounded-sm bg-primary/20"></div>
                <div class="h-[60%] flex-1 rounded-sm bg-primary/40"></div>
                <div class="h-[85%] flex-1 rounded-sm bg-primary/60"></div>
                <div class="h-[50%] flex-1 rounded-sm bg-primary/30"></div>
                <div class="h-[70%] flex-1 rounded-sm bg-primary/50"></div>
                <div class="h-full flex-1 rounded-sm bg-primary"></div>
            </div>
        </aside>
    </section>

    <div class="grid grid-cols-12 gap-8">
        <section class="col-span-12 space-y-8 xl:col-span-8" aria-labelledby="transmissions-heading">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
                <div class="space-y-1">
                    <h2 id="transmissions-heading" class="font-headline text-3xl font-bold tracking-tight">Active Transmissions</h2>
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="flex items-center gap-1 text-[10px] uppercase tracking-widest text-on-surface/40">
                            <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-primary"></span>
                            Live Syncing
                        </div>
                        <div class="text-[10px] uppercase tracking-widest text-on-surface/40">Filtered by: Recent</div>
                    </div>
                </div>
                <a href="#episode-form" class="font-headline flex items-center gap-2 text-sm font-semibold text-primary hover:underline">
                    <span class="material-symbols-outlined text-lg" aria-hidden="true">mic_external_on</span>
                    Add Episode
                </a>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                @forelse ($podcastEpisodes as $episode)
                    <article class="group">
                        <a class="block" href="{{ $episode->youtube_url }}" target="_blank" rel="noreferrer">
                            <div class="relative mb-4 aspect-video overflow-hidden rounded-xl bg-surface-container-high">
                                <img alt="{{ $episode->title }}" class="h-full w-full object-cover opacity-70 grayscale transition-all duration-700 group-hover:scale-110 group-hover:grayscale-0 group-hover:opacity-100" src="{{ $episode->display_thumbnail }}">
                                <div class="absolute inset-0 bg-gradient-to-t from-background to-transparent opacity-60"></div>
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-primary/90 text-on-primary">
                                        <span class="material-symbols-outlined filled-icon text-3xl" aria-hidden="true">play_arrow</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-3 left-3 rounded bg-background/80 px-2 py-1 text-[10px] font-bold tracking-widest text-primary backdrop-blur-md">
                                    {{ $episode->is_published ? 'LIVE NOW' : 'DRAFT' }}
                                </div>
                                @if ($episode->is_featured)
                                    <div class="absolute right-3 top-3 rounded bg-primary px-2 py-1 text-[10px] font-black uppercase tracking-widest text-on-primary">Featured</div>
                                @endif
                            </div>
                        </a>

                        <div class="space-y-3">
                            <div class="flex items-start justify-between gap-4">
                                <span class="font-headline text-[10px] uppercase tracking-widest text-on-surface/40">
                                    {{ $episode->episode_number ? 'EP '.$episode->episode_number.' - ' : '' }}{{ optional($episode->published_at)->format('M d, Y') ?? 'Unpublished' }}
                                </span>
                                <span class="text-[10px] uppercase tracking-widest text-primary">{{ $episode->duration ?: 'Duration TBA' }}</span>
                            </div>
                            <h3 class="font-headline text-lg font-bold leading-tight transition-colors group-hover:text-primary">{{ $episode->title }}</h3>
                            <p class="line-clamp-2 text-sm text-on-surface/50">{{ $episode->description }}</p>
                            <div class="flex items-center justify-between border-t border-outline-variant/10 pt-4">
                                <span class="rounded-full bg-surface-container-high px-3 py-1 text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">{{ $episode->category }}</span>
                                <div class="flex gap-4">
                                    <a class="flex items-center gap-1 text-xs font-bold uppercase tracking-tight text-on-surface-variant transition-colors hover:text-primary" href="{{ route('dashboard.podcast', ['edit' => $episode->id]) }}#episode-form">
                                        <span class="material-symbols-outlined text-sm" aria-hidden="true">edit</span>
                                        Edit
                                    </a>
                                    <form method="post" action="{{ route('dashboard.podcast.destroy', $episode) }}" onsubmit="return confirm('Delete this podcast episode?')">
                                        @csrf
                                        @method('delete')
                                        <button class="flex items-center gap-1 text-xs font-bold uppercase tracking-tight text-on-surface-variant transition-colors hover:text-error" type="submit">
                                            <span class="material-symbols-outlined text-sm" aria-hidden="true">delete</span>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="md:col-span-2 rounded-xl border border-outline-variant/20 bg-surface-container-low p-12 text-center">
                        <span class="material-symbols-outlined text-5xl text-primary" aria-hidden="true">podcasts</span>
                        <h3 class="mt-6 font-headline text-2xl font-bold">No Episodes Yet</h3>
                        <p class="mx-auto mt-3 max-w-md text-sm text-on-surface/50">Add a YouTube link and publish the first podcast transmission.</p>
                    </div>
                @endforelse
            </div>

            @if ($podcastEpisodes->hasPages())
                <div class="flex justify-end gap-2">
                    @if ($podcastEpisodes->previousPageUrl())
                        <a class="rounded border border-outline-variant/30 px-4 py-2 text-[10px] font-bold uppercase text-on-surface-variant transition-colors hover:border-on-surface-variant" href="{{ $podcastEpisodes->previousPageUrl() }}">Prev</a>
                    @endif
                    @if ($podcastEpisodes->nextPageUrl())
                        <a class="rounded border border-primary px-4 py-2 text-[10px] font-bold uppercase text-on-surface transition-colors hover:bg-primary/10" href="{{ $podcastEpisodes->nextPageUrl() }}">Next</a>
                    @endif
                </div>
            @endif
        </section>

        <aside class="col-span-12 xl:col-span-4">
            <div id="episode-form" class="rim-light rounded-xl bg-surface-container p-6 xl:sticky xl:top-32 xl:p-8">
                <div class="mb-6 flex items-start justify-between gap-4">
                    <div>
                        <h2 class="font-headline text-xl font-bold text-on-surface">{{ $isEditing ? 'Edit Episode' : 'Create Episode' }}</h2>
                        <p class="mt-1 text-xs text-on-surface/40">{{ $isEditing ? 'Update the selected YouTube episode.' : 'Add a new YouTube podcast episode.' }}</p>
                    </div>
                    @if ($isEditing)
                        <a class="text-[10px] font-bold uppercase tracking-widest text-primary hover:underline" href="{{ route('dashboard.podcast') }}#episode-form">New</a>
                    @endif
                </div>

                <form id="podcast-episode-form" class="space-y-6" method="post" action="{{ $formAction }}">
                    @csrf
                    @if ($isEditing)
                        @method('patch')
                    @endif

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Title</span>
                        <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="title" placeholder="Episode title" type="text" value="{{ old('title', $editingEpisode->title ?? '') }}" required>
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </label>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-1">
                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Category</span>
                            <select class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary" name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category }}" @selected(old('category', $editingEpisode->category ?? 'Leadership Blueprints') === $category)>{{ $category }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('category')" />
                        </label>

                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Thumbnail Override</span>
                            <input class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:ring-1 focus:ring-primary" name="thumbnail_url" placeholder="Optional image URL" type="url" value="{{ old('thumbnail_url', $editingEpisode->thumbnail_url ?? '') }}">
                            <x-input-error class="mt-2" :messages="$errors->get('thumbnail_url')" />
                        </label>
                    </div>

                    <div class="grid grid-cols-2 gap-5">
                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Episode #</span>
                            <input class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:ring-1 focus:ring-primary" name="episode_number" min="1" type="number" value="{{ old('episode_number', $editingEpisode->episode_number ?? '') }}">
                            <x-input-error class="mt-2" :messages="$errors->get('episode_number')" />
                        </label>

                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Duration</span>
                            <input class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:ring-1 focus:ring-primary" name="duration" placeholder="48 MINS" type="text" value="{{ old('duration', $editingEpisode->duration ?? '') }}">
                            <x-input-error class="mt-2" :messages="$errors->get('duration')" />
                        </label>
                    </div>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Description</span>
                        <textarea class="w-full resize-none border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="description" placeholder="Episode summary..." rows="4">{{ old('description', $editingEpisode->description ?? '') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('description')" />
                    </label>

                    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 xl:grid-cols-1">
                        <label class="flex items-center gap-3 rounded-lg bg-surface-container-high px-4 py-3">
                            <input class="rounded border-outline-variant bg-surface text-primary focus:ring-primary" name="is_published" type="checkbox" value="1" @checked(old('is_published', $editingEpisode->is_published ?? true))>
                            <span class="text-sm text-on-surface/70">Publish on podcast page</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-lg bg-surface-container-high px-4 py-3">
                            <input class="rounded border-outline-variant bg-surface text-primary focus:ring-primary" name="is_featured" type="checkbox" value="1" @checked(old('is_featured', $editingEpisode->is_featured ?? false))>
                            <span class="text-sm text-on-surface/70">Feature episode</span>
                        </label>
                    </div>

                    <button class="liquid-gold-bg font-headline w-full rounded-xl py-4 text-xs font-bold uppercase tracking-widest text-on-primary transition-all hover:shadow-[0_10px_30px_-5px_rgba(241,204,25,0.3)] active:scale-[0.98]" type="submit">
                        {{ $isEditing ? 'Update Episode' : 'Publish Episode' }}
                    </button>
                </form>
            </div>
        </aside>
    </div>
@endsection

@section('floatingAction')
    <a href="#episode-form" class="liquid-gold-gradient fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full text-on-primary shadow-[0_20px_50px_rgba(241,204,25,0.2)] transition-all duration-300 hover:scale-110 active:scale-90 sm:bottom-8 sm:right-8 sm:h-16 sm:w-16" aria-label="Create new transmission">
        <span class="material-symbols-outlined text-3xl" aria-hidden="true">mic_external_on</span>
    </a>
@endsection
