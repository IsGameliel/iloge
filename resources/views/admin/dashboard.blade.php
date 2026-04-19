@extends('layouts.admin')

@section('title', 'ILOGE | Executive Portal')
@section('activeAdminPage', 'dashboard')
@section('headerTitle', 'Dashboard')
@section('searchPlaceholder', 'Search insights...')
@section('mainClass', 'no-scrollbar relative flex h-screen flex-1 flex-col overflow-y-auto bg-surface pt-20 lg:ml-72')

@section('content')
        <section class="mx-auto w-full max-w-7xl space-y-10 p-6 sm:p-8 lg:space-y-12 lg:p-12">
            <div class="space-y-2">
                <h2 class="font-headline text-4xl font-extrabold leading-none tracking-tighter text-on-surface sm:text-5xl lg:text-6xl">
                    Command <span class="italic text-primary">Central</span>.
                </h2>
                <p class="max-w-xl text-lg font-light tracking-tight text-on-surface-variant">
                    Executive overview of the Iloge digital ecosystem and audience engagement metrics.
                </p>
            </div>

            <div class="grid grid-cols-12 gap-6">
                <div class="glass-card group relative col-span-12 flex min-h-[260px] flex-col justify-between overflow-hidden rounded-xl p-6 sm:p-8 lg:col-span-7 lg:h-[300px]">
                    <div class="absolute right-0 top-0 p-8 opacity-10 transition-opacity group-hover:opacity-20">
                        <span class="material-symbols-outlined text-[120px] filled-icon" aria-hidden="true">groups</span>
                    </div>
                    <div class="flex items-start justify-between">
                        <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-primary">Total Audience Reach</span>
                        <span class="flex items-center gap-1 text-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-sm text-green-500" aria-hidden="true">trending_up</span>
                            +12.4% vs LY
                        </span>
                    </div>
                    <div class="relative z-10">
                        <h3 class="font-headline text-6xl font-black tracking-tighter text-on-surface sm:text-8xl">1.2<span class="text-3xl text-on-surface-variant sm:text-4xl">M</span></h3>
                        <p class="mt-2 font-light text-on-surface-variant">Aggregated unique impressions across all channels.</p>
                    </div>
                </div>

                <div class="col-span-12 grid gap-6 lg:col-span-5 lg:grid-rows-2">
                    <article class="flex items-center justify-between rounded-xl border-l-4 border-primary/20 bg-surface-container-low p-6">
                        <div>
                            <p class="mb-1 text-[10px] uppercase tracking-[0.2em] text-on-surface-variant">Blogs Published</p>
                            <h4 class="font-headline text-4xl font-bold text-on-surface">142</h4>
                        </div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-surface-container-high">
                            <span class="material-symbols-outlined text-primary" aria-hidden="true">article</span>
                        </div>
                    </article>

                    <article class="flex items-center justify-between rounded-xl border-l-4 border-primary/20 bg-surface-container-low p-6">
                        <div>
                            <p class="mb-1 text-[10px] uppercase tracking-[0.2em] text-on-surface-variant">Podcast Listens</p>
                            <h4 class="font-headline text-4xl font-bold text-on-surface">84.2<span class="text-xl">K</span></h4>
                        </div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-surface-container-high">
                            <span class="material-symbols-outlined text-primary" aria-hidden="true">mic</span>
                        </div>
                    </article>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-8">
                <section class="col-span-12 space-y-8 lg:col-span-8" aria-labelledby="recent-activity-heading">
                    <h5 id="recent-activity-heading" class="font-headline flex items-center gap-3 text-2xl font-bold text-on-surface">
                        Recent Activity
                        <span class="h-px flex-1 bg-outline-variant/20"></span>
                    </h5>

                    <div class="space-y-6">
                        <article class="group flex cursor-pointer items-start gap-6">
                            <div class="mt-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-surface-container-highest text-primary transition-all duration-300 group-hover:bg-primary group-hover:text-on-primary">
                                <span class="material-symbols-outlined filled-icon" aria-hidden="true">edit_square</span>
                            </div>
                            <div class="space-y-1">
                                <p class="text-sm font-semibold text-on-surface transition-colors group-hover:text-primary">Blog Published: "The Future of Digital Sovereignty"</p>
                                <p class="text-xs leading-relaxed text-on-surface-variant">Executive piece finalized and syndicated to Global Tech Review and internal blog network.</p>
                                <p class="pt-1 text-[10px] font-bold uppercase tracking-widest text-primary/60">2 hours ago</p>
                            </div>
                        </article>

                        <article class="group flex cursor-pointer items-start gap-6">
                            <div class="mt-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-surface-container-highest text-primary transition-all duration-300 group-hover:bg-primary group-hover:text-on-primary">
                                <span class="material-symbols-outlined filled-icon" aria-hidden="true">mic</span>
                            </div>
                            <div class="space-y-1">
                                <p class="text-sm font-semibold text-on-surface transition-colors group-hover:text-primary">New Podcast Recorded: Episode 48 - Tonal Transitions</p>
                                <p class="text-xs leading-relaxed text-on-surface-variant">Raw audio uploaded for curation and noise reduction. Featuring Guest Dr. Aris Thorne.</p>
                                <p class="pt-1 text-[10px] font-bold uppercase tracking-widest text-primary/60">Yesterday</p>
                            </div>
                        </article>

                        <article class="group flex cursor-pointer items-start gap-6">
                            <div class="mt-1 flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-surface-container-highest text-primary transition-all duration-300 group-hover:bg-primary group-hover:text-on-primary">
                                <span class="material-symbols-outlined filled-icon" aria-hidden="true">photo_camera</span>
                            </div>
                            <div class="space-y-1">
                                <p class="text-sm font-semibold text-on-surface transition-colors group-hover:text-primary">Gallery Update: Q3 Collection Addition</p>
                                <p class="text-xs leading-relaxed text-on-surface-variant">12 new high-fidelity architectural visualisations added to the public portfolio.</p>
                                <p class="pt-1 text-[10px] font-bold uppercase tracking-widest text-primary/60">3 days ago</p>
                            </div>
                        </article>
                    </div>
                </section>

                <aside class="col-span-12 lg:col-span-4">
                    <div class="group relative flex h-full flex-col justify-between overflow-hidden rounded-xl bg-surface-container-high p-8">
                        <div class="absolute inset-0 z-0 opacity-20 transition-transform duration-700 group-hover:scale-110">
                            <img
                                alt="Dark dramatic architectural building with geometric glass patterns and golden hour reflections"
                                class="h-full w-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOvsfLzGV-AfqXrFo7A8qJZpNMAyXsWkA7wJju_CD_cJP28dYlXRBMnnWV_ePpTg8Ha4yH6Xz1cSAw3vc1XKIYAw4rqX_e_BmfYFLK3Guyv0sSx8WPHyDvW_GIMucyCCvdHUb8agKMtuBHGhDmTqZVSMVrR-CbBM8cadye1bLB9kF-tMb9HFwiFQbOYMgmjPyfynePtFHN8vLWcAqpP418HsRSH6ACsp6PmxLWSNI2ZxbIRcmwoCN1S-7RKKz8C5N3dJBxWFz9rzbk"
                            >
                        </div>

                        <div class="relative z-10">
                            <div class="gold-gradient mb-6 flex h-12 w-12 items-center justify-center rounded-full shadow-xl">
                                <span class="material-symbols-outlined filled-icon text-on-primary" aria-hidden="true">auto_fix</span>
                            </div>
                            <h6 class="font-headline text-3xl font-bold leading-tight text-on-surface">Draft New Insight Piece</h6>
                            <p class="mt-4 text-sm font-light text-on-surface-variant">Leverage the AI assistant to outline your next executive thought-leadership article.</p>
                        </div>

                        <button type="button" class="relative z-10 mt-8 w-full rounded-md border border-primary/40 py-4 text-xs font-bold uppercase tracking-widest text-primary transition-all duration-500 hover:bg-primary hover:text-on-primary">
                            Initialize Editor
                        </button>
                    </div>
                </aside>
            </div>

            
        </section>
@endsection