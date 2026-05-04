<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ILOGE | The Architect of Shadows</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;700;800&amp;family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-tint": "#e8c408",
                        "on-surface-variant": "#d0c5af",
                        "on-secondary-fixed-variant": "#474746",
                        "tertiary-fixed-dim": "#e9c400",
                        "on-error-container": "#ffdad6",
                        "on-tertiary-fixed": "#221b00",
                        "primary-fixed-dim": "#e8c408",
                        "outline": "#99907c",
                        "surface-container": "#201f1f",
                        "secondary-fixed-dim": "#c8c6c5",
                        "inverse-primary": "#705d00",
                        "on-secondary": "#313030",
                        "background": "#131313",
                        "surface-container-low": "#1c1b1b",
                        "surface-container-high": "#2a2a2a",
                        "outline-variant": "#4d4635",
                        "surface-container-highest": "#353534",
                        "surface-bright": "#3a3939",
                        "surface": "#131313",
                        "on-surface": "#e5e2e1",
                        "on-primary-fixed-variant": "#544600",
                        "on-secondary-fixed": "#1c1b1b",
                        "on-background": "#e5e2e1",
                        "on-primary-fixed": "#221b00",
                        "primary-fixed": "#ffe16c",
                        "on-tertiary-container": "#534400",
                        "tertiary-fixed": "#ffe16d",
                        "inverse-surface": "#e5e2e1",
                        "on-tertiary": "#3a3000",
                        "surface-variant": "#353534",
                        "on-primary": "#3a3000",
                        "on-tertiary-fixed-variant": "#544600",
                        "tertiary": "#f2cc00",
                        "surface-container-lowest": "#0e0e0e",
                        "on-primary-container": "#524400",
                        "primary-container": "#d2b100",
                        "on-secondary-container": "#b7b5b4",
                        "secondary": "#c8c6c5",
                        "primary": "#f1cc19",
                        "tertiary-container": "#d2b100",
                        "secondary-fixed": "#e5e2e1",
                        "inverse-on-surface": "#313030"
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
        .glass-nav { background: rgba(32, 31, 31, 0.6); backdrop-filter: blur(30px); }
        .liquid-gold { background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%); }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-background text-on-surface font-body selection:bg-primary selection:text-on-primary">
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
            <a class="hidden sm:inline-flex liquid-gold text-on-primary px-6 md:px-8 py-3 rounded-lg font-headline font-bold text-sm tracking-tight active:scale-95 duration-200" href="#">
                Join Masterclass
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

<main class="pt-24">
    <section class="relative min-h-[calc(100vh-6rem)] lg:min-h-[870px] w-full overflow-hidden flex items-center px-6 md:px-12 lg:px-24 py-24">
        <div class="absolute inset-0 z-0">
            <img alt="Cinematic portrait of a sophisticated African professional man in a tailored dark suit, standing against a minimal architecturally shadowed background" class="w-full h-full object-cover object-top grayscale-[30%] brightness-50" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB52xEIcdDvWJBow8_Vdg2BICUYQFhiY8jJeRIGhPLCubEidx623nU1GC8HhwbUqx_kdh5l5s4IN3nb5aU4D6GPv5215-Tktg61gofUhFvsbXCrjeBWf3kHySwk523niJy_tCsxG_lr4KFXbb1MemEyDnE5DN_pkM1AfEx-HKVcIjuWJ_VXmUdetNsBZjhdf24shW8ZjTTnN2LnrdjiRyCL2QVJeNzGoHJ8fjOLwrvugSWDlkUcT-_463WeG7Mt-E-14xaekQkzkkk6"/>
            <div class="absolute inset-0 bg-gradient-to-r from-background via-background/50 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-background/70 via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-4xl">
            <span class="text-primary font-headline font-bold tracking-[0.2em] uppercase text-xs mb-6 block">Featured Insight</span>
            <h1 class="text-on-surface font-headline font-extrabold text-5xl sm:text-6xl lg:text-[5rem] leading-[1.05] tracking-tighter mb-8">
                {{ $featuredPost?->title ?? 'The Architect of Shadows' }}
            </h1>
            <p class="text-on-surface-variant text-lg md:text-xl font-light leading-relaxed mb-12 max-w-xl">
                {{ $featuredPost?->excerpt ?? 'Navigating the intersection of sovereign leadership and technological expansion. A blueprint for the modern innovator.' }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6">
                <a class="liquid-gold text-on-primary px-8 md:px-10 py-4 md:py-5 rounded-lg font-headline font-extrabold text-base md:text-lg tracking-tight hover:shadow-[0_0_30px_rgba(241,204,25,0.3)] transition-all text-center" href="#archive">Read Insight</a>
                <a class="bg-surface-variant/20 backdrop-blur-xl border border-white/5 text-on-surface px-8 md:px-10 py-4 md:py-5 rounded-lg font-headline font-bold text-base md:text-lg tracking-tight hover:bg-surface-variant/40 transition-all text-center" href="#archive">Explore Archive</a>
            </div>
        </div>
    </section>

    <section class="mt-12 md:mt-20 px-6 md:px-12 lg:px-24" id="archive">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 border-b border-outline-variant/20 pb-4">
            <div class="flex gap-8 md:gap-12 overflow-x-auto">
                <button class="text-primary font-headline font-bold text-sm tracking-widest uppercase relative after:absolute after:-bottom-[17px] after:left-0 after:w-full after:h-[2px] after:bg-primary whitespace-nowrap" type="button">All</button>
                @foreach ($categories as $category)
                    <button class="text-neutral-500 hover:text-on-surface transition-colors font-headline font-bold text-sm tracking-widest uppercase whitespace-nowrap" type="button">{{ $category }}</button>
                @endforeach
            </div>
            <label class="flex items-center gap-2 text-neutral-500 border border-outline-variant/20 rounded-lg px-4 py-2 lg:border-0 lg:px-0 lg:py-0">
                <span class="material-symbols-outlined text-xl">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-sm font-body w-full lg:w-auto" placeholder="Search archive..." type="text"/>
            </label>
        </div>
    </section>

    <section class="py-20 md:py-24 px-6 md:px-12 lg:px-24 max-w-[1920px] mx-auto">
        @php
            $fallbackImages = [
                'https://lh3.googleusercontent.com/aida-public/AB6AXuDdHPTe9wq5cskKIg2jADt92_BTDrEq90QzLLjOmTaSe7DcyuyBQwzsYdnNU-ejOUNNqJxokDgGRJCX7B4xaeXVFCxinyU8uw7EHE3K9yijDiXR4puZtUII-xlGOFfvDLgB25v6AP3yY4ZlNg_zIE6xKwnxY3QewTnwdV9BDqu14tymJy2RDjmalU1OyXNndh5J-Dm8EwMIIyUL41JYszzC4YXxxZtr1HA_7FXFEi-ooDG2onFnbvB6AljSL5CaOI8NWfkY7RqRGU2Z',
                'https://lh3.googleusercontent.com/aida-public/AB6AXuCr08bIBQiCpwras8-uPuWYzHixNmzOOOQ5CK95O7JVbSlo5iAP_WfMx8ySpeXY-6iEeiNeMjo-ecedTvR6eH0GdT6QSzM0v8YGhbJyZ4N6xKff55L6SB_y1cf70en6uTHxLn_6e3raAuDKk9rvi9tI0FkUF488ugGUfCtJCBAvhe8XnrLxtcpMyspm0cuIXwnx-QEkjssHmcqZrZ3o32AkzPTwOsbFFWDzbdVu9jRmooUhW3Xl9lvuW6jrdwqpKEAtgjcfqZNYz5p2',
                'https://lh3.googleusercontent.com/aida-public/AB6AXuBULVceffimBPT9DIWhff-QQ0vB0BauQ1u6afI4bl9zNRPakmTzddSjiJSrzcjE8txTvREFy9Zy0uQbPsMIS6mieBuZFy0uuCh5ikEIIVKQbFRuepbMoENybkfZu0wYYzp6W_YrM0Lo6gWizpfyq5VfQaFwIA2C3OuxJHIr14xVnqThGs8pU8YQi_6wxdvWbHr-y7xI3IGG5i55niHHnQTzeRR33slTZHpTidt5Cq-QAwW1hGbA_UuM6A1xMiKQf7EbopMyyytwlVPd',
            ];
        @endphp

        @if ($blogPosts->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                @foreach ($blogPosts as $post)
                    <article class="group cursor-pointer">
                        <div class="relative overflow-hidden rounded-xl aspect-[4/5] mb-8 bg-surface-container-low">
                            <img
                                alt="{{ $post->title }}"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700"
                                src="{{ $post->image_url ?: $fallbackImages[$loop->index % count($fallbackImages)] }}"
                            />
                            <div class="absolute top-6 left-6 liquid-gold text-on-primary text-[10px] font-black uppercase px-3 py-1 rounded-sm">{{ $post->category }}</div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 text-neutral-500 text-xs font-medium uppercase tracking-[0.1em]">
                                <span>{{ optional($post->published_at)->format('M d, Y') ?? $post->created_at->format('M d, Y') }}</span>
                                <span class="w-1 h-1 bg-primary rounded-full"></span>
                                <span>{{ $post->read_time }} Min Read</span>
                            </div>
                            <h2 class="text-2xl font-headline font-bold tracking-tight group-hover:text-primary transition-colors">{{ $post->title }}</h2>
                            <p class="text-on-surface-variant/80 font-light leading-relaxed">
                                {{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 150) }}
                            </p>
                    <a class="inline-flex items-center gap-2 text-primary font-bold text-sm tracking-tighter uppercase group/link" href="{{ route('blog.show', $post) }}">
                                Read More
                                <span class="material-symbols-outlined text-lg group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            @if ($blogPosts->hasPages())
                <div class="mt-16">
                    {{ $blogPosts->links() }}
                </div>
            @endif
        @else
            <div class="rounded-xl border border-outline-variant/20 bg-surface-container-low p-12 text-center">
                <span class="material-symbols-outlined text-5xl text-primary">edit_note</span>
                <h2 class="mt-6 font-headline text-3xl font-extrabold tracking-tight">No Published Insights Yet</h2>
                <p class="mx-auto mt-4 max-w-xl text-on-surface-variant/80">
                    Publish a post from the dashboard blog management page and it will appear here automatically.
                </p>
            </div>
        @endif
    </section>

    <section class="px-6 md:px-12 lg:px-24 pb-24" id="newsletter">
        <div class="bg-surface-container-high rounded-xl p-8 md:p-16 lg:p-24 flex flex-col items-center text-center overflow-hidden border border-outline-variant/10">
            <h2 class="text-4xl font-headline font-extrabold tracking-tight mb-6">Never Miss an Insight</h2>
            <p class="text-on-surface-variant max-w-xl text-lg font-light mb-12">
                Join an exclusive circle of visionary leaders and thinkers receiving weekly dispatches on strategy, tech, and legacy building.
            </p>
            @if (session('newsletter_success'))
                <div class="mb-6 w-full max-w-md rounded-xl border border-primary/20 bg-primary/10 px-5 py-4 text-sm font-semibold text-primary">
                    {{ session('newsletter_success') }}
                </div>
            @endif
            <form class="w-full max-w-md flex flex-col gap-4" method="post" action="{{ route('newsletter.store') }}">
                @csrf
                <input type="hidden" name="source" value="blog">
                <div class="relative group">
                    <input class="w-full bg-transparent border-b border-outline-variant/30 py-4 focus:border-primary transition-colors focus:ring-0 text-lg" name="email" placeholder="Email Address" type="email" value="{{ old('email') }}" required/>
                </div>
                @error('email')
                    <p class="text-sm text-error">{{ $message }}</p>
                @enderror
                <button class="liquid-gold text-on-primary py-5 rounded-lg font-headline font-bold text-lg tracking-tight mt-4" type="submit">
                    Subscribe to Dispatch
                </button>
                <p class="text-[10px] text-neutral-500 uppercase tracking-widest mt-4">Rest assured. Your privacy is paramount.</p>
            </form>
        </div>
    </section>
</main>

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
            &copy; 2026 Iloge. Designed &amp; developed by codewitheugene
        </div>
    </div>
</footer>
</body>
</html>
