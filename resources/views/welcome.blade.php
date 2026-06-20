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
                    colors: {
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
    </style>
</head>
<body class="bg-surface text-on-surface selection:bg-primary selection:text-on-primary">
<nav class="fixed top-0 z-50 w-full border-b border-white/5 bg-[#131313]/60 backdrop-blur-[30px] shadow-[0_40px_40px_-10px_rgba(229,226,225,0.05)]">
    <div class="relative mx-auto flex max-w-[1920px] items-center justify-between px-6 py-6 md:px-12">
        <a class="font-headline text-2xl font-black tracking-tighter text-[#f1cc19]" href="{{ url('/') }}">ILOGE</a>
        <div class="hidden items-center gap-8 font-headline text-sm uppercase tracking-tight xl:flex">
            <a class="border-b border-[#f1cc19] pb-1 text-[#f1cc19]" href="{{ url('/') }}">Home</a>
            <div class="group relative">
                <button class="inline-flex items-center gap-1 text-[#e5e2e1]/70 transition-colors duration-300 hover:text-[#f1cc19]" type="button">
                    About
                    <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                </button>
                <div class="invisible absolute left-0 top-full pt-5 opacity-0 transition-all duration-300 group-hover:visible group-hover:opacity-100 group-focus-within:visible group-focus-within:opacity-100">
                    <div class="min-w-48 rounded-lg border border-white/10 bg-[#131313]/95 py-3 shadow-2xl backdrop-blur-2xl">
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 transition-all hover:bg-white/5 hover:text-[#f1cc19]" href="{{ url('/speaker') }}">Speaker</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 transition-all hover:bg-white/5 hover:text-[#f1cc19]" href="{{ url('/investor') }}">Investor</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 transition-all hover:bg-white/5 hover:text-[#f1cc19]" href="{{ url('/leader') }}">Leader</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1]/70 transition-colors duration-300 hover:text-[#f1cc19]" href="{{ url('/pressroom') }}">Press Room</a>
            <div class="group relative">
                <button class="inline-flex items-center gap-1 text-[#e5e2e1]/70 transition-colors duration-300 hover:text-[#f1cc19]" type="button">
                    Diary of Iloge
                    <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                </button>
                <div class="invisible absolute left-0 top-full pt-5 opacity-0 transition-all duration-300 group-hover:visible group-hover:opacity-100 group-focus-within:visible group-focus-within:opacity-100">
                    <div class="min-w-56 rounded-lg border border-white/10 bg-[#131313]/95 py-3 shadow-2xl backdrop-blur-2xl">
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 transition-all hover:bg-white/5 hover:text-[#f1cc19]" href="{{ url('/podcast') }}">Podcast</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 transition-all hover:bg-white/5 hover:text-[#f1cc19]" href="{{ url('/blog') }}">Blog</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 transition-all hover:bg-white/5 hover:text-[#f1cc19]" href="{{ url('/team') }}">Team</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 transition-all hover:bg-white/5 hover:text-[#f1cc19]" href="{{ url('/gallery') }}">Gallery</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 transition-all hover:bg-white/5 hover:text-[#f1cc19]" href="{{ url('/testimonials') }}">Testimonials</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1]/70 transition-colors duration-300 hover:text-[#f1cc19]" href="{{ url('/shop') }}">Shop</a>
            <a class="text-[#e5e2e1]/70 transition-colors duration-300 hover:text-[#f1cc19]" href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <a class="liquid-gold rounded-md px-5 py-3 text-sm font-bold uppercase tracking-widest text-on-primary transition-transform active:scale-95 md:px-8" href="https://chat.whatsapp.com/ECXLJhKEDBA5bsT2ZWaqZR?mode=gi_t">
                Join Our Community
            </a>
            <details class="xl:hidden">
                <summary class="list-none cursor-pointer flex h-10 w-10 items-center justify-center rounded-md border border-white/10 bg-white/5 text-on-surface transition-all hover:bg-white/10 hover:text-primary [&::-webkit-details-marker]:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </summary>
                <div class="absolute right-6 top-full mt-3 w-[min(22rem,calc(100vw-3rem))] rounded-lg border border-white/10 bg-[#131313]/95 p-5 shadow-2xl backdrop-blur-2xl">
                    <div class="flex flex-col gap-1 font-headline text-sm uppercase tracking-widest">
                        <a class="py-3 text-[#f1cc19] transition-colors" href="{{ url('/') }}">Home</a>
                        <details class="border-t border-white/5 py-2">
                            <summary class="list-none cursor-pointer flex items-center justify-between py-3 text-[#e5e2e1]/80 hover:text-[#f1cc19] [&::-webkit-details-marker]:hidden">
                                About
                                <span class="material-symbols-outlined text-base">expand_more</span>
                            </summary>
                            <div class="flex flex-col pl-4 pb-2">
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/speaker') }}">Speaker</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/investor') }}">Investor</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/leader') }}">Leader</a>
                            </div>
                        </details>
                        <a class="border-t border-white/5 py-3 text-[#e5e2e1]/80 transition-colors hover:text-[#f1cc19]" href="{{ url('/pressroom') }}">Press Room</a>
                        <details class="border-t border-white/5 py-2">
                            <summary class="list-none cursor-pointer flex items-center justify-between py-3 text-[#e5e2e1]/80 hover:text-[#f1cc19] [&::-webkit-details-marker]:hidden">
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
                        <a class="border-t border-white/5 py-3 text-[#e5e2e1]/80 transition-colors hover:text-[#f1cc19]" href="{{ url('/shop') }}">Shop</a>
                        <a class="border-t border-white/5 py-3 text-[#e5e2e1]/80 transition-colors hover:text-[#f1cc19]" href="{{ url('/contact') }}">Contact</a>
                    </div>
                </div>
            </details>
        </div>
    </div>
</nav>

<main>
    <section class="relative flex min-h-screen items-center overflow-hidden bg-surface pt-24">
        <div class="pointer-events-none absolute inset-0 opacity-10" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC2oOa6dGDfisz1gmxP0twhOIeN41KoaH8h6qCLIRLTlMnMy8UNWTRdlci8uBVnW-mecP5EybW2EeSeXn0SmK2ubT_k6MlyVPbc-An13ppGO7dEHjaouDCzGgsdQqihQtEfoibKmHkp-_rAmVDfGmoV65XMZ7BnTxiXAWutW-RxEwrEnmNqQBd3Z11aHHJNRI7fSUFMbwcMci7meW6tSz987t1267egeTeiPJOlqSV-9bh81Brx4p9NTHOdk5DNjps5g5VvFP_TN9O_');"></div>
        <div class="absolute -top-[20%] -left-[10%] h-[80%] w-[60%] rounded-full bg-primary/5 blur-[120px]"></div>
        <div class="relative z-20 container mx-auto px-6 pb-12 md:px-12 md:pb-0">
            <div class="max-w-4xl">
                <h1 class="mb-8 text-5xl font-extrabold leading-[0.9] tracking-tighter text-on-surface sm:text-6xl md:text-8xl xl:text-9xl">
                    BUILDING THE <br/>
                    <span class="text-primary italic">FUTURE</span> THROUGH <br/>
                    INNOVATION
                </h1>
                <p class="mb-12 max-w-2xl text-lg font-light leading-relaxed text-on-surface-variant md:text-2xl">
                    Redefining global industry standards through architectural precision in strategy, leadership, and technological venture capitalism.
                </p>
                <div class="flex flex-col gap-6 md:flex-row">
                    <button class="liquid-gold rounded-lg px-10 py-5 text-lg font-bold uppercase tracking-widest text-on-primary shadow-2xl transition-all hover:brightness-110">
                        Book Me
                    </button>
                    <button class="rounded-lg border border-outline-variant/30 bg-surface-variant/20 px-10 py-5 text-lg font-bold uppercase tracking-widest text-on-surface backdrop-blur-xl transition-all hover:bg-surface-variant/40">
                        View Work
                    </button>
                </div>
            </div>
            <div class="relative mt-12 overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/5 shadow-[0_30px_80px_-30px_rgba(0,0,0,0.85)] md:hidden">
                <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/20 to-transparent"></div>
                <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-surface to-transparent"></div>
                <img alt="Hero portrait of Iloge" class="h-[26rem] w-full object-cover object-top opacity-95" src="{{ asset('images/hero-potrait.jpg') }}"/>
            </div>
        </div>
        <div class="pointer-events-none absolute bottom-0 right-0 hidden overflow-hidden md:block md:h-full md:w-1/2">
            <div class="absolute inset-0 z-10 bg-gradient-to-r from-surface via-transparent to-transparent"></div>
            <div class="absolute inset-0 z-10 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
            <img alt="Hero portrait of Iloge" class="h-full w-full object-cover object-center opacity-90 transition-all duration-1000" src="{{ asset('images/hero-potrait.jpg') }}"/>
        </div>
    </section>

    <section class="bg-surface-container-lowest py-16">
        <div class="container mx-auto px-6 md:px-12">
            <div class="flex flex-wrap items-center justify-between gap-12 opacity-30 grayscale transition-all duration-700 hover:grayscale-0">
                <img class="h-8 w-auto" data-alt="Minimalist grayscale corporate logo of a global technology leader" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdywdg1Zw1V3FLHjhZLH_hllQWp8v8B85AHJNKjbpOdBO2ULvpGodQb2zjsdkNqQvVZopR1nNAwV2VeNgyiJSbTkLjV4xOarrlmovdogftqEi1FnsbpSGaQ-bw7xdzIVaxv1AI1ktcPJO7yPCFZU3x915IEhK-pf01BWeVjUly7psvy6qPRwLNrj0awnlclJ2n4qaVTuvmzbPmbX1iILLWK9KXtAaugZ_VxavKDNmcnXWkhKw5n1nm2RSJ_TWXwo-n6vYkq8reVjEg"/>
                <img class="h-8 w-auto" data-alt="Minimalist grayscale corporate logo of a top-tier financial institution" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdIELMtdxhXQu3iN1LmkWnrdKxo__D_GmKBlmbA48WWFacsM8_otcTyMab_M-YphY71J0sgeihSF6Pp4dRKHUdFa_wu_H0atMSIIst1Gz9AWctoMd2JGWucbYmCyDugvFieVlJqYspu1-U2sC6A7W2wrNcMYX6Z8NQGvKHndppyZgSyh88HzzwLzyBVrNKKRk_wNqBoEojPdQSthzbGMoQBk1nBusDJmv678LtVGKtK0eIB0XWn3hBVHtFl3TmIZ-euRKniKTQZZq-"/>
                <img class="h-8 w-auto" data-alt="Minimalist grayscale corporate logo of a leading innovation firm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBavjVvSqjoh0zyZvx2-YQn30-V8QhIZp5VLCFKKKcXKEoX_vUXAc6e7Vr5tnFTglw3NkVHjuBzPEFfRcBBJVBhq1yE66cX_KJaX5hXqwQMxF3Fd1mhib6oreYNihqZJXS2rTjVSL-O0aES-AWuu0Tju4fkr5NgrlnlGHrGjNqkBhMLK9VTtxGQV_bTH1dN96nQAKv4rDH6d5EYKUW5OvJFinntTVOuF9drQWAfIHRRbfUgIR-GkDWk_xRfvE1EZKllOwRbePErFFF1"/>
                <img class="h-8 w-auto" data-alt="Minimalist grayscale corporate logo of an aerospace giant" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDLFvxrjOfpDwwzFyirQlZbnM0KW9wk_M1OvohaYtm1dwzOgc2WeE4cQWsVE8Bgqb7BpzZNkWtxaxGzhYVxhPMUmniimKU8XKDRUiXv0NxGkMEJFqRHCi91RL4-dzpUH0vxzy-nxqi58RKgM2t08n8WHdwoQ6jCF6N6msQJWW2GBIwaYsBjoOz6yFUcJDNOW5Q431odK0kQwIRbYfi8VSQku8R0StIsuXYXp9MxBa8FMJGASC80mAWDk7slMWygVaTPqna9tReDToX"/>
                <img class="h-8 w-auto" data-alt="Minimalist grayscale corporate logo of a luxury automotive brand" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVy58fmQHefevqxAqEtzXnO4RXV6xZknhx-EcgLBGGga4iiHWzMVpAz2d2F8B9c6TgqdeMineqifYVLkjsnMiPCA13mJLX8rpha9jvzeDUxUIC87v3ZuOiH6XZAub2N_cB5wI1UHiT-F3gMKpZWL2_7XiDJNkYt_I2oOGfBWG-XJdU3hSc2AnOtxqKmSeMhUqpIvyEcxHCFNBAtk9qdD4aw5fpoySHqBXMqFQRQ_k-y0MpkPZbfw5OkKOkOi9bs2qTjHoZsfbkIoii"/>
            </div>
        </div>
    </section>

    <section class="bg-surface py-24 md:py-32">
        <div class="container mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 items-center gap-16 md:grid-cols-2 md:gap-24">
                <div class="group relative">
                    <div class="absolute -inset-4 rounded-xl border border-outline-variant/20 transition-transform duration-500 group-hover:scale-105"></div>
                    <img class="relative z-10 aspect-[4/5] w-full rounded-lg object-cover shadow-2xl" data-alt="Professional high-end studio portrait of a visionary entrepreneur in a dark tailored suit, dramatic Rembrandt lighting, charcoal background" src="{{ asset('images/side-potrait.jpg') }}"/>
                    <div class="absolute -bottom-8 -right-8 h-48 w-48 rounded-full bg-primary/10 blur-3xl"></div>
                </div>
                <div>
                    <h2 class="mb-8 text-4xl font-extrabold uppercase tracking-tighter text-on-surface md:text-5xl">Sovereign Architect</h2>
                    <p class="mb-12 text-lg leading-relaxed text-on-surface-variant md:text-xl">
                        For over two decades, I have navigated the intersection of human psychology and digital infrastructure. My approach isn't just about growth; it's about building legacy frameworks that withstand the erosion of time and disruption.
                    </p>
                    <div class="grid grid-cols-2 gap-8 border-t border-outline-variant/20 pt-12">
                        <div>
                            <span class="block text-4xl font-black tracking-tighter text-primary">250+</span>
                            <span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Keynote Speeches</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-black tracking-tighter text-primary">$2B+</span>
                            <span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Portfolio Managed</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-black tracking-tighter text-primary">15</span>
                            <span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Exits Orchestrated</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-black tracking-tighter text-primary">45</span>
                            <span class="text-sm font-bold uppercase tracking-widest text-on-surface-variant">Global Patents</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-surface-container-low py-24 md:py-32">
        <div class="container mx-auto px-6 md:px-12">
            <div class="mb-16 text-center md:mb-20">
                <h2 class="mb-4 text-4xl font-extrabold uppercase tracking-tighter md:text-6xl">Strategic Impact</h2>
                <div class="mx-auto h-1 w-24 bg-primary"></div>
            </div>
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div class="group rounded-xl border border-outline-variant/10 bg-surface-variant/10 p-10 backdrop-blur-2xl transition-all hover:bg-surface-variant/20 md:p-12">
                    <div class="mb-8">
                        <span class="material-symbols-outlined text-5xl text-primary" style="font-variation-settings: 'FILL' 1;">mic</span>
                    </div>
                    <h3 class="mb-4 text-2xl font-bold uppercase tracking-tight text-on-surface">Keynote Speaking</h3>
                    <p class="mb-8 leading-relaxed text-on-surface-variant">
                        Onyekwelu Iloge is a dynamic keynote speaker who brings energy, clarity, and conviction to every
                        stage. He delivers powerful, audience-centred presentations that move people from inspiration to
                        action, tailored to your event, your theme, and your goals
                    </p>
                    <a class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-primary transition-all group-hover:gap-4" href="#">
                        Engage <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
                <div class="group rounded-xl border border-outline-variant/10 bg-surface-variant/10 p-10 backdrop-blur-2xl transition-all hover:bg-surface-variant/20 md:p-12">
                    <div class="mb-8">
                        <span class="material-symbols-outlined text-5xl text-primary" style="font-variation-settings: 'FILL' 1;">strategy</span>
                    </div>
                    <h3 class="mb-4 text-2xl font-bold uppercase tracking-tight text-on-surface">Executive Consulting</h3>
                    <p class="mb-8 leading-relaxed text-on-surface-variant">
                        Strategic Thinking. Proven Guidance. Measurable Growth.
                        Onyekwelu partners with senior leaders, founders, and decision-makers to sharpen focus, navigate
                        complexity, and drive organisational excellence. Direct, results-oriented, and rooted in real-world
                        experience.
                    </p>
                    <a class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-primary transition-all group-hover:gap-4" href="#">
                        Inquire <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
                <div class="group rounded-xl border border-outline-variant/10 bg-surface-variant/10 p-10 backdrop-blur-2xl transition-all hover:bg-surface-variant/20 md:p-12">
                    <div class="mb-8">
                        <span class="material-symbols-outlined text-5xl text-primary" style="font-variation-settings: 'FILL' 1;">school</span>
                    </div>
                    <h3 class="mb-4 text-2xl font-bold uppercase tracking-tight text-on-surface">Masterclass</h3>
                    <p class="mb-8 leading-relaxed text-on-surface-variant">
                        Deep Learning. Real Skills. Lasting Transformation.
                        Onyekwelu's masterclasses go beyond theory, delivering practical frameworks and actionable
                        strategies that professionals and teams can apply immediately. Tailored, immersive, and designed for
                        those serious about growth.

                    </p>
                    <a class="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-primary transition-all group-hover:gap-4" href="#">
                        Apply <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden py-24 md:py-32">
        <div class="absolute inset-0 bg-primary/5"></div>
        <div class="relative z-10 container mx-auto px-6 text-center md:px-12">
            <div class="mx-auto max-w-4xl">
                <h2 class="mb-8 text-5xl font-extrabold uppercase leading-none tracking-tighter md:text-7xl">Ready to <span class="text-primary italic">Innovate?</span></h2>
                <p class="mb-12 text-xl font-light text-on-surface-variant md:text-2xl">The architecture of tomorrow begins with a single strategic decision today. Let's build what others haven't dared to imagine.</p>
                <a class="liquid-gold inline-flex rounded-lg px-12 py-5 text-lg font-black uppercase tracking-[0.2em] text-on-primary shadow-[0_20px_50px_rgba(241,204,25,0.2)] transition-all hover:scale-105 md:px-16 md:py-6 md:text-xl" href="{{ url('/contact') }}">
                    Initiate Contact
                </a>
            </div>
        </div>
    </section>
</main>

<footer class="w-full bg-[#0e0e0e] py-12">
    <div class="mx-auto flex max-w-[1920px] flex-col items-center justify-between border-t border-[#4d4635]/15 px-6 pt-12 md:flex-row md:px-12">
        <div class="mb-8 md:mb-0">
            <span class="text-sm font-bold uppercase tracking-widest text-[#e5e2e1]">AURELIAN ONYX</span>
        </div>
        <div class="mb-8 flex flex-wrap justify-center gap-6 md:mb-0 md:gap-8">
            <a class="font-['Inter'] text-xs uppercase tracking-widest text-[#e5e2e1] opacity-40 transition-opacity hover:text-[#f1cc19] hover:opacity-100" href="#">Privacy Policy</a>
            <a class="font-['Inter'] text-xs uppercase tracking-widest text-[#e5e2e1] opacity-40 transition-opacity hover:text-[#f1cc19] hover:opacity-100" href="#">Terms of Service</a>
            <a class="font-['Inter'] text-xs uppercase tracking-widest text-[#e5e2e1] opacity-40 transition-opacity hover:text-[#f1cc19] hover:opacity-100" href="#">Press Kit</a>
            <a class="font-['Inter'] text-xs uppercase tracking-widest text-[#e5e2e1] opacity-40 transition-opacity hover:text-[#f1cc19] hover:opacity-100" href="#">Contact</a>
        </div>
        <div class="text-center font-['Inter'] text-xs uppercase tracking-widest text-[#e5e2e1] opacity-40">
            &copy; 2024 THE ARCHITECT OF SHADOWS. ALL RIGHTS RESERVED.
        </div>
    </div>
</footer>
</body>
</html>
