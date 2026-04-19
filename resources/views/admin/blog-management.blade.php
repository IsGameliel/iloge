@extends('layouts.admin')

@section('title', 'ILOGE | Blog Management')
@section('activeAdminPage', 'blog')
@section('headerTitle', 'Blog Management')
@section('searchPlaceholder', 'Search archive...')
@section('mainClass', 'space-y-12 px-4 pb-24 pt-28 sm:px-6 lg:ml-72 lg:space-y-16 lg:px-12 lg:pt-32')

@php
    $isEditing = filled($editingPost);
    $formAction = $isEditing ? route('dashboard.blog.update', $editingPost) : route('dashboard.blog.store');
    $categories = ['Leadership & Ethics', 'Technological Sovereignty', 'Architectural Theory', 'Future Paradigms'];
@endphp

@section('headerAction')
    <a href="#drafting-workspace" class="font-headline hidden items-center gap-2 rounded-lg border border-primary/20 bg-primary/10 px-4 py-2 text-xs font-bold uppercase tracking-widest text-primary transition-all hover:bg-primary/20 sm:flex">
        <span class="material-symbols-outlined text-sm" aria-hidden="true">post_add</span>
        Create New Post
    </a>
@endsection

@section('content')
    @if (session('success'))
        <div class="rounded-xl border border-primary/20 bg-primary/10 px-5 py-4 text-sm font-semibold text-primary">
            {{ session('success') }}
        </div>
    @endif

    <section aria-label="Blog statistics">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
            <article class="group relative overflow-hidden rounded-xl bg-surface-container-low p-8">
                <div class="relative z-10">
                    <p class="font-headline text-xs font-bold uppercase tracking-widest text-on-surface-variant">Total Narratives</p>
                    <h3 class="font-headline mt-4 text-4xl font-extrabold text-on-surface">{{ number_format($totalPosts) }}</h3>
                    <p class="mt-2 flex items-center gap-1 text-[10px] text-primary"><span class="material-symbols-outlined text-xs" aria-hidden="true">library_books</span> ALL TIME</p>
                </div>
                <div class="absolute -bottom-4 -right-4 text-on-surface/5 transition-colors duration-700 group-hover:text-primary/10">
                    <span class="material-symbols-outlined filled-icon text-8xl" aria-hidden="true">article</span>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-xl bg-surface-container-low p-8">
                <div class="relative z-10">
                    <p class="font-headline text-xs font-bold uppercase tracking-widest text-on-surface-variant">Published</p>
                    <h3 class="font-headline mt-4 text-4xl font-extrabold text-on-surface">{{ number_format($publishedPosts) }}</h3>
                    <p class="mt-2 flex items-center gap-1 text-[10px] text-primary"><span class="material-symbols-outlined text-xs" aria-hidden="true">check_circle</span> LIVE POSTS</p>
                </div>
                <div class="absolute -bottom-4 -right-4 text-on-surface/5 transition-colors duration-700 group-hover:text-primary/10">
                    <span class="material-symbols-outlined filled-icon text-8xl" aria-hidden="true">visibility</span>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-xl bg-surface-container-low p-8">
                <div class="relative z-10">
                    <p class="font-headline text-xs font-bold uppercase tracking-widest text-on-surface-variant">Drafts</p>
                    <h3 class="font-headline mt-4 text-4xl font-extrabold text-on-surface">{{ number_format($draftPosts) }}</h3>
                    <p class="mt-2 flex items-center gap-1 text-[10px] text-on-surface-variant/40">IN PROGRESS</p>
                </div>
                <div class="absolute -bottom-4 -right-4 text-on-surface/5 transition-colors duration-700 group-hover:text-primary/10">
                    <span class="material-symbols-outlined filled-icon text-8xl" aria-hidden="true">edit_note</span>
                </div>
            </article>

            <article class="flex flex-col justify-between rounded-xl border-l border-primary/20 bg-surface-container-high p-8">
                <div>
                    <p class="font-headline text-xs font-bold uppercase tracking-widest text-primary">Avg. Read Time</p>
                    <h3 class="font-headline mt-4 text-4xl font-extrabold text-on-surface">{{ $averageReadTime ?: 0 }}m</h3>
                    <p class="mt-2 text-xs text-on-surface-variant">Calculated from all narratives.</p>
                </div>
                <a href="#editorial-queue" class="mt-8 flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-primary transition-all hover:tracking-[0.2em]">
                    View Queue <span class="material-symbols-outlined text-xs" aria-hidden="true">arrow_forward</span>
                </a>
            </article>
        </div>
    </section>

    <section id="drafting-workspace" class="grid grid-cols-1 gap-8 lg:grid-cols-12">
        <div class="rounded-xl bg-surface-container-low p-6 sm:p-10 lg:col-span-8">
            <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 class="font-headline text-2xl font-extrabold tracking-tighter text-on-surface">
                    {{ $isEditing ? 'Edit Narrative' : 'Drafting Workspace' }}
                </h2>
                <span class="w-fit rounded-full bg-surface-container-high px-3 py-1 text-[10px] uppercase tracking-widest text-on-surface-variant">
                    {{ $isEditing ? 'Revision Phase' : 'Concept Phase' }}
                </span>
            </div>

            <form method="post" action="{{ $formAction }}" class="space-y-10">
                @csrf
                @if ($isEditing)
                    @method('patch')
                @endif

                <label class="group relative block">
                    <span class="absolute -top-4 left-0 text-[10px] font-bold uppercase tracking-widest text-primary opacity-0 transition-opacity group-focus-within:opacity-100">Headline</span>
                    <input
                        class="font-headline w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent py-4 text-2xl font-light placeholder:text-on-surface-variant/20 transition-all focus:border-primary focus:outline-none focus:ring-0 sm:text-3xl"
                        name="title"
                        placeholder="Title of the Narrative"
                        type="text"
                        value="{{ old('title', $editingPost->title ?? '') }}"
                        required
                    >
                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                </label>

                <div class="grid gap-6 sm:grid-cols-3">
                    <label class="block">
                        <span class="mb-2 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Category</span>
                        <select name="category" class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary">
                            @foreach ($categories as $category)
                                <option value="{{ $category }}" @selected(old('category', $editingPost->category ?? 'Leadership & Ethics') === $category)>{{ $category }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('category')" />
                    </label>

                    <label class="block">
                        <span class="mb-2 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Status</span>
                        <select name="status" class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary">
                            <option value="draft" @selected(old('status', $editingPost->status ?? 'draft') === 'draft')>Draft</option>
                            <option value="published" @selected(old('status', $editingPost->status ?? '') === 'published')>Published</option>
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('status')" />
                    </label>

                    <label class="block">
                        <span class="mb-2 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Estimated Read</span>
                        <input
                            class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary"
                            min="1"
                            max="120"
                            name="read_time"
                            type="number"
                            value="{{ old('read_time', $editingPost->read_time ?? 6) }}"
                            required
                        >
                        <x-input-error class="mt-2" :messages="$errors->get('read_time')" />
                    </label>
                </div>

                <label class="block">
                    <span class="mb-2 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Feature Image URL</span>
                    <input
                        class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface-variant/30 focus:ring-1 focus:ring-primary"
                        name="image_url"
                        placeholder="https://..."
                        type="url"
                        value="{{ old('image_url', $editingPost->image_url ?? '') }}"
                    >
                    <x-input-error class="mt-2" :messages="$errors->get('image_url')" />
                </label>

                <label class="block">
                    <span class="mb-2 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Abstract</span>
                    <textarea class="min-h-[90px] w-full resize-none rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm leading-relaxed text-on-surface placeholder:text-on-surface-variant/30 focus:ring-1 focus:ring-primary" name="excerpt" placeholder="Brief summary for the archive...">{{ old('excerpt', $editingPost->excerpt ?? '') }}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('excerpt')" />
                </label>

                <label class="block">
                    <span class="sr-only">Content</span>
                    <textarea class="min-h-[220px] w-full resize-none border-none bg-transparent p-0 text-lg leading-relaxed text-on-surface-variant placeholder:text-on-surface-variant/20 focus:ring-0" name="content" placeholder="Begin the exploration..." required>{{ old('content', $editingPost->content ?? '') }}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('content')" />
                </label>

                <div class="flex flex-col justify-between gap-6 border-t border-outline-variant/10 pt-6 sm:flex-row sm:items-center">
                    <div class="flex gap-4 text-on-surface-variant/60">
                        <span class="material-symbols-outlined" aria-hidden="true">format_bold</span>
                        <span class="material-symbols-outlined" aria-hidden="true">format_italic</span>
                        <span class="material-symbols-outlined" aria-hidden="true">link</span>
                        <span class="material-symbols-outlined" aria-hidden="true">image</span>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row sm:gap-4">
                        @if ($isEditing)
                            <a href="{{ route('dashboard.blog') }}#drafting-workspace" class="rounded-lg px-6 py-2 text-center text-xs font-bold text-on-surface-variant transition-colors hover:text-on-surface">Cancel Edit</a>
                        @endif
                        <button class="liquid-gold rounded-lg px-8 py-3 text-xs font-bold uppercase tracking-widest text-on-primary shadow-lg shadow-primary/20">
                            {{ $isEditing ? 'Update Narrative' : 'Finalize Concept' }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <aside class="space-y-8 lg:col-span-4">
            <div class="flex h-full flex-col justify-between rounded-xl bg-surface-container-low p-8">
                <div>
                    <h4 class="font-headline mb-6 text-xs font-extrabold uppercase tracking-widest text-on-surface-variant">Recent Drafts</h4>
                    <div class="space-y-6">
                        @forelse ($blogPosts->take(2) as $recentPost)
                            <a class="group flex items-start gap-4" href="{{ route('dashboard.blog', ['edit' => $recentPost->id]) }}#drafting-workspace">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-surface-container-high text-primary">
                                    <span class="material-symbols-outlined text-sm" aria-hidden="true">article</span>
                                </div>
                                <div>
                                    <p class="text-xs leading-snug text-on-surface transition-colors group-hover:text-primary">{{ $recentPost->title }}</p>
                                    <p class="mt-1 text-[10px] font-bold uppercase text-primary">{{ $recentPost->status }} - {{ $recentPost->updated_at->diffForHumans() }}</p>
                                </div>
                            </a>
                        @empty
                            <p class="text-sm leading-relaxed text-on-surface-variant">No narratives yet. Create the first post from the drafting workspace.</p>
                        @endforelse
                    </div>
                </div>

                <div class="mt-12 rounded-lg bg-surface-container-high p-6">
                    <p class="font-headline text-[10px] font-bold uppercase tracking-widest text-primary">Editorial Note</p>
                    <p class="mt-3 text-sm leading-relaxed text-on-surface-variant">Publishing a post sets its finalized timestamp automatically. Returning it to draft removes the public timestamp.</p>
                </div>
            </div>
        </aside>
    </section>

    <section id="editorial-queue">
        <div class="mb-10 flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <h2 class="font-headline text-4xl font-extrabold tracking-tighter text-on-surface">Editorial Queue</h2>
                <p class="mt-2 text-sm font-light text-on-surface-variant">The active lifecycle of your public narratives.</p>
            </div>
        </div>

        <div class="overflow-hidden rounded-xl bg-surface-container-low shadow-2xl">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[940px] border-collapse text-left">
                    <thead>
                        <tr class="bg-surface-container-high/50">
                            <th class="font-headline px-8 py-6 text-[10px] font-extrabold uppercase tracking-[0.2em] text-on-surface-variant">Narrative Title</th>
                            <th class="font-headline px-8 py-6 text-[10px] font-extrabold uppercase tracking-[0.2em] text-on-surface-variant">Domain</th>
                            <th class="font-headline px-8 py-6 text-[10px] font-extrabold uppercase tracking-[0.2em] text-on-surface-variant">Read Time</th>
                            <th class="font-headline px-8 py-6 text-[10px] font-extrabold uppercase tracking-[0.2em] text-on-surface-variant">Status</th>
                            <th class="font-headline px-8 py-6 text-[10px] font-extrabold uppercase tracking-[0.2em] text-on-surface-variant">Finalized</th>
                            <th class="font-headline px-8 py-6 text-right text-[10px] font-extrabold uppercase tracking-[0.2em] text-on-surface-variant">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/10">
                        @forelse ($blogPosts as $post)
                            <tr class="group transition-colors hover:bg-surface-container-highest/20">
                                <td class="px-8 py-8">
                                    <div class="flex items-center gap-4">
                                        <div class="h-12 w-12 overflow-hidden rounded-lg bg-surface-container-high">
                                            @if ($post->image_url)
                                                <img alt="" class="h-full w-full object-cover" src="{{ $post->image_url }}">
                                            @else
                                                <div class="flex h-full w-full items-center justify-center text-primary">
                                                    <span class="material-symbols-outlined" aria-hidden="true">article</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="font-headline text-sm font-bold text-on-surface">{{ $post->title }}</p>
                                            <p class="mt-1 text-[10px] uppercase text-on-surface-variant">{{ $post->author?->name ?? 'Iloge Admin' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-8">
                                    <span class="rounded bg-surface-container-high px-3 py-1 text-[10px] font-bold uppercase {{ $post->status === 'published' ? 'text-primary' : 'text-on-surface-variant' }}">{{ $post->category }}</span>
                                </td>
                                <td class="px-8 py-8 text-sm font-bold text-on-surface">{{ $post->read_time }} min</td>
                                <td class="px-8 py-8">
                                    <span class="flex items-center gap-2 text-[10px] font-bold uppercase {{ $post->status === 'published' ? 'text-primary' : 'text-on-surface-variant/60' }}">
                                        <span class="h-2 w-2 rounded-full {{ $post->status === 'published' ? 'bg-primary' : 'bg-on-surface-variant/40' }}"></span>
                                        {{ $post->status }}
                                    </span>
                                </td>
                                <td class="px-8 py-8 text-sm font-light text-on-surface-variant">
                                    {{ $post->published_at ? $post->published_at->format('M d, Y') : 'Last edit '.$post->updated_at->diffForHumans() }}
                                </td>
                                <td class="px-8 py-8 text-right">
                                    <div class="flex items-center justify-end gap-3">
                                        <a class="group/edit flex items-center gap-1.5 text-on-surface-variant/40 transition-colors hover:text-primary" href="{{ route('dashboard.blog', ['edit' => $post->id]) }}#drafting-workspace">
                                            <span class="material-symbols-outlined text-xl" aria-hidden="true">edit_note</span>
                                            <span class="text-[10px] font-bold uppercase tracking-widest opacity-0 transition-opacity group-hover/edit:opacity-100">Edit</span>
                                        </a>
                                        <form method="post" action="{{ route('dashboard.blog.destroy', $post) }}" onsubmit="return confirm('Delete this blog post?')">
                                            @csrf
                                            @method('delete')
                                            <button class="group/delete flex items-center gap-1.5 text-on-surface-variant/40 transition-colors hover:text-red-400" type="submit">
                                                <span class="material-symbols-outlined text-xl" aria-hidden="true">delete_sweep</span>
                                                <span class="text-[10px] font-bold uppercase tracking-widest opacity-0 transition-opacity group-hover/delete:opacity-100">Delete</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-8 py-12 text-center text-sm text-on-surface-variant" colspan="6">
                                    No blog posts yet. Use the drafting workspace to create your first narrative.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="flex flex-col gap-4 border-t border-outline-variant/10 bg-surface-container-low px-8 py-6 sm:flex-row sm:items-center sm:justify-between">
                <p class="text-[10px] uppercase tracking-widest text-on-surface-variant">
                    Showing {{ $blogPosts->count() }} of {{ $blogPosts->total() }} Narratives
                </p>
                <div class="flex gap-2">
                    @if ($blogPosts->previousPageUrl())
                        <a class="rounded border border-outline-variant/30 px-4 py-1 text-[10px] font-bold uppercase text-on-surface-variant transition-colors hover:border-on-surface-variant" href="{{ $blogPosts->previousPageUrl() }}">Prev</a>
                    @endif
                    @if ($blogPosts->nextPageUrl())
                        <a class="rounded border border-primary px-4 py-1 text-[10px] font-bold uppercase text-on-surface transition-colors hover:bg-primary/10" href="{{ $blogPosts->nextPageUrl() }}">Next</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@section('floatingAction')
    <a href="#drafting-workspace" class="liquid-gold fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full shadow-2xl transition-all hover:scale-110 active:scale-95 sm:bottom-12 sm:right-12 sm:h-16 sm:w-16" aria-label="Create new entry">
        <span class="material-symbols-outlined text-3xl text-on-primary transition-transform duration-500 hover:rotate-90" aria-hidden="true">add</span>
    </a>
@endsection
