<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>The Visual Legacy | Iloge</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-background": "#e5e2e1",
                        "on-secondary-container": "#b7b5b4",
                        "surface-container-low": "#1c1b1b",
                        "on-secondary-fixed-variant": "#474746",
                        "surface-container-lowest": "#0e0e0e",
                        "background": "#131313",
                        "surface": "#131313",
                        "on-tertiary-container": "#534400",
                        "on-surface": "#e5e2e1",
                        "primary-fixed-dim": "#e8c408",
                        "surface-bright": "#3a3939",
                        "on-secondary": "#313030",
                        "inverse-surface": "#e5e2e1",
                        "on-error-container": "#ffdad6",
                        "tertiary": "#f2cc00",
                        "surface-variant": "#353534",
                        "secondary-container": "#474746",
                        "outline": "#99907c",
                        "on-surface-variant": "#d0c5af",
                        "surface-tint": "#e8c408",
                        "secondary-fixed": "#e5e2e1",
                        "primary-fixed": "#ffe16c",
                        "secondary": "#c8c6c5",
                        "inverse-primary": "#705d00",
                        "tertiary-container": "#d2b100",
                        "primary-container": "#d2b100",
                        "on-tertiary": "#3a3000",
                        "on-primary-fixed-variant": "#544600",
                        "on-primary": "#3a3000",
                        "inverse-on-surface": "#313030",
                        "surface-container": "#201f1f",
                        "primary": "#f1cc19",
                        "tertiary-fixed-dim": "#e9c400",
                        "tertiary-fixed": "#ffe16d",
                        "surface-container-high": "#2a2a2a",
                        "outline-variant": "#4d4635",
                        "on-primary-fixed": "#221b00",
                        "on-tertiary-fixed": "#221b00",
                        "on-primary-container": "#524400",
                        "on-tertiary-fixed-variant": "#544600",
                        "surface-container-highest": "#353534",
                        "on-secondary-fixed": "#1c1b1b",
                        "secondary-fixed-dim": "#c8c6c5",
                        "surface-dim": "#131313"
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
    </style>
</head>
<body class="bg-surface text-on-surface font-body selection:bg-primary/30 selection:text-primary">
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
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/blog') }}">Blog</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/team') }}">Team</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#f1cc19] bg-white/5 transition-all" href="{{ url('/gallery') }}">Gallery</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/testimonials') }}">Testimonials</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/shop') }}">Shop</a>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <a class="liquid-gold-gradient text-on-primary font-bold uppercase text-xs tracking-widest px-6 py-2 rounded-md active:opacity-80 active:scale-95 transition-all" href="#media-vault">
                Contact
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
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/blog') }}">Blog</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/team') }}">Team</a>
                                <a class="py-2 text-xs text-[#f1cc19]" href="{{ url('/gallery') }}">Gallery</a>
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

<main class="min-h-screen">
    <section class="relative h-[819px] flex items-end overflow-hidden bg-surface-container-lowest pt-24">
        <div class="absolute inset-0 z-0">
            <img alt="Cinematic wide shot of a modern architectural stage with dramatic shadows and golden accent lighting, professional atmosphere" class="w-full h-full object-cover opacity-40 mix-blend-luminosity" src="{{ $featuredGalleryItem?->image_url ?? 'https://lh3.googleusercontent.com/aida-public/AB6AXuBmkcJRlchHY5RIJ83fi5rU-d_gOoVl8o4rcl03q-VVYqTgYKJGHIKepmtxkXE8aJXPYS4fLymTcWlP9EzQLBfBShIyqNMzIFgBJcWPH-2GLShe8gHDTl5yplGH6W9RvV7E4oAQnxYCXIiJBzPY0XLFAckOXgmgY0411fgbo4-FH0yG_fKTwSlbt_pirLvGE9M7rAddu56m4DkG4dr9ruo9gMvu7BeI7dcDvzne5Z1-Sfeng7mR8D2zZ_sMi_ZgBG2wpYipTtlz9Nuh' }}"/>
            <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/40 to-transparent"></div>
        </div>
        <div class="relative z-10 w-full max-w-7xl mx-auto px-6 md:px-8 pb-24">
            <span class="inline-block px-4 py-1 mb-6 text-xs font-bold tracking-[0.3em] uppercase text-primary border border-primary/20 rounded-full bg-primary/5">
                Curated Exhibition
            </span>
            <h1 class="font-headline text-6xl md:text-9xl font-extrabold tracking-tighter text-on-surface mb-8 leading-[0.9]">
                The Visual <br/><span class="text-primary">Legacy</span>
            </h1>
            <p class="max-w-2xl text-on-secondary-container text-lg leading-relaxed font-light">
                {{ $featuredGalleryItem?->description ?? 'Documenting a decade of transformative leadership. From global boardrooms to innovation summits, explore the moments that define architectural authority and strategic vision.' }}
            </p>
        </div>
    </section>

    <section class="bg-surface sticky top-[89px] z-40 py-8 border-y border-outline-variant/10">
        <div class="max-w-7xl mx-auto px-6 md:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex flex-wrap gap-2">
                <button class="px-6 py-2 rounded-full text-sm font-bold bg-primary text-on-primary transition-all" type="button">All Collections</button>
                @foreach ($galleryCategories as $category)
                    <button class="px-6 py-2 rounded-full text-sm font-medium text-on-surface-variant hover:bg-surface-container-high transition-all" type="button">{{ $category }}</button>
                @endforeach
            </div>
            <label class="flex items-center gap-4 text-on-surface-variant">
                <span class="text-xs uppercase tracking-widest font-bold">Sort By:</span>
                <select class="bg-transparent border-none text-sm font-bold focus:ring-0 cursor-pointer">
                    <option>Newest First</option>
                    <option>Most Iconic</option>
                    <option>Chronological</option>
                </select>
            </label>
        </div>
    </section>

        <section class="max-w-7xl mx-auto px-6 md:px-8 py-20">
        @if ($galleryItems->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-4 md:auto-rows-[240px] gap-6">
                @foreach ($galleryItems as $item)
                    @php
                        $spanClass = match ($loop->index % 6) {
                            0 => 'md:col-span-2 md:row-span-2',
                            1 => 'md:col-span-2',
                            5 => 'md:col-span-3',
                            default => '',
                        };
                    @endphp
                    <article class="min-h-72 md:min-h-0 {{ $spanClass }} relative group overflow-hidden rounded-xl bg-surface-container-high">
                        <img alt="{{ $item->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ $item->image_url }}"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 p-6 {{ $loop->index % 6 === 0 ? 'md:p-8' : '' }} flex flex-col justify-end">
                            @if ($item->is_featured)
                                <span class="mb-2 w-fit rounded bg-primary px-2 py-1 text-[10px] font-black uppercase tracking-widest text-on-primary">Featured</span>
                            @endif
                            <span class="text-primary text-xs font-bold tracking-widest mb-2 uppercase">{{ $item->category }}</span>
                            <h2 class="font-headline {{ $loop->index % 6 === 0 ? 'text-2xl' : 'text-xl' }} font-bold">{{ $item->title }}</h2>
                            @if ($item->description)
                                <p class="mt-2 line-clamp-2 text-sm text-on-surface/60">{{ $item->description }}</p>
                            @endif
                        </div>
                    </article>
                @endforeach
            </div>

            @if ($galleryItems->hasPages())
                <div class="mt-12 flex justify-end gap-2">
                    @if ($galleryItems->previousPageUrl())
                        <a class="rounded border border-outline-variant/30 px-4 py-2 text-[10px] font-bold uppercase text-on-surface-variant transition-colors hover:border-on-surface-variant" href="{{ $galleryItems->previousPageUrl() }}">Prev</a>
                    @endif
                    @if ($galleryItems->nextPageUrl())
                        <a class="rounded border border-primary px-4 py-2 text-[10px] font-bold uppercase text-on-surface transition-colors hover:bg-primary/10" href="{{ $galleryItems->nextPageUrl() }}">Next</a>
                    @endif
                </div>
            @endif
        @else
            <div class="rounded-xl border border-outline-variant/20 bg-surface-container-low p-12 text-center">
                <span class="material-symbols-outlined text-5xl text-primary">photo_library</span>
                <h2 class="mt-6 font-headline text-3xl font-extrabold tracking-tight">No Gallery Images Yet</h2>
                <p class="mx-auto mt-4 max-w-xl text-on-surface-variant/80">
                    Add gallery assets from the dashboard and they will appear here automatically.
                </p>
            </div>
        @endif
    </section>

    <section class="max-w-7xl mx-auto px-6 md:px-8 py-24" id="media-vault">
        <div class="bg-surface-container-low rounded-xl p-8 md:p-12 flex flex-col md:flex-row gap-12 items-center border border-outline-variant/10">
            <div class="flex-1">
                <h2 class="font-headline text-4xl font-bold tracking-tight mb-4">Press &amp; Media Vault</h2>
                <p class="text-on-secondary-container mb-8 max-w-lg">
                    High-resolution brand assets, official portraits, and the 2024 Press Kit are available for verified media partners and event organizers.
                </p>
                <div class="flex flex-wrap gap-6">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">cloud_download</span>
                        <span class="text-sm font-semibold uppercase tracking-wide">Media Kit 2024</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">verified</span>
                        <span class="text-sm font-semibold uppercase tracking-wide">Press Credentials</span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-auto">
                <a class="inline-flex w-full md:w-auto justify-center px-10 py-5 rounded-lg liquid-gold-gradient text-on-primary font-bold text-sm uppercase tracking-widest hover:scale-[1.02] transition-transform shadow-xl shadow-primary/10" href="#">
                    Request Vault Access
                </a>
                <p class="text-center mt-4 text-xs text-on-secondary-fixed-variant">Response within 24 hours</p>
            </div>
        </div>
    </section>
</main>

<footer class="bg-neutral-950 border-t border-neutral-800/50">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center max-w-7xl mx-auto w-full py-12 px-6 md:px-8">
        <div>
            <a class="text-xl font-bold text-neutral-100 font-headline uppercase mb-4 inline-block" href="{{ url('/') }}">Iloge</a>
            <p class="font-headline text-sm tracking-wide text-neutral-500">&copy; 2026 Iloge. Designed &amp; developed by codewitheugene</p>
        </div>
        <div class="flex flex-wrap md:justify-end gap-x-8 gap-y-4">
            <a class="font-headline text-sm tracking-wide text-neutral-500 hover:text-yellow-500 transition-colors duration-200 hover:underline decoration-yellow-500/30 underline-offset-4" href="{{ url('/speaker') }}">Speaker Bureau</a>
            <a class="font-headline text-sm tracking-wide text-neutral-500 hover:text-yellow-500 transition-colors duration-200 hover:underline decoration-yellow-500/30 underline-offset-4" href="{{ url('/investor') }}">Investor Relations</a>
            <a class="font-headline text-sm tracking-wide text-neutral-500 hover:text-yellow-500 transition-colors duration-200 hover:underline decoration-yellow-500/30 underline-offset-4" href="#">Privacy Policy</a>
            <a class="font-headline text-sm tracking-wide text-yellow-500 font-semibold hover:text-yellow-500 transition-colors duration-200 hover:underline decoration-yellow-500/30 underline-offset-4" href="{{ url('/contact') }}">Contact</a>
        </div>
    </div>
</footer>
</body>
</html>
