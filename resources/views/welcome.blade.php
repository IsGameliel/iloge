<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ILOGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-dim": "#131313",
                        "secondary-fixed-dim": "#c8c6c5",
                        "background": "#131313",
                        "tertiary-fixed": "#ffe16d",
                        "tertiary-fixed-dim": "#e9c400",
                        "on-primary-fixed-variant": "#544600",
                        "on-tertiary-fixed": "#221b00",
                        "on-primary-container": "#524400",
                        "surface-variant": "#353534",
                        "secondary-fixed": "#e5e2e1",
                        "secondary-container": "#474746",
                        "error-container": "#93000a",
                        "on-secondary": "#313030",
                        "outline-variant": "#4d4635",
                        "on-error": "#690005",
                        "on-primary-fixed": "#221b00",
                        "on-tertiary-container": "#534400",
                        "tertiary": "#f2cc00",
                        "surface-container-lowest": "#0e0e0e",
                        "primary-fixed-dim": "#e8c408",
                        "surface-container": "#201f1f",
                        "on-tertiary-fixed-variant": "#544600",
                        "outline": "#99907c",
                        "surface-bright": "#3a3939",
                        "secondary": "#c8c6c5",
                        "inverse-on-surface": "#313030",
                        "on-error-container": "#ffdad6",
                        "tertiary-container": "#d2b100",
                        "on-surface-variant": "#d0c5af",
                        "primary-container": "#d2b100",
                        "on-secondary-container": "#b7b5b4",
                        "surface-tint": "#e8c408",
                        "surface-container-high": "#2a2a2a",
                        "primary": "#f1cc19",
                        "primary-fixed": "#ffe16c",
                        "on-tertiary": "#3a3000",
                        "surface-container-low": "#1c1b1b",
                        "surface-container-highest": "#353534",
                        "inverse-primary": "#705d00",
                        "surface": "#131313",
                        "on-surface": "#e5e2e1",
                        "on-secondary-fixed-variant": "#474746",
                        "inverse-surface": "#e5e2e1",
                        "on-secondary-fixed": "#1c1b1b",
                        "error": "#ffb4ab",
                        "on-primary": "#3a3000",
                        "on-background": "#e5e2e1"
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
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3 { font-family: 'Manrope', sans-serif; }
        .liquid-gold {
            background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%);
        }
        .tonal-shift {
            transition: background-color 0.3s ease;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        @keyframes subtle-zoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }
        .animate-subtle-zoom {
            animation: subtle-zoom 20s infinite alternate linear;
        }
        @keyframes slide-infinite {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-ticker {
            display: flex;
            width: 200%;
            animation: slide-infinite 40s linear infinite;
        }
    </style>
</head>
<body class="bg-surface text-on-surface selection:bg-primary selection:text-on-primary">
<nav class="fixed top-0 w-full z-50 bg-[#131313]/60 backdrop-blur-[30px] shadow-[0_40px_40px_-10px_rgba(229,226,225,0.05)] border-b border-white/5">
    <div class="relative flex justify-between items-center px-6 md:px-12 py-6 max-w-[1920px] mx-auto">
        <a class="text-2xl font-black tracking-tighter text-[#f1cc19] font-headline" href="{{ url('/') }}">ILOGE</a>
        <div class="hidden xl:flex items-center gap-8 font-headline tracking-tight text-sm uppercase">
            <a class="text-[#f1cc19] border-b border-[#f1cc19] pb-1" href="{{ url('/') }}">Home</a>
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
            <a class="liquid-gold text-on-primary font-headline font-bold px-5 md:px-8 py-3 rounded-md text-sm uppercase tracking-widest active:scale-95 transition-transform" href="#">
                Masterclass
            </a>
            <details class="xl:hidden">
                <summary class="list-none cursor-pointer flex h-10 w-10 items-center justify-center rounded-md border border-white/10 bg-white/5 text-on-surface hover:text-primary hover:bg-white/10 transition-all [&::-webkit-details-marker]:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </summary>
                <div class="absolute right-6 top-full mt-3 w-[min(22rem,calc(100vw-3rem))] bg-[#131313]/95 backdrop-blur-2xl border border-white/10 rounded-lg shadow-2xl p-5">
                    <div class="flex flex-col gap-1 font-headline text-sm uppercase tracking-widest">
                        <a class="text-[#f1cc19] py-3 transition-colors" href="{{ url('/') }}">Home</a>
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
    <section class="relative min-h-screen flex items-center pt-24 overflow-hidden bg-surface">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-black/40 z-10"></div>
            <img alt="Hero Background" class="object-cover w-full h-full grayscale brightness-50 opacity-40 animate-subtle-zoom" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTKYWHwpVbtV9VTAx-QfDHFhv-bvmQCoVYdPZlg396F3bOEIqawPcfqeihRQQDhb8uBZ-C8CGoz9HmlPbyM75_wIYhk0sNw63IwsmNoYZ-joOEIVWh83Ug2LeEvBKNx2lMhkd9qNomx-nTeEp3qFYkb_71mEiPnze45f3zG-uPutMrUr3DkMnyQVdh4r34cWEDj386HE7-BlWYuSbqsiA47xwhHLw6Q8XA19a9lT-38rjSMTO852WuK5fPrDrbR0e8hrf4zohifhv_"/>
            <div class="absolute inset-0 bg-gradient-to-r from-background via-transparent to-transparent z-20"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent z-20"></div>
        </div>
        <div class="absolute -top-[20%] -left-[10%] w-[60%] h-[80%] bg-primary/10 blur-[150px] rounded-full z-0"></div>
        <div class="container mx-auto px-6 md:px-12 z-30">
            <div class="max-w-5xl">
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-primary/10 backdrop-blur-md border border-primary/30 rounded-full mb-10 group cursor-default transition-all hover:bg-primary/20">
                    <span class="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="text-xs font-bold tracking-[0.2em] uppercase text-primary">Limited 2024 Strategy Openings Available</span>
                </div>
                <h1 class="text-6xl md:text-[11rem] font-black tracking-tighter leading-[0.85] mb-10 text-on-surface drop-shadow-2xl">
                    BUILDING THE <br/>
                    <span class="text-primary italic inline-block transform -skew-x-6">FUTURE</span> <br/>
                    THROUGH <br/>
                    <span class="relative">INNOVATION<span class="absolute -bottom-4 left-0 w-1/3 h-4 bg-primary/20 -z-10"></span></span>
                </h1>
                <p class="text-xl md:text-3xl text-on-surface/80 font-light mb-14 max-w-3xl leading-relaxed">
                    Redefining global industry standards through <span class="text-on-surface font-semibold border-b border-primary/30">architectural precision</span> in strategy, leadership, and technological venture capitalism.
                </p>
                <div class="flex flex-col md:flex-row gap-8 mb-16">
                    <button class="liquid-gold text-on-primary px-12 py-6 rounded-lg font-headline font-black uppercase tracking-[0.15em] text-xl shadow-[0_20px_60px_-10px_rgba(241,204,25,0.4)] hover:scale-105 active:scale-95 transition-all">
                        Book Me
                    </button>
                    <button class="bg-white/5 backdrop-blur-2xl border border-white/10 text-on-surface px-12 py-6 rounded-lg font-headline font-black uppercase tracking-[0.15em] text-xl hover:bg-white/10 transition-all">
                        View Work
                    </button>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full bg-surface-container/50 backdrop-blur-xl border-t border-white/5 py-4 overflow-hidden z-40">
            <div class="animate-ticker">
                <div class="flex items-center space-x-12 px-6">
                    <span class="flex items-center gap-4 text-xs font-bold tracking-widest uppercase text-on-surface/60"><span class="text-primary">01</span> Global Summit Keynote Announced</span>
                    <span class="h-1 w-1 rounded-full bg-white/20"></span>
                    <span class="flex items-center gap-4 text-xs font-bold tracking-widest uppercase text-on-surface/60"><span class="text-primary">02</span> New Portfolio High: $2.4B AUM</span>
                    <span class="h-1 w-1 rounded-full bg-white/20"></span>
                    <span class="flex items-center gap-4 text-xs font-bold tracking-widest uppercase text-on-surface/60"><span class="text-primary">03</span> Venture Capital Masterclass Series Live</span>
                    <span class="h-1 w-1 rounded-full bg-white/20"></span>
                    <span class="flex items-center gap-4 text-xs font-bold tracking-widest uppercase text-on-surface/60"><span class="text-primary">04</span> Architectural Precision in Web3 Markets</span>
                </div>
                <div class="flex items-center space-x-12 px-6">
                    <span class="flex items-center gap-4 text-xs font-bold tracking-widest uppercase text-on-surface/60"><span class="text-primary">01</span> Global Summit Keynote Announced</span>
                    <span class="h-1 w-1 rounded-full bg-white/20"></span>
                    <span class="flex items-center gap-4 text-xs font-bold tracking-widest uppercase text-on-surface/60"><span class="text-primary">02</span> New Portfolio High: $2.4B AUM</span>
                    <span class="h-1 w-1 rounded-full bg-white/20"></span>
                    <span class="flex items-center gap-4 text-xs font-bold tracking-widest uppercase text-on-surface/60"><span class="text-primary">03</span> Venture Capital Masterclass Series Live</span>
                    <span class="h-1 w-1 rounded-full bg-white/20"></span>
                    <span class="flex items-center gap-4 text-xs font-bold tracking-widest uppercase text-on-surface/60"><span class="text-primary">04</span> Architectural Precision in Web3 Markets</span>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-surface-container-lowest py-20">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-wrap justify-between items-center gap-12 opacity-80 grayscale hover:grayscale-0 transition-all duration-700">
                <img class="h-8 w-auto brightness-150" alt="Minimalist grayscale corporate logo of a global technology leader" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdywdg1Zw1V3FLHjhZLH_hllQWp8v8B85AHJNKjbpOdBO2ULvpGodQb2zjsdkNqQvVZopR1nNAwV2VeNgyiJSbTkLjV4xOarrlmovdogftqEi1FnsbpSGaQ-bw7xdzIVaxv1AI1ktcPJO7yPCFZU3x915IEhK-pf01BWeVjUly7psvy6qPRwLNrj0awnlclJ2n4qaVTuvmzbPmbX1iILLWK9KXtAaugZ_VxavKDNmcnXWkhKw5n1nm2RSJ_TWXwo-n6vYkq8reVjEg"/>
                <img class="h-8 w-auto brightness-150" alt="Minimalist grayscale corporate logo of a top-tier financial institution" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdIELMtdxhXQu3iN1LmkWnrdKxo__D_GmKBlmbA48WWFacsM8_otcTyMab_M-YphY71J0sgeihSF6Pp4dRKHUdFa_wu_H0atMSIIst1Gz9AWctoMd2JGWucbYmCyDugvFieVlJqYspu1-U2sC6A7W2wrNcMYX6Z8NQGvKHndppyZgSyh88HzzwLzyBVrNKKRk_wNqBoEojPdQSthzbGMoQBk1nBusDJmv678LtVGKtK0eIB0XWn3hBVHtFl3TmIZ-euRKniKTQZZq-"/>
                <img class="h-8 w-auto brightness-150" alt="Minimalist grayscale corporate logo of a leading innovation firm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBavjVvSqjoh0zyZvx2-YQn30-V8QhIZp5VLCFKKKcXKEoX_vUXAc6e7Vr5tnFTglw3NkVHjuBzPEFfRcBBJVBhq1yE66cX_KJaX5hXqwQMxF3Fd1mhib6oreYNihqZJXS2rTjVSL-O0aES-AWuu0Tju4fkr5NgrlnlGHrGjNqkBhMLK9VTtxGQV_bTH1dN96nQAKv4rDH6d5EYKUW5OvJFinntTVOuF9drQWAfIHRRbfUgIR-GkDWk_xRfvE1EZKllOwRbePErFFF1"/>
                <img class="h-8 w-auto brightness-150" alt="Minimalist grayscale corporate logo of an aerospace giant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDLFvxrjOfpDwwzFyirQlZbnM0KW9wk_M1OvohaYtm1dwzOgc2WeE4cQWsVE8Bgqb7BpzZNkWtxaxGzhYVxhPMUmniimKU8XKDRUiXv0NxGkMEJFqRHCi91RL4-dzpUH0vxzy-nxqi58RKgM2t08n8WHdwoQ6jCF6N6msQJWW2GBIwaYsBjoOz6yFUcJDNOW5Q431odK0kQwIRbYfi8VSQku8R0StIsuXYXp9MxBa8FMJGASC80mAWDk7slMWygVaTPqna9tReDToX"/>
                <img class="h-8 w-auto brightness-150" alt="Minimalist grayscale corporate logo of a luxury automotive brand" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVy58fmQHefevqxAqEtzXnO4RXV6xZknhx-EcgLBGGga4iiHWzMVpAz2d2F8B9c6TgqdeMineqifYVLkjsnMiPCA13mJLX8rpha9jvzeDUxUIC87v3ZuOiH6XZAub2N_cB5wI1UHiT-F3gMKpZWL2_7XiDJNkYt_I2oOGfBWG-XJdU3hSc2AnOtxqKmSeMhUqpIvyEcxHCFNBAtk9qdD4aw5fpoySHqBXMqFQRQ_k-y0MpkPZbfw5OkKOkOi9bs2qTjHoZsfbkIoii"/>
            </div>
        </div>
    </section>

    <section class="py-32 bg-surface">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-24 items-center">
                <div class="relative group">
                    <div class="absolute -inset-4 border border-outline-variant/20 rounded-xl transition-transform group-hover:scale-105 duration-500"></div>
                    <img class="w-full aspect-[4/5] object-cover rounded-lg shadow-2xl relative z-10" alt="Professional portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqrR84iqt4NnxVe2oVSkM6_yhTlt153vqxQpLdYKbsenLUG3vmOECAK-TxgEHKj0R5OhpMW1lPDOZH5bhYTOGeHwHQdfHIZV2l3AkHX1DlRF8F97hXkMadl3T48wamQA-iIK98h1y36WIFKV5LK-nhfQhjQUgxQMZzLUZD-SP_VIiPGeBgGoWfMyL2iYRdgwApzu3ccskuJEgyAn6skFwTNBbh-q503PhupR5zM7awXB-v4W6-F3OIPwG0RgvepTkBvI_xNwQmKWf9"/>
                    <div class="absolute -bottom-8 -right-8 w-48 h-48 bg-primary/10 blur-3xl rounded-full"></div>
                </div>
                <div>
                    <h2 class="text-5xl font-extrabold tracking-tighter mb-8 uppercase text-on-surface">Sovereign Architect</h2>
                    <p class="text-xl text-on-surface leading-relaxed mb-12">
                        For over two decades, I have navigated the intersection of human psychology and digital infrastructure. My approach isn't just about growth; it's about building legacy frameworks that withstand the erosion of time and disruption.
                    </p>
                    <div class="grid grid-cols-2 gap-8 border-t border-outline-variant/20 pt-12">
                        <div>
                            <span class="block text-4xl font-black text-primary tracking-tighter">250+</span>
                            <span class="text-sm uppercase tracking-widest text-primary font-bold">Keynote Speeches</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-black text-primary tracking-tighter">$2B+</span>
                            <span class="text-sm uppercase tracking-widest text-primary font-bold">Portfolio Managed</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-black text-primary tracking-tighter">15</span>
                            <span class="text-sm uppercase tracking-widest text-primary font-bold">Exits Orchestrated</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-black text-primary tracking-tighter">45</span>
                            <span class="text-sm uppercase tracking-widest text-primary font-bold">Global Patents</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-surface-container-low">
        <div class="container mx-auto px-6 md:px-12">
            <div class="mb-20 text-center">
                <h2 class="text-6xl font-extrabold tracking-tighter mb-4 uppercase">Strategic Impact</h2>
                <div class="h-1 w-24 bg-primary mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-surface-variant/10 backdrop-blur-2xl border border-outline-variant/10 p-12 rounded-xl hover:bg-surface-variant/20 transition-all group">
                    <div class="mb-8">
                        <span class="material-symbols-outlined text-5xl text-primary" style="font-variation-settings: 'FILL' 1;">mic</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-on-surface uppercase tracking-tight">Keynote Speaking</h3>
                    <p class="text-on-surface-variant mb-8 leading-relaxed">
                        Transcending standard presentations to deliver cognitive shifts. Architecting narratives that inspire global leadership teams to pivot toward the future.
                    </p>
                    <a class="inline-flex items-center text-primary font-bold tracking-widest uppercase text-sm group-hover:gap-4 gap-2 transition-all" href="#">
                        Engage <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
                <div class="bg-surface-variant/10 backdrop-blur-2xl border border-outline-variant/10 p-12 rounded-xl hover:bg-surface-variant/20 transition-all group">
                    <div class="mb-8">
                        <span class="material-symbols-outlined text-5xl text-primary" style="font-variation-settings: 'FILL' 1;">strategy</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-on-surface uppercase tracking-tight">Executive Consulting</h3>
                    <p class="text-on-surface-variant mb-8 leading-relaxed">
                        Bespoke strategic interventions for C-Suite executives. Radical honesty paired with data-driven architecture to solve systemic enterprise friction.
                    </p>
                    <a class="inline-flex items-center text-primary font-bold tracking-widest uppercase text-sm group-hover:gap-4 gap-2 transition-all" href="#">
                        Inquire <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
                <div class="bg-surface-variant/10 backdrop-blur-2xl border border-outline-variant/10 p-12 rounded-xl hover:bg-surface-variant/20 transition-all group">
                    <div class="mb-8">
                        <span class="material-symbols-outlined text-5xl text-primary" style="font-variation-settings: 'FILL' 1;">school</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-on-surface uppercase tracking-tight">Masterclass</h3>
                    <p class="text-on-surface-variant mb-8 leading-relaxed">
                        Elite cognitive training for high-performance innovators. Mastering the art of shadow architecture and strategic dominance in volatile markets.
                    </p>
                    <a class="inline-flex items-center text-primary font-bold tracking-widest uppercase text-sm group-hover:gap-4 gap-2 transition-all" href="#">
                        Apply <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 relative overflow-hidden">
        <div class="absolute inset-0 bg-primary/5"></div>
        <div class="container mx-auto px-6 md:px-12 relative z-10 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-6xl md:text-7xl font-extrabold tracking-tighter mb-8 uppercase leading-none">Ready to <span class="text-primary italic">Innovate?</span></h2>
                <p class="text-2xl text-on-surface-variant mb-12 font-light">The architecture of tomorrow begins with a single strategic decision today. Let's build what others haven't dared to imagine.</p>
                <button class="liquid-gold text-on-primary px-16 py-6 rounded-lg font-headline font-black uppercase tracking-[0.2em] text-xl shadow-[0_20px_50px_rgba(241,204,25,0.2)] hover:scale-105 transition-all">
                    Initiate Contact
                </button>
            </div>
        </div>
    </section>
</main>

<footer class="bg-[#0e0e0e] w-full py-12">
    <div class="flex flex-col md:flex-row justify-between items-center px-6 md:px-12 border-t border-[#4d4635]/15 pt-12 max-w-[1920px] mx-auto">
        <div class="mb-8 md:mb-0">
            <span class="text-sm font-bold text-[#e5e2e1] tracking-widest uppercase">AURELIAN ONYX</span>
        </div>
        <div class="flex flex-wrap justify-center gap-8 mb-8 md:mb-0">
            <a class="font-['Inter'] text-xs tracking-widest uppercase text-[#e5e2e1] opacity-40 hover:text-[#f1cc19] hover:opacity-100 transition-opacity" href="#">Privacy Policy</a>
            <a class="font-['Inter'] text-xs tracking-widest uppercase text-[#e5e2e1] opacity-40 hover:text-[#f1cc19] hover:opacity-100 transition-opacity" href="#">Terms of Service</a>
            <a class="font-['Inter'] text-xs tracking-widest uppercase text-[#e5e2e1] opacity-40 hover:text-[#f1cc19] hover:opacity-100 transition-opacity" href="#">Press Kit</a>
            <a class="font-['Inter'] text-xs tracking-widest uppercase text-[#e5e2e1] opacity-40 hover:text-[#f1cc19] hover:opacity-100 transition-opacity" href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="font-['Inter'] text-xs tracking-widest uppercase text-[#e5e2e1] opacity-40 text-center">
            &copy; 2026 Iloge. Designed &amp; developed by codewitheugene
        </div>
    </div>
</footer>
</body>
</html>
