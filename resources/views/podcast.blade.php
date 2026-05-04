<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ILOGE | The Diary of Iloge Podcast</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "surface-container-high": "#2a2a2a",
              "surface-container-lowest": "#0e0e0e",
              "surface-container-low": "#1c1b1b",
              "outline": "#99907c",
              "on-primary": "#3a3000",
              "secondary-container": "#474746",
              "surface-container-highest": "#353534",
              "surface": "#131313",
              "surface-container": "#201f1f",
              "on-secondary": "#313030",
              "secondary-fixed": "#e5e2e1",
              "on-background": "#e5e2e1",
              "surface-variant": "#353534",
              "on-secondary-container": "#b7b5b4",
              "outline-variant": "#4d4635",
              "primary": "#f1cc19",
              "background": "#131313",
              "on-surface": "#e5e2e1",
              "primary-fixed-dim": "#e8c408",
              "on-surface-variant": "#d0c5af"
            },
            borderRadius: {
              DEFAULT: "0.125rem",
              lg: "0.25rem",
              xl: "0.5rem",
              full: "0.75rem"
            },
            fontFamily: {
              headline: ["Manrope"],
              body: ["Inter"],
              label: ["Inter"]
            }
          },
        },
      }
    </script>
    <style>
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
      .liquid-gold-gradient {
        background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%);
      }
      .glass-nav {
        background: rgba(19, 19, 19, 0.6);
        backdrop-filter: blur(30px);
      }
      .rim-light {
        box-shadow: inset 0.5px 0.5px 0px 0px rgba(58, 57, 57, 0.5);
      }
    </style>
</head>
<body class="bg-surface text-on-surface font-body selection:bg-primary selection:text-on-primary">
<nav class="fixed top-0 w-full z-50 bg-[#131313]/60 backdrop-blur-[30px] shadow-[0_40px_40px_-10px_rgba(229,226,225,0.05)] border-b border-white/5">
    <div class="relative flex justify-between items-center px-6 md:px-12 py-6 max-w-[1920px] mx-auto">
        <a class="text-2xl font-black tracking-tighter text-[#f1cc19] font-headline" href="{{ url('/') }}">ILOGE</a>
        <div class="hidden xl:flex items-center gap-8 font-headline tracking-tight text-sm uppercase">
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/') }}">Home</a>
            <div class="relative group">
                <button class="text-[#e5e2e1]/70 hover:text-[#f1cc19] inline-flex items-center gap-1 transition-colors duration-300" type="button">
                    About
                    <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                </button>
                <div class="absolute left-0 top-full pt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-300">
                    <div class="min-w-48 bg-[#131313]/95 backdrop-blur-2xl border border-white/10 rounded-lg shadow-2xl py-3">
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/speaker') }}">Speaker</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/investor') }}">Investor</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/leader') }}">Leader</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/pressroom') }}">Press Room</a>
            <div class="relative group">
                <button class="text-[#f1cc19] border-b border-[#f1cc19] pb-1 inline-flex items-center gap-1 transition-colors duration-300" type="button">
                    Diary of Iloge
                    <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                </button>
                <div class="absolute left-0 top-full pt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-300">
                    <div class="min-w-56 bg-[#131313]/95 backdrop-blur-2xl border border-white/10 rounded-lg shadow-2xl py-3">
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#f1cc19] bg-white/5 transition-all" href="{{ url('/podcast') }}">Podcast</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/blog') }}">Blog</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/team') }}">Team</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/gallery') }}">Gallery</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/testimonials') }}">Testimonials</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/shop') }}">Shop</a>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <a class="hover:opacity-80 transition-opacity active:scale-95 duration-200 text-[#f1cc19]" href="#episodes" aria-label="Episodes">
                <span class="material-symbols-outlined">podcasts</span>
            </a>
            <a class="hover:opacity-80 transition-opacity active:scale-95 duration-200 text-[#f1cc19]" href="#subscribe" aria-label="Subscribe">
                <span class="material-symbols-outlined">headphones</span>
            </a>
            <details class="xl:hidden">
                <summary class="list-none cursor-pointer flex h-10 w-10 items-center justify-center rounded-md border border-white/10 bg-white/5 text-on-surface hover:text-primary hover:bg-white/10 transition-all [&::-webkit-details-marker]:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </summary>
                <div class="absolute right-6 top-full mt-3 w-[min(22rem,calc(100vw-3rem))] bg-[#131313]/95 backdrop-blur-2xl border border-white/10 rounded-lg shadow-2xl p-5">
                    <div class="flex flex-col gap-1 font-headline text-sm uppercase tracking-widest">
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 transition-colors" href="{{ url('/') }}">Home</a>
                        <details class="border-t border-white/5 py-2">
                            <summary class="list-none cursor-pointer flex items-center justify-between text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 [&::-webkit-details-marker]:hidden">
                                About
                                <span class="material-symbols-outlined text-base">expand_more</span>
                            </summary>
                            <div class="flex flex-col pl-4 pb-2">
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/speaker') }}">Speaker</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/investor') }}">Investor</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/leader') }}">Leader</a>
                            </div>
                        </details>
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="{{ url('/pressroom') }}">Press Room</a>
                        <details class="border-t border-white/5 py-2" open>
                            <summary class="list-none cursor-pointer flex items-center justify-between text-[#f1cc19] py-3 [&::-webkit-details-marker]:hidden">
                                Diary of Iloge
                                <span class="material-symbols-outlined text-base">expand_more</span>
                            </summary>
                            <div class="flex flex-col pl-4 pb-2">
                                <a class="py-2 text-xs text-[#f1cc19]" href="{{ url('/podcast') }}">Podcast</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/blog') }}">Blog</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/team') }}">Team</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/gallery') }}">Gallery</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/testimonials') }}">Testimonials</a>
                            </div>
                        </details>
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="{{ url('/shop') }}">Shop</a>
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="{{ url('/contact') }}">Contact</a>
                    </div>
                </div>
            </details>
        </div>
    </div>
</nav>

<main class="pt-24">
    <section class="relative min-h-[870px] w-full overflow-hidden flex items-center px-6 md:px-12">
        <div class="absolute inset-0 z-0">
            <img alt="Professional portrait" class="w-full h-full object-cover grayscale brightness-50 contrast-125" data-alt="Cinematic portrait of a distinguished professional African man in a dark tailored suit, dramatic low-key lighting, deep shadows, authoritative presence." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAczzIAc2Sa8uTFH5nkYChhyZ9qFb2sEyKUs3OWsG-Z_QhIqde-GxNeUDeg9M9C1uyDnrZ28rlOfPE7oIF4aIR1xI_-0uj5gXPPCq1xBF8ysLyGfR_8iAeg9yezTELtnQMngR2tHi_bEJ6tKjqzMx7jsB7rHWz4M7qFc8oWlxFsxZveDZZkxq_B5mvvaJL3wqlXTZvYekBO5F-SxgfsmuyNVfIP_UfFSMuura8Jqy0_mKU3SqRkt01R3uMAUVH-E-ZjVYXb9oL6moXe"/>
            <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/40 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-4xl">
            <span class="text-primary tracking-[0.3em] uppercase text-xs font-semibold mb-4 block">Diary of Iloge: Featured Masterclass</span>
            <h1 class="font-headline text-6xl md:text-8xl font-extrabold tracking-tighter text-on-surface leading-[0.9] mb-8">
                {{ $featuredPodcastEpisode?->title ?? 'The Architecture of Shadows' }}
            </h1>
            <p class="text-on-surface-variant text-lg md:text-xl max-w-2xl leading-relaxed mb-10 font-light">
                {{ $featuredPodcastEpisode?->description ?? "An exclusive deep-dive into the silence of leadership. Discover how the world's most influential architects of industry build empires away from the noise." }}
            </p>
            <div class="flex flex-col sm:flex-row gap-6">
                <a class="liquid-gold-gradient px-8 py-4 rounded-md text-on-primary font-bold tracking-tight hover:opacity-90 transition-all flex items-center justify-center gap-3" href="{{ $featuredPodcastEpisode?->youtube_url ?? '#episodes' }}" @if($featuredPodcastEpisode) target="_blank" rel="noreferrer" @endif>
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                    Listen Now
                </a>
                <a class="bg-surface-variant/20 backdrop-blur-xl border border-outline-variant/30 px-8 py-4 rounded-md text-on-surface font-semibold hover:bg-surface-variant/40 transition-all text-center" href="#episodes">
                    View Show Notes
                </a>
            </div>
        </div>
    </section>

    <section class="py-12 px-6 md:px-12 bg-surface-container-lowest" id="episodes">
        <div class="max-w-[1920px] mx-auto flex flex-col md:flex-row md:items-center justify-between gap-8 border-b border-outline-variant/10 pb-8">
            <div class="flex gap-8 overflow-x-auto">
                <button class="text-primary font-bold border-b-2 border-primary pb-2 whitespace-nowrap">All Episodes</button>
                @foreach ($podcastCategories as $category)
                    <button class="text-on-surface-variant hover:text-on-surface transition-colors pb-2 whitespace-nowrap">{{ $category }}</button>
                @endforeach
            </div>
            <div class="flex items-center gap-4 text-on-surface-variant">
                <span class="material-symbols-outlined">tune</span>
                <span class="text-sm font-medium">Filter</span>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 md:px-12 bg-surface">
        <div class="max-w-[1920px] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @forelse ($podcastEpisodes as $episode)
                    <a class="{{ $loop->first ? 'lg:col-span-2 overflow-hidden p-0' : 'p-8' }} group bg-surface-container-low rounded-xl rim-light transition-transform hover:-translate-y-2 flex flex-col justify-between" href="{{ $episode->youtube_url }}" target="_blank" rel="noreferrer">
                        @if ($loop->first)
                            <div class="flex flex-col md:flex-row h-full">
                                <div class="w-full md:w-1/2 h-64 md:h-auto overflow-hidden">
                                    <img alt="{{ $episode->title }}" class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-700" src="{{ $episode->display_thumbnail }}"/>
                                </div>
                                <div class="w-full md:w-1/2 p-10 flex flex-col justify-between">
                                    <div>
                                        <div class="flex justify-between items-start gap-4 mb-6">
                                            <span class="px-3 py-1 bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-widest rounded">{{ $episode->category }}</span>
                                            <span class="text-on-surface-variant text-xs">{{ optional($episode->published_at)->format('M d, Y') }}</span>
                                        </div>
                                        <h3 class="font-headline text-3xl font-bold text-on-surface mb-4 leading-tight group-hover:text-primary transition-colors">{{ $episode->title }}</h3>
                                        <p class="text-on-surface-variant font-light leading-relaxed mb-6">{{ $episode->description }}</p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-full border border-primary flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-all">
                                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                                        </div>
                                        <span class="font-bold text-sm">{{ $episode->duration ?: 'WATCH' }}</span>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div>
                                <div class="mb-6 h-48 overflow-hidden rounded-lg">
                                    <img alt="{{ $episode->title }}" class="w-full h-full object-cover grayscale group-hover:scale-105 transition-transform duration-700" src="{{ $episode->display_thumbnail }}"/>
                                </div>
                                <div class="flex justify-between items-start gap-4 mb-4">
                                    <span class="px-3 py-1 bg-secondary-container/30 text-on-secondary-container text-[10px] font-bold uppercase tracking-widest rounded">{{ $episode->category }}</span>
                                    <span class="text-on-surface-variant text-xs">{{ optional($episode->published_at)->format('M d, Y') }}</span>
                                </div>
                                <h3 class="font-headline text-2xl font-bold text-on-surface group-hover:text-primary transition-colors">{{ $episode->title }}</h3>
                                <p class="mt-4 line-clamp-2 text-sm text-on-surface-variant">{{ $episode->description }}</p>
                            </div>
                            <div class="mt-8 flex items-center justify-between">
                                <span class="text-sm font-bold">{{ $episode->duration ?: 'WATCH' }}</span>
                                <span class="material-symbols-outlined text-primary">play_circle</span>
                            </div>
                        @endif
                    </a>
                @empty
                    <div class="lg:col-span-3 rounded-xl border border-outline-variant/20 bg-surface-container-low p-12 text-center">
                        <span class="material-symbols-outlined text-5xl text-primary">podcasts</span>
                        <h3 class="mt-6 font-headline text-2xl font-bold text-on-surface">No Episodes Published Yet</h3>
                        <p class="mx-auto mt-3 max-w-md text-sm text-on-surface-variant">Publish podcast episodes from the dashboard and they will appear here automatically.</p>
                    </div>
                @endforelse
            </div>

            @if ($podcastEpisodes->hasPages())
                <div class="mt-14 flex justify-end gap-3">
                    @if ($podcastEpisodes->previousPageUrl())
                        <a class="rounded border border-outline-variant/30 px-4 py-2 text-xs font-bold uppercase tracking-widest text-on-surface-variant transition-colors hover:border-primary hover:text-primary" href="{{ $podcastEpisodes->previousPageUrl() }}#episodes">Prev</a>
                    @endif
                    @if ($podcastEpisodes->nextPageUrl())
                        <a class="rounded border border-primary px-4 py-2 text-xs font-bold uppercase tracking-widest text-primary transition-colors hover:bg-primary hover:text-on-primary" href="{{ $podcastEpisodes->nextPageUrl() }}#episodes">Next</a>
                    @endif
                </div>
            @endif
        </div>
    </section>

    <section class="py-32 px-6 md:px-12 bg-surface-container-low" id="subscribe">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="font-headline text-5xl font-black tracking-tighter text-on-surface mb-6">Never Miss an Insight.</h2>
            <p class="text-on-surface-variant text-lg max-w-xl mx-auto mb-12 font-light">
                Join the inner circle of global leaders. Receive episode transcripts, exclusive deep-dives, and early access to the Iloge Shop.
            </p>
            @if (session('newsletter_success'))
                <div class="mx-auto mb-8 max-w-2xl rounded-xl border border-primary/20 bg-primary/10 px-5 py-4 text-sm font-semibold text-primary">
                    {{ session('newsletter_success') }}
                </div>
            @endif
            <form class="flex flex-col md:flex-row gap-4 max-w-2xl mx-auto mb-4" method="post" action="{{ route('newsletter.store') }}">
                @csrf
                <input type="hidden" name="source" value="podcast">
                <input class="flex-1 bg-transparent border-b border-outline-variant/30 text-on-surface placeholder:text-on-surface-variant/40 py-4 focus:outline-none focus:border-primary transition-colors font-label text-sm tracking-widest" name="email" placeholder="ENTER YOUR EMAIL" type="email" value="{{ old('email') }}" required/>
                <button class="liquid-gold-gradient px-12 py-4 rounded-md text-on-primary font-bold uppercase text-xs tracking-[0.2em] hover:opacity-90 transition-all" type="submit">
                    Subscribe
                </button>
            </form>
            @error('email')
                <p class="mb-12 text-sm text-error">{{ $message }}</p>
            @else
                <p class="mb-12 text-[10px] uppercase tracking-widest text-on-surface-variant/50">No noise. Just sovereign insights.</p>
            @enderror
            <div class="grid grid-cols-2 sm:flex sm:justify-center gap-8 sm:gap-10">
                <div class="flex flex-col items-center gap-2 group cursor-pointer">
                    <div class="w-14 h-14 rounded-full bg-surface flex items-center justify-center border border-outline-variant/20 group-hover:border-primary transition-colors">
                        <span class="material-symbols-outlined text-on-surface group-hover:text-primary transition-colors">podcasts</span>
                    </div>
                    <span class="text-[10px] tracking-widest font-bold text-on-surface-variant group-hover:text-primary">SPOTIFY</span>
                </div>
                <div class="flex flex-col items-center gap-2 group cursor-pointer">
                    <div class="w-14 h-14 rounded-full bg-surface flex items-center justify-center border border-outline-variant/20 group-hover:border-primary transition-colors">
                        <span class="material-symbols-outlined text-on-surface group-hover:text-primary transition-colors">headphones</span>
                    </div>
                    <span class="text-[10px] tracking-widest font-bold text-on-surface-variant group-hover:text-primary">APPLE</span>
                </div>
                <div class="flex flex-col items-center gap-2 group cursor-pointer">
                    <div class="w-14 h-14 rounded-full bg-surface flex items-center justify-center border border-outline-variant/20 group-hover:border-primary transition-colors">
                        <span class="material-symbols-outlined text-on-surface group-hover:text-primary transition-colors">play_circle</span>
                    </div>
                    <span class="text-[10px] tracking-widest font-bold text-on-surface-variant group-hover:text-primary">YOUTUBE</span>
                </div>
                <div class="flex flex-col items-center gap-2 group cursor-pointer">
                    <div class="w-14 h-14 rounded-full bg-surface flex items-center justify-center border border-outline-variant/20 group-hover:border-primary transition-colors">
                        <span class="material-symbols-outlined text-on-surface group-hover:text-primary transition-colors">rss_feed</span>
                    </div>
                    <span class="text-[10px] tracking-widest font-bold text-on-surface-variant group-hover:text-primary">RSS FEED</span>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="w-full py-20 px-6 md:px-12 bg-[#0e0e0e] border-t border-outline-variant/5">
    <div class="flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto gap-12">
        <a class="text-[#e5e2e1] font-black text-2xl font-headline tracking-tighter" href="{{ url('/') }}">ILOGE</a>
        <div class="flex flex-wrap justify-center gap-8 font-body text-sm tracking-widest uppercase">
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline transition-all" href="#">Spotify</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline transition-all" href="#">Apple Podcasts</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline transition-all" href="#">YouTube</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline transition-all" href="#">RSS Feed</a>
        </div>
        <div class="text-[#e5e2e1]/40 text-[10px] tracking-[0.2em] font-medium text-center md:text-right">
            &copy; 2026 Iloge. Designed &amp; developed by codewitheugene
        </div>
    </div>
</footer>
</body>
</html>
