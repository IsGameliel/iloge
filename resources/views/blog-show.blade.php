<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $post->title }} | ILOGE</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;700;800&family=Inter:wght@300;400;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-primary-fixed-variant": "#544600", "error-container": "#93000a", "tertiary-container": "#d2b100", "primary-container": "#d2b100", "on-tertiary": "#3a3000", "on-error": "#690005", "surface-container": "#201f1f", "primary": "#f1cc19", "on-primary": "#3a3000", "inverse-on-surface": "#313030", "on-tertiary-fixed": "#221b00", "on-primary-container": "#524400", "outline-variant": "#4d4635", "on-primary-fixed": "#221b00", "tertiary-fixed-dim": "#e9c400", "tertiary-fixed": "#ffe16d", "error": "#ffb4ab", "surface-container-high": "#2a2a2a", "on-secondary-fixed": "#1c1b1b", "surface-dim": "#131313", "secondary-fixed-dim": "#c8c6c5", "on-tertiary-fixed-variant": "#544600", "surface-container-highest": "#353534", "on-secondary-container": "#b7b5b4", "on-background": "#e5e2e1", "on-tertiary-container": "#534400", "on-surface": "#e5e2e1", "surface": "#131313", "surface-container-lowest": "#0e0e0e", "background": "#131313", "surface-container-low": "#1c1b1b", "on-secondary-fixed-variant": "#474746", "tertiary": "#f2cc00", "surface-variant": "#353534", "secondary-container": "#474746", "outline": "#99907c", "on-surface-variant": "#d0c5af", "on-error-container": "#ffdad6", "surface-bright": "#3a3939", "primary-fixed-dim": "#e8c408", "on-secondary": "#313030", "inverse-surface": "#e5e2e1", "secondary": "#c8c6c5", "inverse-primary": "#705d00", "secondary-fixed": "#e5e2e1", "surface-tint": "#e8c408", "primary-fixed": "#ffe16c"
                    },
                    borderRadius: { DEFAULT: "0.125rem", lg: "0.25rem", xl: "0.5rem", full: "0.75rem" },
                    fontFamily: { headline: ["Manrope"], body: ["Inter"], label: ["Inter"] }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .liquid-gold, .liquid-gold-gradient { background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%); }
        .glass-nav { background: rgba(32, 31, 31, 0.6); backdrop-filter: blur(30px); }
        .text-glow { text-shadow: 0 0 20px rgba(241, 204, 25, 0.2); }
    </style>
</head>
<body class="bg-surface text-on-surface font-body selection:bg-primary selection:text-on-primary overflow-x-hidden">
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
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/podcast') }}">Podcast</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#f1cc19] bg-white/5 transition-all" href="{{ url('/blog') }}">Blog</a>
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
            <a class="hidden sm:inline-flex liquid-gold text-on-primary px-6 md:px-8 py-3 rounded-lg font-headline font-bold text-sm tracking-tight active:scale-95 duration-200" href="#">Join Masterclass</a>
            <details class="xl:hidden">
                <summary class="list-none cursor-pointer flex h-10 w-10 items-center justify-center rounded-md border border-white/10 bg-white/5 text-on-surface hover:text-primary hover:bg-white/10 transition-all [&::-webkit-details-marker]:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </summary>
                <div class="absolute right-6 top-full mt-3 w-[min(22rem,calc(100vw-3rem))] bg-[#131313]/95 backdrop-blur-2xl border border-white/10 rounded-lg shadow-2xl p-5">
                    <div class="flex flex-col gap-1 font-headline text-sm uppercase tracking-widest">
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 transition-colors" href="{{ url('/') }}">Home</a>
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="{{ url('/pressroom') }}">Press Room</a>
                        <details class="border-t border-white/5 py-2" open>
                            <summary class="list-none cursor-pointer flex items-center justify-between text-[#f1cc19] py-3 [&::-webkit-details-marker]:hidden">
                                Diary of Iloge
                                <span class="material-symbols-outlined text-base">expand_more</span>
                            </summary>
                            <div class="flex flex-col pl-4 pb-2">
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/podcast') }}">Podcast</a>
                                <a class="py-2 text-xs text-[#f1cc19]" href="{{ url('/blog') }}">Blog</a>
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

<div class="fixed top-[88px] left-0 w-full h-0.5 bg-surface-container-highest z-50">
    <div class="h-full bg-primary w-[35%] shadow-[0_0_10px_rgba(241,204,25,0.5)]"></div>
</div>

<header class="relative w-full min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-surface-container-lowest">
        <img alt="{{ $post->title }}" class="w-full h-full object-cover opacity-40 mix-blend-luminosity scale-105" src="{{ $post->image_url ?: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB47v2sSoi1FKMQGiFfee5SqpceKG90PsFRJGp8HMot0FWwPfVAt3UAvqSWue1mlkguyVAWNhYfOpuvrZbpAtNV0fe-ft_Cz6bv_awzmNTuVj_v3nchpVIpljbxoTBDKYrMs75AnSpPBFnhCBigYtO8Vy4W_ZBpZrhrdAueRlk3WovSVl4jPyumIVfVRmbmN6nWfOM7x654LiOAC9kwql0fbvSg9pg4Xqohr1NZxGRWeTclc3bJNTpEhTZIZNcCSqfXaLmvwpX-XxTC' }}"/>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-surface/60 to-surface"></div>
    </div>
    <div class="relative z-10 max-w-6xl mx-auto px-6 md:px-12 text-center">
        <span class="inline-block font-label text-primary uppercase tracking-[0.4em] mb-6 text-sm font-bold">Diary of Iloge - {{ $post->category }}</span>
        <h1 class="font-headline text-5xl sm:text-6xl lg:text-[5rem] leading-[0.95] font-extrabold tracking-tighter text-on-surface mb-8 max-w-4xl mx-auto">
            {{ $post->title }}
        </h1>
        <div class="flex items-center justify-center gap-4">
            <div class="w-12 h-px bg-outline-variant"></div>
            <p class="font-headline text-lg italic text-on-surface-variant">
                Authored by <span class="text-on-surface font-bold">{{ $post->author?->name ?? 'Iloge' }}</span>
            </p>
            <div class="w-12 h-px bg-outline-variant"></div>
        </div>
    </div>
</header>

<main class="relative z-10 -mt-24 pb-32">
    <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-12 gap-16">
        <aside class="col-span-1 hidden lg:block sticky top-40 h-fit">
            <div class="flex flex-col gap-8 items-center">
                <button class="text-neutral-500 hover:text-primary transition-colors duration-300" type="button" aria-label="Share"><span class="material-symbols-outlined text-2xl">share</span></button>
                <button class="text-neutral-500 hover:text-primary transition-colors duration-300" type="button" aria-label="Bookmark"><span class="material-symbols-outlined text-2xl">bookmark</span></button>
                <div class="w-px h-16 bg-outline-variant/30"></div>
                <span class="font-label text-[10px] uppercase tracking-widest vertical-rl rotate-180 text-neutral-500">Scroll to explore</span>
            </div>
        </aside>

        <article class="col-span-12 lg:col-span-8 lg:col-start-3">
            <div class="max-w-none">
                @if ($post->excerpt)
                    <p class="font-headline text-3xl leading-relaxed font-light text-on-surface-variant mb-12 first-letter:text-7xl first-letter:font-extrabold first-letter:text-primary first-letter:mr-3 first-letter:float-left">
                        {{ $post->excerpt }}
                    </p>
                @endif

                <div class="space-y-8">
                    @foreach (preg_split("/\r\n|\n|\r/", trim($post->content)) as $paragraph)
                        @continue(blank($paragraph))
                        <p class="font-body text-xl leading-relaxed text-neutral-400">{{ $paragraph }}</p>
                    @endforeach
                </div>

                @if ($post->image_url)
                    <div class="my-20 relative">
                        <img alt="{{ $post->title }}" class="w-full h-[500px] object-cover rounded-xl grayscale hover:grayscale-0 transition-all duration-700" src="{{ $post->image_url }}"/>
                        <div class="absolute -bottom-6 -right-6 p-8 bg-surface-container-high border-l-4 border-primary max-w-md shadow-2xl">
                            <p class="font-body italic text-sm text-on-surface-variant">{{ $post->excerpt ?: 'Leadership is the ability to navigate the gray areas where standard logic fails and intuition begins.' }}</p>
                        </div>
                    </div>
                @endif

                <blockquote class="my-24 border-none p-0 text-center relative">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-12">
                        <span class="material-symbols-outlined text-primary/20 text-8xl" style="font-variation-settings: 'FILL' 1;">format_quote</span>
                    </div>
                    <p class="font-headline text-4xl md:text-5xl font-extrabold leading-tight text-on-surface tracking-tighter max-w-3xl mx-auto relative z-10">
                        "True authority isn't heard in the shout; it is felt in the architecture of the silence that follows."
                    </p>
                    <cite class="block mt-8 font-label text-primary uppercase tracking-widest not-italic">ILOGE, THE SOVEREIGN CREATIVE</cite>
                </blockquote>
            </div>

            <section class="mt-32 p-8 md:p-16 bg-surface-container-low rounded-xl border border-white/5 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 blur-[100px] rounded-full"></div>
                <div class="relative z-10 max-w-xl">
                    <h3 class="font-headline text-3xl font-bold mb-4">Sovereign Insights</h3>
                    <p class="text-neutral-400 mb-8">Receive bi-weekly architectural breakdowns of power, innovation, and creative sovereignty.</p>
                    <form class="flex flex-col sm:flex-row gap-4">
                        <input class="flex-1 bg-transparent border-b border-outline-variant py-3 focus:outline-none focus:border-primary transition-colors text-on-surface placeholder:text-neutral-600" placeholder="Your executive email" type="email"/>
                        <button class="liquid-gold-gradient text-on-primary px-8 py-3 rounded-md font-bold text-sm uppercase tracking-widest hover:shadow-[0_0_20px_rgba(241,204,25,0.3)] transition-all">Subscribe</button>
                    </form>
                </div>
            </section>
        </article>
    </div>
</main>

<section class="bg-surface-container-lowest py-32 px-6 md:px-12">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col gap-6 md:flex-row md:justify-between md:items-end mb-16">
            <div>
                <h4 class="font-label text-primary uppercase tracking-widest mb-4">Read Next</h4>
                <h2 class="font-headline text-5xl font-extrabold tracking-tighter">Continue the Journey</h2>
            </div>
            <a class="group flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors font-label uppercase text-sm tracking-widest" href="{{ route('blog') }}">
                View Archive
                <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse ($relatedPosts as $relatedPost)
                <a class="group cursor-pointer" href="{{ route('blog.show', $relatedPost) }}">
                    <div class="aspect-[4/5] overflow-hidden rounded-xl mb-6 relative bg-surface-container-low">
                        <img alt="{{ $relatedPost->title }}" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-110 group-hover:grayscale-0" src="{{ $relatedPost->image_url ?: 'https://lh3.googleusercontent.com/aida-public/AB6AXuBBMRcAt2FzGeFVVTrMSLh1kqBrD8xH3k5Qkt1age__DXuVLBvvyKkGAB_H4o-jVpNyBe6hAn-VeE6BQ9gyJJh41zjquzZXHZB_lIkDoE2EMEiTmtNezhKjMhOUpez5qOtw5taeP14mMd6kAKV2TBUSK3HZVQh4T65wMqHLa_WsnQOcEUgMRSgcrOM7Ie7Ng3T1cpr5EzB8vc-3c_SJj4_dTdUtTXn-MXPB_ccvmb6sTHkDlI807K7WTnUk8enju0MZnADtTTewRQk1' }}"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent opacity-60"></div>
                    </div>
                    <span class="font-label text-primary text-[10px] uppercase tracking-widest">{{ $relatedPost->category }}</span>
                    <h3 class="font-headline text-2xl font-bold mt-2 group-hover:text-primary transition-colors">{{ $relatedPost->title }}</h3>
                </a>
            @empty
                <div class="md:col-span-3 rounded-xl border border-outline-variant/20 bg-surface-container-low p-10 text-center text-on-surface-variant">
                    More published insights will appear here soon.
                </div>
            @endforelse
        </div>
    </div>
</section>

<footer class="bg-neutral-950 w-full py-20 border-t border-white/5">
    <div class="flex flex-col md:flex-row justify-between items-center px-6 md:px-12 max-w-[1920px] mx-auto gap-8">
        <a class="text-lg font-bold text-neutral-100 font-headline" href="{{ url('/') }}">ILOGE</a>
        <div class="flex flex-wrap justify-center gap-8">
            <a class="text-neutral-500 hover:text-yellow-400 transition-colors font-['Inter'] text-xs tracking-widest uppercase" href="#">Privacy</a>
            <a class="text-neutral-500 hover:text-yellow-400 transition-colors font-['Inter'] text-xs tracking-widest uppercase" href="#">Terms</a>
            <a class="text-neutral-500 hover:text-yellow-400 transition-colors font-['Inter'] text-xs tracking-widest uppercase" href="#">Editorial Policy</a>
            <a class="text-neutral-500 hover:text-yellow-400 transition-colors font-['Inter'] text-xs tracking-widest uppercase" href="#">Inquiries</a>
        </div>
        <div class="text-neutral-500 font-['Inter'] text-xs tracking-widest uppercase text-center md:text-right">
            &copy; {{ now()->year }} Iloge. Designed &amp; developed by codewitheugene
        </div>
    </div>
</footer>
</body>
</html>
