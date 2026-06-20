<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Press Room | ILOGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f1cc19",
                        "primary-fixed-dim": "#e8c408",
                        "on-primary": "#3a3000",
                        "surface": "#131313",
                        "on-surface": "#e5e2e1",
                        "surface-container-lowest": "#0e0e0e",
                        "surface-container-low": "#1c1b1b",
                        "surface-container": "#201f1f",
                        "surface-container-high": "#2a2a2a",
                        "outline-variant": "#4d4635"
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
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .liquid-gold-bg {
            background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%);
        }
        body {
            background-color: #131313;
            color: #e5e2e1;
            font-family: 'Inter', sans-serif;
        }
        h1, h2, h3, .brand-font {
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
            <a class="text-[#f1cc19] border-b border-[#f1cc19] pb-1" href="{{ url('/pressroom') }}">Press Room</a>
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
            <a class="liquid-gold-bg text-on-primary font-bold px-5 md:px-6 py-2.5 rounded-lg text-xs uppercase tracking-widest active:opacity-80 active:scale-95 transition-all" href="#contact">
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
                        <a class="text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="{{ url('/pressroom') }}">Press Room</a>
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

<main>
    <section class="relative min-h-[819px] flex items-center overflow-hidden pt-24">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent z-10"></div>
            <img alt="Iloge Media Room" class="w-full h-full object-cover object-center grayscale hover:grayscale-0 transition-all duration-1000 opacity-60" data-alt="Cinematic portrait of a confident African male entrepreneur in a tailored charcoal suit, dramatic side lighting with warm golden highlights, dark studio background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdFfeO6vTWue9Dmtr5fwqE8wPbouDWIYUvzD5A7G8QKEO5HKdMc8qt2dNVDWLPVyzB8J1w_sXv3yvhUeI-oFoIeuJoMmJWt43YuKlRzXePEe21hnxyS2Rev0tGU5K51ofHqE3r7aw6f266nXSmR8x0U1H1999T4zCjjraz_YwRCtAk6KFolRySJlNJa-PTWi5-e4DsLAJdivDv4I47nf16yaCSiuzGkEE75_9PeVH6iQHZ5qoZMOIMzBeLZd8Is_WOScafjjWBiu7U"/>
        </div>
        <div class="relative z-20 px-6 md:px-24 w-full max-w-[1400px]">
            <span class="text-primary font-headline font-bold uppercase tracking-[0.4em] text-xs mb-6 block">The Architect of Shadows</span>
            <h1 class="text-on-surface text-6xl md:text-8xl font-extrabold tracking-tighter leading-none mb-8">The Iloge <br/><span class="text-primary-fixed-dim">Media Room</span></h1>
            <p class="text-on-surface/60 max-w-xl text-lg leading-relaxed font-light">
                Resources for media partners, journalists, and global collaborators. Access the official narrative of innovation, leadership, and digital sovereignty.
            </p>
        </div>
    </section>

    <section class="py-32 px-6 md:px-24 bg-surface">
        <div class="max-w-[1400px] mx-auto">
            <div class="flex justify-between items-end mb-16">
                <div>
                    <h2 class="text-4xl font-headline font-bold tracking-tight text-on-surface mb-2 uppercase">Media Kit</h2>
                    <div class="w-20 h-1 bg-primary"></div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group bg-surface-container-low p-10 rounded-xl hover:bg-surface-container-high transition-all duration-500 border-l border-primary/20">
                    <span class="material-symbols-outlined text-primary text-4xl mb-6">description</span>
                    <h3 class="text-xl font-bold mb-4 tracking-tight">Official Biography</h3>
                    <p class="text-on-surface/40 text-sm mb-8 leading-relaxed">The comprehensive professional journey and vision statement of Iloge in PDF format.</p>
                    <a class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-widest hover:gap-4 transition-all" href="#">Download PDF <span class="material-symbols-outlined text-sm">download</span></a>
                </div>
                <div class="group bg-surface-container-low p-10 rounded-xl hover:bg-surface-container-high transition-all duration-500 border-l border-primary/20">
                    <span class="material-symbols-outlined text-primary text-4xl mb-6">photo_camera</span>
                    <h3 class="text-xl font-bold mb-4 tracking-tight">High-Res Portraits</h3>
                    <p class="text-on-surface/40 text-sm mb-8 leading-relaxed">Studio portraits and action shots optimized for print and digital publication.</p>
                    <a class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-widest hover:gap-4 transition-all" href="#">Download ZIP <span class="material-symbols-outlined text-sm">download</span></a>
                </div>
                <div class="group bg-surface-container-low p-10 rounded-xl hover:bg-surface-container-high transition-all duration-500 border-l border-primary/20">
                    <span class="material-symbols-outlined text-primary text-4xl mb-6">architecture</span>
                    <h3 class="text-xl font-bold mb-4 tracking-tight">Brand Guidelines</h3>
                    <p class="text-on-surface/40 text-sm mb-8 leading-relaxed">Usage rules for visual identity, logo variations, and tonal hierarchy.</p>
                    <a class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-widest hover:gap-4 transition-all" href="#">Download PDF <span class="material-symbols-outlined text-sm">download</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 px-6 md:px-24 bg-surface-container-lowest">
        <div class="max-w-[1400px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-16">
            <div class="lg:col-span-4">
                <h2 class="text-4xl font-headline font-bold tracking-tight text-on-surface mb-6 uppercase">Press <br/>Releases</h2>
                <p class="text-on-surface/50 mb-10 leading-relaxed">Direct updates on global initiatives, technological breakthroughs, and institutional partnerships.</p>
                <a class="group text-primary font-bold uppercase tracking-widest text-xs flex items-center gap-3" href="#">View All Archive <span class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_forward</span></a>
            </div>
            <div class="lg:col-span-8 space-y-12">
                <div class="group">
                    <div class="text-primary-fixed-dim text-xs font-mono mb-2">OCTOBER 24, 2024</div>
                    <h3 class="text-2xl font-bold text-on-surface group-hover:text-primary transition-colors cursor-pointer mb-4">Iloge Unveils Neural Infrastructure Project for Emerging Economies</h3>
                    <p class="text-on-surface/40 text-sm max-w-2xl mb-4">The new framework aims to decentralize high-performance computing access across the continent, prioritizing sovereign data ownership...</p>
                    <a class="text-on-surface text-xs font-bold underline underline-offset-4 decoration-primary/30 hover:decoration-primary transition-all" href="#">Read More</a>
                </div>
                <div class="group">
                    <div class="text-primary-fixed-dim text-xs font-mono mb-2">SEPTEMBER 12, 2024</div>
                    <h3 class="text-2xl font-bold text-on-surface group-hover:text-primary transition-colors cursor-pointer mb-4">Global Leadership Summit: The Ethics of Invisible Architecture</h3>
                    <p class="text-on-surface/40 text-sm max-w-2xl mb-4">A keynote address delivered at the World Economic Forum on the responsibility of tech architects in the shadow economy...</p>
                    <a class="text-on-surface text-xs font-bold underline underline-offset-4 decoration-primary/30 hover:decoration-primary transition-all" href="#">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 md:px-24 bg-surface">
        <div class="max-w-[1400px] mx-auto text-center">
            <span class="text-on-surface/30 uppercase tracking-[0.5em] text-[10px] block mb-12">Featured Globally In</span>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-24 opacity-40 grayscale hover:grayscale-0 transition-all">
                <span class="font-headline text-2xl font-extrabold tracking-tighter">FORBES</span>
                <span class="font-headline text-2xl font-extrabold tracking-tighter">BLOOMBERG</span>
                <span class="font-headline text-2xl font-extrabold tracking-tighter">WIRED</span>
                <span class="font-headline text-2xl font-extrabold tracking-tighter">THE VERGE</span>
                <span class="font-headline text-2xl font-extrabold tracking-tighter">FASTCO</span>
            </div>
        </div>
    </section>

    <section class="py-32 px-6 md:px-24 bg-surface">
        <div class="max-w-[1400px] mx-auto">
            <h2 class="text-4xl font-headline font-bold tracking-tight text-on-surface mb-16 uppercase">Visual Gallery</h2>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:h-[700px]">
                <div class="lg:col-span-8 min-h-[320px] lg:h-full relative overflow-hidden rounded-xl">
                    <img alt="Leadership Asset" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-105 cursor-pointer" data-alt="Modern minimalist boardroom with dark wood and gold accents, silhouette of a person standing by a large floor-to-ceiling window overlooking a night cityscape" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaKCW1Qe7o6E_mLcQHXvPkL84wBujTiqqwPKK3pqcgi7NN4Irkij6G-7242R_pkWmszcobKpdqigGCB-HWoyJ8zF5Joj1RiZi2gFrsxK2YzNtCIwfZuLEjjlE39RUuMXFWLf2dqbTqSJTkGnTjE7FVmyWwDghPS9i9PMnUlHJLnnL5X7t4x5GdHgEGiuv4G9C872LAky4wWF6KFUgR9UmipE360rOay36H2pkyeNnvtRaDGiqQeBgdscj3s3roA5iOslDJW1pU1gfy"/>
                </div>
                <div class="lg:col-span-4 flex flex-col gap-4 h-full">
                    <div class="min-h-[260px] lg:h-1/2 relative overflow-hidden rounded-xl">
                        <img alt="Tech Focus" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-105 cursor-pointer" data-alt="Extreme close up of futuristic architectural details, black brushed steel and gold trim reflecting soft ambient light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC23h3Ibk-4LAPdTZ94LhGKFldl20CZuY8Q6sYEleOSCdTIauDu7w4iYl78jqmUkYq8-vhqRGXCSsx6snDIXQMyg-o7B96ecJfITqXhuPatj9hItdJTVR1165WTNpg2UFA5_xLGw4HPCDCif7Osqc-dJ-boXp0lQqhhPRYjbnACX0UnWPTdh1UXPMuqiRVjHFAshtHeec4jQl-GhU1lnAvb0MSnBmC7xXIp4Xq-gStRcqaPIH5W0UR9LaNeNnIKT8h4nax2lVQZDdXZ"/>
                    </div>
                    <div class="min-h-[260px] lg:h-1/2 relative overflow-hidden rounded-xl">
                        <img alt="Portrait Asset" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 hover:scale-105 cursor-pointer" data-alt="African male entrepreneur working on a holographic display in a dark high-tech environment, warm gold light reflecting on his face" src="{{ asset('images/about-side.jpg') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 px-6 md:px-24 bg-surface-container-lowest" id="contact">
        <div class="max-w-[1400px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-start">
                <div>
                    <h2 class="text-5xl font-headline font-bold tracking-tight text-on-surface mb-8 uppercase">Direct <br/>Inquiries</h2>
                    <p class="text-on-surface/50 text-lg mb-12 max-w-md">Our press team is dedicated to providing timely, accurate, and exclusive insights for media partners.</p>
                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-primary">mail</span>
                            <div>
                                <h4 class="font-bold text-sm tracking-widest uppercase mb-1">Press Relations</h4>
                                <p class="text-on-surface/40 text-sm">press@onyekwelu-iloge.com</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-primary">location_on</span>
                            <div>
                                <h4 class="font-bold text-sm tracking-widest uppercase mb-1">HQ Operations</h4>
                                <p class="text-on-surface/40 text-sm">Suite 4, 77 Lome Crescent Wuse Zone 7, FCT, Abuja.
</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-surface p-8 md:p-12 rounded-xl shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 blur-[80px]"></div>
                    <form class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="text-[10px] uppercase tracking-[0.2em] text-on-surface/40 font-bold">Full Name</label>
                                <input class="w-full bg-transparent border-0 border-b border-outline-variant/30 focus:border-primary focus:ring-0 text-sm py-2 transition-all" placeholder="Enter name..." type="text"/>
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] uppercase tracking-[0.2em] text-on-surface/40 font-bold">Media Outlet</label>
                                <input class="w-full bg-transparent border-0 border-b border-outline-variant/30 focus:border-primary focus:ring-0 text-sm py-2 transition-all" placeholder="e.g. Forbes" type="text"/>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] uppercase tracking-[0.2em] text-on-surface/40 font-bold">Nature of Inquiry</label>
                            <select class="w-full bg-transparent border-0 border-b border-outline-variant/30 focus:border-primary focus:ring-0 text-sm py-2 appearance-none">
                                <option class="bg-surface">Interview Request</option>
                                <option class="bg-surface">Feature/Editorial</option>
                                <option class="bg-surface">Asset Permission</option>
                                <option class="bg-surface">Event Appearance</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] uppercase tracking-[0.2em] text-on-surface/40 font-bold">Message</label>
                            <textarea class="w-full bg-transparent border-0 border-b border-outline-variant/30 focus:border-primary focus:ring-0 text-sm py-2 transition-all resize-none" placeholder="Brief details of your request..." rows="3"></textarea>
                        </div>
                        <button class="w-full liquid-gold-bg text-on-primary font-bold py-4 rounded uppercase tracking-widest text-xs shadow-lg shadow-primary/10 hover:shadow-primary/20 active:scale-[0.98] transition-all">
                            Send Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="bg-[#0e0e0e] w-full py-20">
    <div class="flex flex-col items-center gap-12 w-full px-6 md:px-24">
        <div class="text-4xl font-black text-[#131313] opacity-10 uppercase tracking-tighter brand-font">ILOGE</div>
        <div class="flex flex-wrap justify-center gap-x-12 gap-y-4 font-headline text-xs tracking-[0.2em] uppercase">
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline decoration-[#f1cc19]/30 underline-offset-8 transition-all duration-500" href="{{ url('/speaker') }}">Speaker</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline decoration-[#f1cc19]/30 underline-offset-8 transition-all duration-500" href="{{ url('/investor') }}">Investor</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline decoration-[#f1cc19]/30 underline-offset-8 transition-all duration-500" href="{{ url('/leader') }}">Leader</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline decoration-[#f1cc19]/30 underline-offset-8 transition-all duration-500" href="{{ url('/podcast') }}">Podcast</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline decoration-[#f1cc19]/30 underline-offset-8 transition-all duration-500" href="{{ url('/blog') }}">Blog</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline decoration-[#f1cc19]/30 underline-offset-8 transition-all duration-500" href="{{ url('/team') }}">Team</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline decoration-[#f1cc19]/30 underline-offset-8 transition-all duration-500" href="{{ url('/gallery') }}">Gallery</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] hover:underline decoration-[#f1cc19]/30 underline-offset-8 transition-all duration-500" href="{{ url('/testimonials') }}">Testimonials</a>
        </div>
        <div class="text-[10px] text-[#e5e2e1]/20 font-headline tracking-[0.3em] text-center max-w-2xl">
            &copy; 2026 Iloge. Designed &amp; developed by codewitheugene
        </div>
    </div>
</footer>
</body>
</html>
