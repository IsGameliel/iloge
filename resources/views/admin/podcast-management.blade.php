@extends('layouts.admin')

@section('title', 'ILOGE | Podcast Curation')
@section('activeAdminPage', 'podcast')
@section('headerTitle', 'Podcast Curation')
@section('searchPlaceholder', 'Search parameters...')
@section('mainClass', 'min-h-screen pt-20 lg:ml-72')

@section('content')
<div class="mx-auto max-w-7xl space-y-12 p-4 sm:p-6 lg:p-8">
            <section class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                <div class="space-y-6 lg:col-span-2">
                    <div class="space-y-2">
                        <h1 class="font-headline text-4xl font-extrabold tracking-tighter text-on-surface sm:text-5xl">Podcast Curation</h1>
                        <p class="max-w-xl text-lg leading-relaxed text-on-surface/60">Streamline your content pipeline by integrating high-signal audio transmissions directly into the Sovereign ecosystem.</p>
                    </div>

                    <div class="group relative overflow-hidden rounded-xl border-l-4 border-primary/40 bg-surface-container-low p-6 sm:p-8">
                        <div class="pointer-events-none absolute -right-12 -top-12 opacity-5 transition-opacity duration-700 group-hover:opacity-10">
                            <span class="material-symbols-outlined text-[12rem]" aria-hidden="true">youtube_activity</span>
                        </div>
                        <div class="relative z-10 space-y-4">
                            <p class="font-headline text-[10px] font-bold uppercase tracking-widest text-primary">Automatic Sync Engine</p>
                            <div class="flex flex-col gap-4 md:flex-row">
                                <input class="font-headline flex-1 border-x-0 border-t-0 border-outline-variant/30 bg-transparent py-4 text-xl placeholder:text-on-surface/10 transition-colors focus:border-primary focus:ring-0" placeholder="https://www.youtube.com/watch?v=..." type="url">
                                <button type="button" class="font-headline flex items-center justify-center gap-3 self-stretch border border-primary/10 bg-surface-container-high px-8 py-4 text-xs font-bold uppercase tracking-widest text-on-surface transition-all duration-300 hover:bg-surface-container-highest md:self-end">
                                    Integrate Episode
                                    <span class="material-symbols-outlined text-primary" aria-hidden="true">dynamic_feed</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="relative flex flex-col justify-between overflow-hidden rounded-xl border border-outline-variant/10 bg-surface-container p-8">
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined text-sm" aria-hidden="true">trending_up</span>
                            <span class="font-headline text-[10px] font-bold uppercase tracking-widest">Metrics Hub</span>
                        </div>
                        <div class="space-y-1">
                            <div class="font-headline text-3xl font-black tracking-tight">4.8k <span class="text-xs font-normal text-on-surface/50">Transmissions</span></div>
                            <div class="text-xs text-primary">+12% from last cycle</div>
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

            <section class="space-y-8" aria-labelledby="transmissions-heading">
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
                    <div class="flex gap-2">
                        <button type="button" class="rounded-lg bg-surface-container-high p-2 text-on-surface transition-colors hover:text-primary" aria-label="Filter"><span class="material-symbols-outlined" aria-hidden="true">filter_list</span></button>
                        <button type="button" class="rounded-lg bg-surface-container-high p-2 text-on-surface transition-colors hover:text-primary" aria-label="Grid view"><span class="material-symbols-outlined" aria-hidden="true">grid_view</span></button>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-4">
                    <article class="group cursor-pointer">
                        <div class="relative mb-4 aspect-video overflow-hidden rounded-xl bg-surface-container-high">
                            <img alt="Episode Thumbnail" class="h-full w-full object-cover opacity-60 grayscale transition-all duration-700 group-hover:scale-110 group-hover:grayscale-0 group-hover:opacity-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkgbI9tYE224TvwuY_x1eYFEpAUHJxLCTaSggwDjOZxOoxsERAkwCjXoDieeftrVRnBXaGYM3ff3zcTN2yDWazo_5Cs3Ma65tLONS_L5DKFSxG4eAM7wLojDHrY4yqynCAebb4yq4oHalQS4yPlNHFl5ZjjdCExBA31GVSUHEZ9Z0FsdpVh_lyIurit4_Qah4SIOuoC_T5ZM_2kCflup7tYcLst4u7ZEJ40pCIrrIMdNyGLIcERP5izvMuUMcNcUE0QYPw0R4NIKaV">
                            <div class="absolute inset-0 bg-gradient-to-t from-background to-transparent opacity-60"></div>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-primary/90 text-on-primary">
                                    <span class="material-symbols-outlined filled-icon text-3xl" aria-hidden="true">play_arrow</span>
                                </div>
                            </div>
                            <div class="absolute bottom-3 left-3 rounded bg-background/80 px-2 py-1 text-[10px] font-bold tracking-widest text-primary backdrop-blur-md">LIVE NOW</div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-start justify-between">
                                <span class="font-headline text-[10px] uppercase tracking-widest text-on-surface/40">EP 142 - Oct 24, 2023</span>
                                <span class="material-symbols-outlined text-sm text-on-surface/20 transition-colors group-hover:text-primary" aria-hidden="true">more_vert</span>
                            </div>
                            <h3 class="font-headline text-lg font-bold leading-tight transition-colors group-hover:text-primary">The Neural Architecture: Designing Intelligence</h3>
                            <p class="line-clamp-2 text-sm text-on-surface/50">Exploring the intersections of computational biology and industrial design systems with Dr. Elias Vance.</p>
                        </div>
                    </article>

                    <article class="group cursor-pointer">
                        <div class="relative mb-4 aspect-video overflow-hidden rounded-xl bg-surface-container-high">
                            <img alt="Episode Thumbnail" class="h-full w-full object-cover opacity-60 grayscale transition-all duration-700 group-hover:scale-110 group-hover:grayscale-0 group-hover:opacity-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgDSqSGI5yD4sQkXxYhKEpCRvmry-lCG-5fg58Q07jjWNlGCHe8SOYFPkBz-4ZPL68iw6tCazzs4CIR8VOHyMCwdN354zY1fLdgnRYhdGQWfRiOX33D9Z01koPTFKrvQoE8DPC732s8UoCDB43sYwct_OrqD6ZDrj-tQU9kbtyUrNoLclpinfJNgJ5r-vsvOrq6lC1OVw201H_j3BpF-Ca6nx_qHR9Tu6LuLsa8iG12111dWq9N_dNKMuS2a9IPLg8F8p4sSVQ-_L9">
                            <div class="absolute inset-0 bg-gradient-to-t from-background to-transparent opacity-60"></div>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-primary/90 text-on-primary">
                                    <span class="material-symbols-outlined filled-icon text-3xl" aria-hidden="true">play_arrow</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-start justify-between">
                                <span class="font-headline text-[10px] uppercase tracking-widest text-on-surface/40">EP 141 - Oct 18, 2023</span>
                                <span class="material-symbols-outlined text-sm text-on-surface/20 transition-colors group-hover:text-primary" aria-hidden="true">more_vert</span>
                            </div>
                            <h3 class="font-headline text-lg font-bold leading-tight transition-colors group-hover:text-primary">Sovereign Identity in a Borderless Digital Era</h3>
                            <p class="line-clamp-2 text-sm text-on-surface/50">A deep dive into decentralization and the future of creative ownership in the late 21st century.</p>
                        </div>
                    </article>

                    <article class="group cursor-pointer">
                        <div class="relative mb-4 aspect-video overflow-hidden rounded-xl bg-surface-container-high">
                            <img alt="Episode Thumbnail" class="h-full w-full object-cover opacity-60 grayscale transition-all duration-700 group-hover:scale-110 group-hover:grayscale-0 group-hover:opacity-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfGMxulohWCslGlmdr3byKF_A5NzFXZgYdBrwrVprjyjAukiP9EnXZX58-a-a4KQ3Uc0fK7iKK127hR6_r6p4BHJA4h7bKbQG9cDebKJd5hUp9N0-NwDPhHVnHU8WoNHaP9lFKyNDOoJq2UIA2UsuA_mSr9YnX9zxobOxiNpVBgRYrhTGtYEKlUzebswHKo5oXUaSkibjOlmHKWWy-iKolzb9k8CayM8zDdzO74_7Xc2e04AVBo8hdimCf9v3HJ2otYWXWSUF2cbOa">
                            <div class="absolute inset-0 bg-gradient-to-t from-background to-transparent opacity-60"></div>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-primary/90 text-on-primary">
                                    <span class="material-symbols-outlined filled-icon text-3xl" aria-hidden="true">play_arrow</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-start justify-between">
                                <span class="font-headline text-[10px] uppercase tracking-widest text-on-surface/40">EP 140 - Oct 12, 2023</span>
                                <span class="material-symbols-outlined text-sm text-on-surface/20 transition-colors group-hover:text-primary" aria-hidden="true">more_vert</span>
                            </div>
                            <h3 class="font-headline text-lg font-bold leading-tight transition-colors group-hover:text-primary">Sonic Landscapes: The Art of Ambient Mastery</h3>
                            <p class="line-clamp-2 text-sm text-on-surface/50">Interview with electronic pioneers on how they craft environments through frequency alone.</p>
                        </div>
                    </article>

                    <article class="group cursor-pointer">
                        <div class="relative mb-4 aspect-video overflow-hidden rounded-xl bg-surface-container-high">
                            <img alt="Episode Thumbnail" class="h-full w-full object-cover opacity-60 grayscale transition-all duration-700 group-hover:scale-110 group-hover:grayscale-0 group-hover:opacity-100" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBn26irRXxemyf3fLLC-NG2IPeSKxzdbeMI6g6q_ErdlA5i_Zim812x9dXv60rbSsNYB76RsO3LNA6idW5WSpJn7uUZZO4FZwvvTf6N01wo6P28gqdWhzeGtT5i0LRlb4ginTMceewbGmIOBeV6_BEKbIl7ZUgptzrQnN9zv2EfMLJkvNJT-Juy0FYjYRHpSnEvGWe2hTC_U_gq6GjiEUKnjDdDfxnnYiDdXS-EJqyh5m0iVKJZzXl2PQ-jHGxNrLZD2yTH52JbKfeY">
                            <div class="absolute inset-0 bg-gradient-to-t from-background to-transparent opacity-60"></div>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-primary/90 text-on-primary">
                                    <span class="material-symbols-outlined filled-icon text-3xl" aria-hidden="true">play_arrow</span>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-start justify-between">
                                <span class="font-headline text-[10px] uppercase tracking-widest text-on-surface/40">EP 139 - Oct 05, 2023</span>
                                <span class="material-symbols-outlined text-sm text-on-surface/20 transition-colors group-hover:text-primary" aria-hidden="true">more_vert</span>
                            </div>
                            <h3 class="font-headline text-lg font-bold leading-tight transition-colors group-hover:text-primary">The Philosophy of Silence in Luxury Design</h3>
                            <p class="line-clamp-2 text-sm text-on-surface/50">Why space and quiet are becoming the ultimate signifiers of wealth and status in the modern age.</p>
                        </div>
                    </article>
                </div>
            </section>

            <section class="glass-nav flex flex-col gap-8 rounded-2xl border border-primary/5 p-6 sm:p-8 lg:flex-row lg:items-center lg:justify-between">
                <div class="flex flex-col gap-8 sm:flex-row sm:gap-12">
                    <div class="space-y-1">
                        <div class="font-headline text-[10px] uppercase tracking-widest text-on-surface/40">Active Integration</div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm text-primary" aria-hidden="true">link</span>
                            <span class="font-headline text-sm font-bold">YouTube API v3 Connected</span>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <div class="font-headline text-[10px] uppercase tracking-widest text-on-surface/40">Storage Quota</div>
                        <div class="h-1.5 w-32 overflow-hidden rounded-full bg-surface-container-high">
                            <div class="liquid-gold-gradient h-full w-3/4"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:gap-6">
                    <div class="sm:text-right">
                        <div class="font-headline text-[10px] uppercase tracking-widest text-on-surface/40">Next Scheduled Sync</div>
                        <div class="font-headline text-sm font-bold">In 2 hours 14 minutes</div>
                    </div>
                    <button type="button" class="font-headline rounded-lg border border-primary px-6 py-2 text-[10px] font-bold uppercase tracking-widest text-primary transition-all duration-300 hover:bg-primary hover:text-on-primary">Sync Manual</button>
                </div>
            </section>
        </div>
@endsection
@section('floatingAction')
    <button type="button" class="liquid-gold-gradient fixed bottom-6 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full text-on-primary shadow-[0_20px_50px_rgba(241,204,25,0.2)] transition-all duration-300 hover:scale-110 active:scale-90 sm:bottom-8 sm:right-8 sm:h-16 sm:w-16" aria-label="Create new transmission">
        <span class="material-symbols-outlined text-3xl" aria-hidden="true">mic_external_on</span>
    </button>
@endsection