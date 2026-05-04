@extends('layouts.admin')

@section('title', 'ILOGE | Newsletter Subscribers')
@section('activeAdminPage', 'subscribers')
@section('headerTitle', 'Newsletter Subscribers')
@section('searchPlaceholder', 'Search subscribers...')
@section('searchLabel', 'Search newsletter subscribers')
@section('mainClass', 'min-h-screen px-4 pb-24 pt-28 sm:px-6 lg:ml-72 lg:px-12 lg:pt-32')

@php
    $isEditing = filled($editingSubscriber);
    $formAction = $isEditing ? route('dashboard.subscribers.update', $editingSubscriber) : route('dashboard.subscribers.store');
    $statuses = [
        'subscribed' => 'Subscribed',
        'paused' => 'Paused',
        'unsubscribed' => 'Unsubscribed',
    ];
@endphp

@section('headerAction')
    <a href="#broadcast-form" class="font-headline hidden rounded-full border border-primary/10 bg-surface-container-high px-6 py-2 text-[10px] font-bold uppercase tracking-widest text-primary transition-colors hover:bg-primary hover:text-on-primary md:block">
        Send Email
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
                Subscriber <br><span class="text-primary">Dispatch.</span>
            </h1>
            <p class="max-w-2xl text-base font-light leading-relaxed text-on-surface-variant sm:text-lg">
                Manage newsletter subscribers, segment by source, and send broadcast emails directly from the dashboard.
            </p>
        </div>

        <div class="grid w-full grid-cols-2 gap-4 sm:w-auto lg:grid-cols-4">
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[120px]">
                <span class="font-headline block text-3xl font-bold text-primary">{{ $totalSubscribers }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">Total</span>
            </div>
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[120px]">
                <span class="font-headline block text-3xl font-bold text-on-surface">{{ $activeSubscribers }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">Active</span>
            </div>
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[120px]">
                <span class="font-headline block text-3xl font-bold text-on-surface-variant">{{ $pausedSubscribers }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">Paused</span>
            </div>
            <div class="rim-light rounded-xl bg-surface-container-low p-4 text-center sm:min-w-[120px]">
                <span class="font-headline block text-3xl font-bold text-error">{{ $unsubscribedSubscribers }}</span>
                <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/60">Stopped</span>
            </div>
        </div>
    </section>

    <div class="grid grid-cols-12 gap-8">
        <section class="col-span-12 space-y-8 xl:col-span-8" aria-labelledby="subscriber-directory-heading">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <h2 id="subscriber-directory-heading" class="font-headline text-2xl font-bold text-on-surface">Subscriber Directory</h2>
                <a href="#subscriber-form" class="font-headline flex items-center gap-2 text-sm font-semibold text-primary hover:underline">
                    <span class="material-symbols-outlined text-lg" aria-hidden="true">person_add</span>
                    Add Subscriber
                </a>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                @forelse ($subscribers as $subscriber)
                    @php
                        $statusClass = match ($subscriber->status) {
                            'paused' => 'bg-surface-container-high text-on-surface-variant',
                            'unsubscribed' => 'bg-error-container text-on-error-container',
                            default => 'bg-primary text-on-primary',
                        };
                    @endphp

                    <article class="rim-light rounded-xl bg-surface-container-low p-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_-20px_rgba(241,204,25,0.15)]">
                        <div class="mb-6 flex items-start justify-between gap-4">
                            <div class="flex min-w-0 items-center gap-4">
                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary">
                                    <span class="material-symbols-outlined filled-icon" aria-hidden="true">mail</span>
                                </div>
                                <div class="min-w-0">
                                    <h3 class="truncate font-headline text-lg font-bold text-on-surface">{{ $subscriber->email }}</h3>
                                    <p class="truncate text-sm text-on-surface-variant">{{ $subscriber->source ?: 'Manual source' }}</p>
                                </div>
                            </div>
                            <span class="{{ $statusClass }} rounded-full px-3 py-1 text-[10px] font-black uppercase tracking-widest">{{ $statuses[$subscriber->status] ?? ucfirst($subscriber->status) }}</span>
                        </div>

                        <div class="grid grid-cols-2 gap-4 border-y border-outline-variant/10 py-5">
                            <div>
                                <span class="block text-[10px] uppercase tracking-widest text-on-surface-variant/50">Subscribed</span>
                                <span class="font-headline text-sm font-bold text-on-surface">{{ optional($subscriber->subscribed_at)->format('d M Y') ?? 'Not active' }}</span>
                            </div>
                            <div>
                                <span class="block text-[10px] uppercase tracking-widest text-on-surface-variant/50">Last Email</span>
                                <span class="font-headline text-sm font-bold text-primary">{{ optional($subscriber->last_emailed_at)->format('d M Y') ?? 'Never' }}</span>
                            </div>
                        </div>

                        @if ($subscriber->notes)
                            <p class="mt-5 line-clamp-2 text-sm text-on-surface-variant">{{ $subscriber->notes }}</p>
                        @endif

                        <div class="mt-6 flex items-center justify-between border-t border-outline-variant/10 pt-5">
                            <span class="text-[10px] uppercase tracking-widest text-on-surface-variant/40">Updated {{ $subscriber->updated_at->format('d M Y') }}</span>
                            <div class="flex gap-4">
                                <a class="flex items-center gap-1 text-xs font-bold uppercase tracking-tight text-on-surface-variant transition-colors hover:text-primary" href="{{ route('dashboard.subscribers', ['edit' => $subscriber->id]) }}#subscriber-form">
                                    <span class="material-symbols-outlined text-sm" aria-hidden="true">edit</span>
                                    Edit
                                </a>
                                <form method="post" action="{{ route('dashboard.subscribers.destroy', $subscriber) }}" onsubmit="return confirm('Delete this subscriber?')">
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
                        <span class="material-symbols-outlined text-5xl text-primary" aria-hidden="true">mark_email_read</span>
                        <h3 class="mt-6 font-headline text-2xl font-bold">No Subscribers Yet</h3>
                        <p class="mx-auto mt-3 max-w-md text-sm text-on-surface/50">Newsletter signups from the public site and manual additions will appear here.</p>
                    </div>
                @endforelse
            </div>

            @if ($subscribers->hasPages())
                <div class="flex justify-end gap-2">
                    @if ($subscribers->previousPageUrl())
                        <a class="rounded border border-outline-variant/30 px-4 py-2 text-[10px] font-bold uppercase text-on-surface-variant transition-colors hover:border-on-surface-variant" href="{{ $subscribers->previousPageUrl() }}">Prev</a>
                    @endif
                    @if ($subscribers->nextPageUrl())
                        <a class="rounded border border-primary px-4 py-2 text-[10px] font-bold uppercase text-on-surface transition-colors hover:bg-primary/10" href="{{ $subscribers->nextPageUrl() }}">Next</a>
                    @endif
                </div>
            @endif
        </section>

        <aside class="col-span-12 space-y-8 xl:col-span-4">
            <div id="broadcast-form" class="rim-light rounded-xl bg-surface-container p-6 xl:p-8">
                <div class="mb-6">
                    <h2 class="font-headline text-xl font-bold text-on-surface">Send Broadcast</h2>
                    <p class="mt-1 text-xs text-on-surface/40">Emails use your configured Laravel mail driver.</p>
                </div>

                <form class="space-y-6" method="post" action="{{ route('dashboard.subscribers.send') }}">
                    @csrf
                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Audience</span>
                        <select class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary" name="audience">
                            <option value="subscribed" @selected(old('audience') === 'subscribed')>Active subscribers</option>
                            <option value="source" @selected(old('audience') === 'source')>Active subscribers from source</option>
                            <option value="all" @selected(old('audience') === 'all')>All records</option>
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('audience')" />
                    </label>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Source Filter</span>
                        <select class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary" name="source">
                            <option value="">Choose source when needed</option>
                            @foreach ($subscriberSources as $source)
                                <option value="{{ $source }}" @selected(old('source') === $source)>{{ $source }}</option>
                            @endforeach
                        </select>
                        <x-input-error class="mt-2" :messages="$errors->get('source')" />
                    </label>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Subject</span>
                        <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="subject" placeholder="A new Iloge insight" type="text" value="{{ old('subject') }}" required>
                        <x-input-error class="mt-2" :messages="$errors->get('subject')" />
                    </label>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Message</span>
                        <textarea class="w-full resize-none border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="body" placeholder="Write your message..." rows="7" required>{{ old('body') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('body')" />
                    </label>

                    <button class="liquid-gold-bg font-headline w-full rounded-xl py-4 text-xs font-bold uppercase tracking-widest text-on-primary transition-all hover:shadow-[0_10px_30px_-5px_rgba(241,204,25,0.3)] active:scale-[0.98]" type="submit">
                        Send Email
                    </button>
                </form>
            </div>

            <div id="subscriber-form" class="rim-light rounded-xl bg-surface-container p-6 xl:p-8">
                <div class="mb-6 flex items-start justify-between gap-4">
                    <div>
                        <h2 class="font-headline text-xl font-bold text-on-surface">{{ $isEditing ? 'Edit Subscriber' : 'Add Subscriber' }}</h2>
                        <p class="mt-1 text-xs text-on-surface/40">{{ $isEditing ? 'Update the selected email record.' : 'Create a subscriber manually.' }}</p>
                    </div>
                    @if ($isEditing)
                        <a class="text-[10px] font-bold uppercase tracking-widest text-primary hover:underline" href="{{ route('dashboard.subscribers') }}#subscriber-form">New</a>
                    @endif
                </div>

                <form class="space-y-6" method="post" action="{{ $formAction }}">
                    @csrf
                    @if ($isEditing)
                        @method('patch')
                    @endif

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Email</span>
                        <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="email" placeholder="subscriber@example.com" type="email" value="{{ old('email', $editingSubscriber->email ?? '') }}" required>
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </label>

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-1">
                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Source</span>
                            <input class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:ring-1 focus:ring-primary" name="source" placeholder="podcast, blog, manual..." type="text" value="{{ old('source', $editingSubscriber->source ?? '') }}">
                            <x-input-error class="mt-2" :messages="$errors->get('source')" />
                        </label>

                        <label class="block space-y-2">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Status</span>
                            <select class="w-full rounded-lg border-none bg-surface-container-high px-4 py-3 text-sm text-on-surface focus:ring-1 focus:ring-primary" name="status">
                                @foreach ($statuses as $value => $label)
                                    <option value="{{ $value }}" @selected(old('status', $editingSubscriber->status ?? 'subscribed') === $value)>{{ $label }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </label>
                    </div>

                    <label class="block space-y-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Notes</span>
                        <textarea class="w-full resize-none border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-2 text-on-surface placeholder:text-on-surface/20 transition-colors focus:border-primary focus:ring-0" name="notes" placeholder="Preferences, campaign context, import notes..." rows="4">{{ old('notes', $editingSubscriber->notes ?? '') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('notes')" />
                    </label>

                    <button class="liquid-gold-bg font-headline w-full rounded-xl py-4 text-xs font-bold uppercase tracking-widest text-on-primary transition-all hover:shadow-[0_10px_30px_-5px_rgba(241,204,25,0.3)] active:scale-[0.98]" type="submit">
                        {{ $isEditing ? 'Update Subscriber' : 'Create Subscriber' }}
                    </button>
                </form>
            </div>
        </aside>
    </div>
@endsection
