<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ILOGE | The Architect of Impact</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700;800&amp;family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-container": "#d2b100",
                        "surface-variant": "#353534",
                        "primary-fixed": "#ffe16c",
                        "on-surface": "#e5e2e1",
                        "secondary-fixed": "#e5e2e1",
                        "on-background": "#e5e2e1",
                        "surface-container": "#201f1f",
                        "outline-variant": "#4d4635",
                        "on-error": "#690005",
                        "on-surface-variant": "#d0c5af",
                        "primary-fixed-dim": "#e8c408",
                        "on-primary-fixed-variant": "#544600",
                        "primary": "#f1cc19",
                        "tertiary": "#f2cc00",
                        "on-tertiary": "#3a3000",
                        "tertiary-fixed-dim": "#e9c400",
                        "secondary-container": "#474746",
                        "outline": "#99907c",
                        "surface-container-lowest": "#0e0e0e",
                        "on-error-container": "#ffdad6",
                        "inverse-primary": "#705d00",
                        "inverse-on-surface": "#313030",
                        "tertiary-fixed": "#ffe16d",
                        "secondary": "#c8c6c5",
                        "on-primary": "#3a3000",
                        "on-tertiary-fixed-variant": "#544600",
                        "on-secondary-fixed": "#1c1b1b",
                        "secondary-fixed-dim": "#c8c6c5",
                        "error-container": "#93000a",
                        "surface": "#131313",
                        "on-tertiary-fixed": "#221b00",
                        "on-primary-fixed": "#221b00",
                        "on-secondary-container": "#b7b5b4",
                        "on-secondary": "#313030",
                        "surface-container-low": "#1c1b1b",
                        "on-tertiary-container": "#534400",
                        "on-primary-container": "#524400",
                        "primary-container": "#d2b100",
                        "on-secondary-fixed-variant": "#474746",
                        "error": "#ffb4ab",
                        "surface-tint": "#e8c408",
                        "surface-container-high": "#2a2a2a",
                        "surface-dim": "#131313",
                        "surface-container-highest": "#353534",
                        "surface-bright": "#3a3939",
                        "background": "#131313",
                        "inverse-surface": "#e5e2e1"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
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
            background-color: rgba(21, 21, 21, 0.6);
            backdrop-filter: blur(30px);
        }
        body {
            background-color: #131313;
            color: #e5e2e1;
            font-family: 'Inter', sans-serif;
        }
        h1, h2, h3 {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>
<body class="selection:bg-primary selection:text-on-primary">
<nav class="fixed top-0 w-full z-50 bg-[#131313]/60 backdrop-blur-[30px] shadow-[0_40px_40px_-10px_rgba(229,226,225,0.05)] border-b border-white/5">
    <div class="relative flex justify-between items-center px-6 md:px-12 py-6 max-w-[1920px] mx-auto">
        <a class="text-2xl font-black tracking-tighter text-[#f1cc19] font-headline" href="{{ url('/') }}">ILOGE</a>
        <div class="hidden xl:flex items-center gap-8 font-headline tracking-tight text-sm uppercase">
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/') }}">Home</a>
            <div class="relative group">
                <button class="text-[#f1cc19] border-b border-[#f1cc19] pb-1 inline-flex items-center gap-1 transition-colors duration-300" type="button">
                    About
                    <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                </button>
                <div class="absolute left-0 top-full pt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-300">
                    <div class="min-w-48 bg-[#131313]/95 backdrop-blur-2xl border border-white/10 rounded-lg shadow-2xl py-3">
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/speaker') }}">Speaker</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/investor') }}">Investor</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#f1cc19] bg-white/5 transition-all" href="{{ url('/leader') }}">Leader</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/pressroom') }}">Press Room</a>
            <div class="relative group">
                <button class="text-[#e5e2e1]/70 hover:text-[#f1cc19] inline-flex items-center gap-1 transition-colors duration-300" type="button">
                    Diary of Iloge
                    <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                </button>
                <div class="absolute left-0 top-full pt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-300">
                    <div class="min-w-56 bg-[#131313]/95 backdrop-blur-2xl border border-white/10 rounded-lg shadow-2xl py-3">
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/podcast') }}">Podcast</a>
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
            <a class="px-6 md:px-8 py-2.5 liquid-gold-gradient text-on-primary font-bold tracking-tight rounded-md active:scale-95 duration-200 uppercase text-xs" href="#contact">
                Inquire
            </a>
            <details class="xl:hidden">
                <summary class="list-none cursor-pointer flex h-10 w-10 items-center justify-center rounded-md border border-white/10 bg-white/5 text-on-surface hover:text-primary hover:bg-white/10 transition-all [&::-webkit-details-marker]:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </summary>
                <div class="absolute right-6 top-full mt-3 w-[min(22rem,calc(100vw-3rem))] bg-[#131313]/95 backdrop-blur-2xl border border-white/10 rounded-lg shadow-2xl p-5">
                    <div class="flex flex-col gap-1 font-headline text-sm uppercase tracking-widest">
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 transition-colors" href="{{ url('/') }}">Home</a>
                        <details class="border-t border-white/5 py-2" open>
                            <summary class="list-none cursor-pointer flex items-center justify-between text-[#f1cc19] py-3 [&::-webkit-details-marker]:hidden">
                                About
                                <span class="material-symbols-outlined text-base">expand_more</span>
                            </summary>
                            <div class="flex flex-col pl-4 pb-2">
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/speaker') }}">Speaker</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/investor') }}">Investor</a>
                                <a class="py-2 text-xs text-[#f1cc19]" href="{{ url('/leader') }}">Leader</a>
                            </div>
                        </details>
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="{{ url('/pressroom') }}">Press Room</a>
                        <details class="border-t border-white/5 py-2">
                            <summary class="list-none cursor-pointer flex items-center justify-between text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 [&::-webkit-details-marker]:hidden">
                                Diary of Iloge
                                <span class="material-symbols-outlined text-base">expand_more</span>
                            </summary>
                            <div class="flex flex-col pl-4 pb-2">
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/podcast') }}">Podcast</a>
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

<section class="relative min-h-screen flex items-center pt-20 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover grayscale brightness-50 contrast-125" alt="Confident executive in a modern glass skyscraper interior" data-alt="dramatic low-angle portrait of a confident African executive in a charcoal suit standing in a sun-drenched modern glass skyscraper interior" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBBaiIpmPICHV6sA8C5zyw5IzosHaDwjfHOCxtEDfkMLIDKQr21L1OwkI2xPqatTDUAIlGKsgEOEpQkyz-d3_eiYfmFx4j71eCMf4SWX0OZJfYjejPCaaNb7zJyE5L5tPvI0tQjhPi-EkcQhqh2couPIISI8tAK0TdF8YMeZP6ZiSvnpS0S1PBQOKexNjzklvKsUz6jVwiFRohQ7ge0HGC00fYO0FGEFE2BY8ZLHat-PqKaXiBBjzOuuMNJewy4jqEbnfTSER8WYjzz"/>
        <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/40 to-transparent"></div>
    </div>
    <div class="relative z-10 container mx-auto px-6 md:px-12">
        <div class="max-w-4xl">
            <p class="text-primary font-bold uppercase mb-4 text-sm tracking-[0.3em]">Architecting Global Sovereignty</p>
            <h1 class="text-6xl md:text-9xl font-extrabold tracking-tighter leading-none text-on-surface mb-8">
                The Architect <br/>of <span class="text-primary italic">Impact</span>
            </h1>
            <p class="text-xl md:text-2xl font-light text-on-surface/80 max-w-2xl leading-relaxed mb-12 border-l-2 border-primary pl-8">
                Leading the next era of global innovation and strategic sovereignty for the world's most influential entities.
            </p>
            <div class="flex flex-col sm:flex-row gap-6">
                <a class="px-10 py-5 liquid-gold-gradient text-on-primary font-bold rounded-md hover:brightness-110 transition-all shadow-xl shadow-primary/10 text-center" href="#vision">
                    Explore Vision
                </a>
                <a class="px-10 py-5 bg-surface-variant/40 backdrop-blur-md text-on-surface font-bold rounded-md border border-outline-variant/30 hover:bg-surface-variant transition-all text-center" href="#contact">
                    Advisory Portal
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-surface" id="vision">
    <div class="container mx-auto px-6 md:px-12">
        <div class="mb-24 flex flex-col items-start max-w-3xl">
            <h2 class="text-5xl font-bold tracking-tight mb-6">Philosophy of Control</h2>
            <div class="w-24 h-1 bg-primary mb-8"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
            <div class="group">
                <div class="mb-8 flex items-center justify-center w-16 h-16 rounded-full border border-primary/30 group-hover:bg-primary transition-all duration-500">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary text-3xl">shield_person</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 tracking-tight">Strategic Resilience</h3>
                <p class="text-on-surface/60 leading-relaxed font-light">
                    Constructing systems that thrive through volatility. We don't just survive global shifts; we architect the mechanisms that profit from them.
                </p>
            </div>
            <div class="group">
                <div class="mb-8 flex items-center justify-center w-16 h-16 rounded-full border border-primary/30 group-hover:bg-primary transition-all duration-500">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary text-3xl">account_tree</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 tracking-tight">Architectural Thinking</h3>
                <p class="text-on-surface/60 leading-relaxed font-light">
                    Deciphering complex networks to build foundations of lasting sovereignty. Moving beyond linear growth into multi-dimensional influence.
                </p>
            </div>
            <div class="group">
                <div class="mb-8 flex items-center justify-center w-16 h-16 rounded-full border border-primary/30 group-hover:bg-primary transition-all duration-500">
                    <span class="material-symbols-outlined text-primary group-hover:text-on-primary text-3xl">rocket_launch</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 tracking-tight">Radical Future</h3>
                <p class="text-on-surface/60 leading-relaxed font-light">
                    Pioneering innovations that redefine industry standards. We define the edge of the possible by engineering the impossible today.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-surface-container-lowest">
    <div class="container mx-auto px-6 md:px-12">
        <div class="flex flex-col md:flex-row justify-between md:items-end gap-12 mb-24">
            <div class="max-w-xl">
                <h2 class="text-5xl font-bold tracking-tight mb-6 leading-tight">Measured <br/>Sovereignty</h2>
            </div>
            <div class="text-on-surface/40 uppercase tracking-widest text-sm mb-2">Quantified Excellence / Fiscal Year 2024</div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-outline-variant/20 border-y border-outline-variant/20">
            <div class="py-16 md:pr-12 group transition-all duration-300">
                <div class="text-7xl font-extrabold text-primary mb-6 tracking-tighter">150%</div>
                <div class="text-xl font-bold mb-4">Operational Alpha</div>
                <p class="text-on-surface/50 font-light leading-relaxed">Redefining supply chain resilience for Fortune 100 industrial groups through algorithmic logistics.</p>
            </div>
            <div class="py-16 md:px-12 group transition-all duration-300">
                <div class="text-7xl font-extrabold text-primary mb-6 tracking-tighter">12</div>
                <div class="text-xl font-bold mb-4">Global Boards</div>
                <p class="text-on-surface/50 font-light leading-relaxed">Serving as strategic counsel for multi-national conglomerates across four continents.</p>
            </div>
            <div class="py-16 md:pl-12 group transition-all duration-300">
                <div class="text-7xl font-extrabold text-primary mb-6 tracking-tighter">Gold</div>
                <div class="text-xl font-bold mb-4">Sustainable Sovereignty</div>
                <p class="text-on-surface/50 font-light leading-relaxed">Led the carbon-neutral transformation project for the world's leading sovereign wealth funds.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-40 bg-surface relative overflow-hidden" id="contact">
    <div class="absolute -right-64 top-0 w-[800px] h-[800px] bg-primary/5 rounded-full blur-[120px]"></div>
    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-start">
            <div class="space-y-8">
                <div class="inline-block py-2 px-4 rounded bg-primary/10 border border-primary/20 text-primary text-xs font-bold uppercase tracking-widest">
                    Advisory Inquiry
                </div>
                <h2 class="text-5xl md:text-6xl font-bold tracking-tight leading-tight">Exclusive <br/>Strategic Access.</h2>
                <p class="text-xl text-on-surface/70 leading-relaxed max-w-md">
                    Reserved for CEOs, heads of state, and founders who operate at the edge of the possible. Entrance into the ecosystem is by invitation or strategic vetting only.
                </p>
                <div class="pt-8 flex items-center gap-4 text-on-surface/40 uppercase tracking-widest text-xs font-bold">
                    <span class="w-12 h-[1px] bg-outline-variant"></span>
                    Privacy Guaranteed under ILOGE Protocols
                </div>
            </div>
            <div class="bg-surface-container p-8 md:p-12 rounded-xl shadow-2xl border border-outline-variant/10">
                <form class="space-y-10">
                    <div class="relative group">
                        <label class="block text-[10px] uppercase tracking-widest font-bold text-on-surface/40 mb-2 transition-colors group-focus-within:text-primary">Name / Organization</label>
                        <input class="w-full bg-transparent border-b-2 border-outline-variant/30 focus:border-primary focus:ring-0 text-xl py-4 transition-all placeholder:text-on-surface/20 placeholder:font-light" placeholder="Your Authority" type="text"/>
                    </div>
                    <div class="relative group">
                        <label class="block text-[10px] uppercase tracking-widest font-bold text-on-surface/40 mb-2 transition-colors group-focus-within:text-primary">Strategic Intent</label>
                        <textarea class="w-full bg-transparent border-b-2 border-outline-variant/30 focus:border-primary focus:ring-0 text-xl py-4 transition-all placeholder:text-on-surface/20 placeholder:font-light resize-none" placeholder="Brief outline of vision..." rows="4"></textarea>
                    </div>
                    <button class="w-full py-6 liquid-gold-gradient text-on-primary font-black uppercase tracking-[0.2em] rounded shadow-lg shadow-primary/20 hover:scale-[1.01] active:scale-95 transition-all">
                        Initiate Contact
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="bg-[#0e0e0e] w-full py-24 px-6 md:px-12 border-t border-outline-variant/10">
    <div class="flex flex-col md:flex-row justify-between items-start w-full max-w-7xl mx-auto gap-12">
        <div class="flex flex-col gap-6">
            <a class="text-2xl font-headline font-black text-[#e5e2e1] tracking-tighter" href="{{ url('/') }}">ILOGE</a>
            <p class="font-body text-xs uppercase tracking-widest text-[#e5e2e1]/50 leading-loose max-w-xs">
                STRATEGIC ADVISORY GROUP. <br/>BUILDING FOUNDATIONS FOR GLOBAL LEADERSHIP.
            </p>
        </div>
        <div class="flex flex-col md:items-end gap-12">
            <div class="flex flex-wrap gap-8">
                <a class="font-body text-sm uppercase tracking-widest text-[#e5e2e1]/50 hover:text-[#f1cc19] transition-all" href="#">Privacy Policy</a>
                <a class="font-body text-sm uppercase tracking-widest text-[#e5e2e1]/50 hover:text-[#f1cc19] transition-all" href="#">Terms of Service</a>
                <a class="font-body text-sm uppercase tracking-widest text-[#e5e2e1]/50 hover:text-[#f1cc19] transition-all" href="#">Executive Disclosure</a>
            </div>
            <div class="font-body text-[10px] uppercase tracking-[0.3em] text-[#e5e2e1]/30">
                &copy; 2026 Iloge. Designed &amp; developed by codewitheugene
            </div>
        </div>
    </div>
</footer>
</body>
</html>
