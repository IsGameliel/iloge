<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Speaker | ILOGE - The Voice of Innovation</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700;800&amp;family=Inter:wght@300;400;500&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-dim": "#131313",
                    "on-secondary": "#313030",
                    "surface-variant": "#353534",
                    "outline": "#99907c",
                    "surface-tint": "#e8c408",
                    "secondary-container": "#474746",
                    "primary-fixed": "#ffe16c",
                    "on-tertiary-fixed": "#221b00",
                    "error": "#ffb4ab",
                    "on-primary-container": "#524400",
                    "surface-bright": "#3a3939",
                    "on-surface": "#e5e2e1",
                    "background": "#131313",
                    "secondary-fixed-dim": "#c8c6c5",
                    "on-error-container": "#ffdad6",
                    "secondary": "#c8c6c5",
                    "tertiary-fixed": "#ffe16d",
                    "surface-container-low": "#1c1b1b",
                    "on-primary-fixed-variant": "#544600",
                    "surface-container": "#201f1f",
                    "primary-fixed-dim": "#e8c408",
                    "on-secondary-fixed-variant": "#474746",
                    "outline-variant": "#4d4635",
                    "on-background": "#e5e2e1",
                    "on-secondary-container": "#b7b5b4",
                    "inverse-primary": "#705d00",
                    "primary-container": "#d2b100",
                    "secondary-fixed": "#e5e2e1",
                    "inverse-surface": "#e5e2e1",
                    "surface-container-highest": "#353534",
                    "on-primary": "#3a3000",
                    "surface-container-lowest": "#0e0e0e",
                    "primary": "#f1cc19",
                    "on-surface-variant": "#d0c5af",
                    "tertiary-container": "#d2b100",
                    "on-tertiary-container": "#534400",
                    "on-tertiary": "#3a3000",
                    "error-container": "#93000a",
                    "tertiary": "#f2cc00",
                    "on-primary-fixed": "#221b00",
                    "surface": "#131313",
                    "on-secondary-fixed": "#1c1b1b",
                    "tertiary-fixed-dim": "#e9c400",
                    "surface-container-high": "#2a2a2a",
                    "on-error": "#690005",
                    "on-tertiary-fixed-variant": "#544600",
                    "inverse-on-surface": "#313030"
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
      .liquid-gold {
        background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%);
      }
      .glass-nav {
        background: rgba(19, 19, 19, 0.6);
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
<nav class="fixed top-0 w-full z-50 glass-nav shadow-[0_40px_-10px_rgba(229,226,225,0.05)]">
    <div class="relative flex justify-between items-center w-full px-6 md:px-12 h-20">
        <a class="text-2xl font-bold tracking-tighter text-[#f1cc19]" href="{{ url('/') }}">ILOGE</a>
        <div class="hidden xl:flex items-center space-x-8 font-headline tracking-tight text-sm uppercase">
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/') }}">Home</a>
            <div class="relative group">
                <button class="inline-flex items-center gap-1 text-[#f1cc19] border-b-2 border-[#f1cc19] pb-1 transition-colors duration-300" type="button">
                    About
                    <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                </button>
                <div class="absolute left-0 top-full pt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-300">
                    <div class="min-w-48 bg-[#131313]/95 backdrop-blur-2xl border border-white/10 rounded-lg shadow-2xl py-3">
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#f1cc19] bg-white/5 transition-all" href="{{ url('/speaker') }}">Speaker</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/investor') }}">Investor</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/leader') }}">Leader</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/pressroom') }}">Press Room</a>
            <div class="relative group">
                <button class="inline-flex items-center gap-1 text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" type="button">
                    Diary
                    <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                </button>
                <div class="absolute left-0 top-full pt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-300">
                    <div class="min-w-56 bg-[#131313]/95 backdrop-blur-2xl border border-white/10 rounded-lg shadow-2xl py-3">
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/podcast') }}">Podcast</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="#">Blog</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="#">Team</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="#">Gallery</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="#">Testimonials</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="#">Shop</a>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="#contact">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <a class="bg-[#f1cc19] text-[#3a3000] px-6 py-2 font-bold uppercase text-xs rounded-sm active:scale-95 transition-all" href="#contact">
                Inquire
            </a>
            <details class="xl:hidden">
                <summary class="list-none cursor-pointer flex h-10 w-10 items-center justify-center rounded-sm border border-white/10 bg-white/5 text-on-surface hover:text-primary hover:bg-white/10 transition-all [&::-webkit-details-marker]:hidden">
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
                                <a class="py-2 text-xs text-[#f1cc19]" href="{{ url('/speaker') }}">Speaker</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/investor') }}">Investor</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/leader') }}">Leader</a>
                            </div>
                        </details>
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="{{ url('/pressroom') }}">Press Room</a>
                        <details class="border-t border-white/5 py-2">
                            <summary class="list-none cursor-pointer flex items-center justify-between text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 [&::-webkit-details-marker]:hidden">
                                Diary
                                <span class="material-symbols-outlined text-base">expand_more</span>
                            </summary>
                            <div class="flex flex-col pl-4 pb-2">
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/podcast') }}">Podcast</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="#">Blog</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="#">Team</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="#">Gallery</a>
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="#">Testimonials</a>
                            </div>
                        </details>
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="#">Shop</a>
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="#contact">Contact</a>
                    </div>
                </div>
            </details>
        </div>
    </div>
</nav>

<section class="relative min-h-screen flex items-center overflow-hidden pt-20">
    <div class="absolute inset-0 z-0">
        <img alt="Portrait of Iloge" class="w-full h-full object-cover opacity-60" data-alt="High-contrast cinematic portrait of a visionary African entrepreneur in a dark designer suit, with golden rim lighting against a minimalist background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBU4jS3jJDq3gRwpasapVLZwl72OZ89_Q5E8sXCi-EmJ0Hww-pTyo1MsMxXm1fkKla9v-thPjNwnitXH5xP6F4m4MSVOqxYeJVDEgAt1LJyrLcL168ZdTX3x3yPXFf1KsUtRjxYQXadSKIZZS94OG32pWMxaFA3yU7s41vqKDi20qc5rwYYVzHCpCmGEfHE3bhPZMvDsu5NAwwqZ8xl9rEdrN3wiXOJeRD6scMO05B99Cqgw-m4GlfRfq6QZJ91ngFisZsN2OpvYh9c"/>
        <div class="absolute inset-0 bg-gradient-to-r from-background via-background/40 to-transparent"></div>
    </div>
    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <div class="max-w-3xl">
            <span class="text-primary font-headline tracking-[0.3em] uppercase text-sm mb-6 block">Speaker &amp; Innovator</span>
            <h1 class="text-6xl md:text-9xl font-extrabold text-on-surface tracking-tighter leading-none mb-8">
                The Voice of <br/> <span class="text-primary">Innovation</span>
            </h1>
            <p class="text-xl text-on-surface/70 font-light max-w-xl mb-12 leading-relaxed">
                Unlocking the nexus of architectural strategy and artificial intelligence to redefine the sovereign creative era.
            </p>
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-6">
                <button class="liquid-gold text-on-primary px-8 py-4 font-bold rounded-lg flex items-center justify-center gap-3 shadow-2xl hover:scale-105 transition-transform duration-300">
                    <span class="material-symbols-outlined">play_circle</span>
                    VIEW SPEAKING REEL
                </button>
                <button class="bg-surface-variant/20 backdrop-blur-xl border border-outline-variant/30 text-on-surface px-8 py-4 font-bold rounded-lg hover:bg-surface-variant/40 transition-all">
                    DOWNLOAD MEDIA KIT
                </button>
            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-surface-container-lowest">
    <div class="container mx-auto px-6 md:px-12">
        <div class="flex flex-col md:flex-row justify-between items-end mb-24 gap-8">
            <div class="max-w-2xl">
                <h2 class="text-5xl font-extrabold tracking-tighter mb-4">Signature <span class="text-primary">Keynotes</span></h2>
                <p class="text-on-surface/50 text-lg">World-class insights tailored for visionary leadership and global summits.</p>
            </div>
            <div class="h-[1px] flex-grow bg-outline-variant/20 mb-4 hidden md:block"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-surface-container-low p-10 rounded-xl hover:bg-surface-container-high transition-colors duration-500 relative overflow-hidden border-t border-surface-bright/20">
                <div class="text-primary mb-8">
                    <span class="material-symbols-outlined text-5xl">neurology</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 group-hover:text-primary transition-colors">The Future of AI</h3>
                <p class="text-on-surface/60 leading-relaxed">A deep dive into the symbiotic relationship between human intuition and machine intelligence in the next creative frontier.</p>
                <div class="mt-10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-2 text-primary text-sm font-bold tracking-widest">
                    EXPLORE TOPIC <span class="material-symbols-outlined text-xs">arrow_forward</span>
                </div>
            </div>
            <div class="group bg-surface-container-low p-10 rounded-xl hover:bg-surface-container-high transition-colors duration-500 relative overflow-hidden border-t border-surface-bright/20">
                <div class="text-primary mb-8">
                    <span class="material-symbols-outlined text-5xl">architecture</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 group-hover:text-primary transition-colors">Architectural Leadership</h3>
                <p class="text-on-surface/60 leading-relaxed">Designing organizations like skyscrapers: built to scale, resilient to storms, and aesthetically uncompromised.</p>
                <div class="mt-10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-2 text-primary text-sm font-bold tracking-widest">
                    EXPLORE TOPIC <span class="material-symbols-outlined text-xs">arrow_forward</span>
                </div>
            </div>
            <div class="group bg-surface-container-low p-10 rounded-xl hover:bg-surface-container-high transition-colors duration-500 relative overflow-hidden border-t border-surface-bright/20">
                <div class="text-primary mb-8">
                    <span class="material-symbols-outlined text-5xl">insights</span>
                </div>
                <h3 class="text-2xl font-bold mb-4 group-hover:text-primary transition-colors">Venture Strategy</h3>
                <p class="text-on-surface/60 leading-relaxed">Navigating the high-stakes landscape of global investment with an architectural mindset for exponential growth.</p>
                <div class="mt-10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-2 text-primary text-sm font-bold tracking-widest">
                    EXPLORE TOPIC <span class="material-symbols-outlined text-xs">arrow_forward</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-surface-dim border-y border-outline-variant/10">
    <div class="container mx-auto px-6 md:px-12">
        <h3 class="text-center text-on-surface/30 font-headline uppercase tracking-[0.5em] text-xs mb-16">Selected Global Stages</h3>
        <div class="flex flex-wrap justify-center items-center gap-16 md:gap-24 opacity-40 grayscale hover:grayscale-0 transition-all duration-700">
            <span class="text-4xl font-black font-headline tracking-tighter">TED</span>
            <span class="text-3xl font-bold font-headline">World Economic Forum</span>
            <span class="text-4xl font-extrabold font-headline">Web Summit</span>
            <span class="text-3xl font-bold font-headline">SXSW</span>
            <span class="text-4xl font-black font-headline">TechCrunch</span>
        </div>
    </div>
</section>

<section class="py-40 bg-background relative overflow-hidden">
    <div class="absolute -right-20 top-40 text-[15rem] font-black text-on-surface/[0.02] select-none leading-none">VOICE</div>
    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="space-y-12">
                <div class="border-l-4 border-primary pl-10">
                    <p class="text-3xl md:text-4xl font-light italic text-on-surface leading-tight mb-8">
                        "Iloge doesn't just speak about the future; he constructs it in the minds of the audience. A rare blend of technical mastery and narrative power."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-surface-container-high overflow-hidden">
                            <img alt="Executive Head" class="w-full h-full object-cover" data-alt="Professional headshot of a senior African tech executive in a modern corporate setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6KbTL3f6xZ0wYK4w-SAccOLH05VKpH0G5BSoXaHd5Iw2cy5lFFcxbero5BDB7mdtcMQZaJOfITz9HuNW7esSnKPkjrFA8DelBfjLVCMgEPITVoKbifjGjMbypTy7Y_NF_wdDlbsQiU04Fh8BH_ZSuQnnnqixm6PcZI7REtsCvd8LoM2QR2mtWSOH8_TCgFKBC81auQ5s56vvfCVBO6tS5OIu6cm8FM3uvlwNdDm_yRe5wTCfuQGvE0mMLDgHksJBgVGpmxR5efSFx"/>
                        </div>
                        <div>
                            <h4 class="font-bold text-on-surface">Marcus Thorne</h4>
                            <p class="text-primary text-xs uppercase tracking-widest">Director of Innovation, Global Summit</p>
                        </div>
                    </div>
                </div>
                <div class="border-l-4 border-outline-variant pl-10 opacity-60">
                    <p class="text-2xl font-light italic text-on-surface leading-tight mb-8">
                        "The session on Architectural Leadership transformed our board's approach to the upcoming decade. Profoundly impactful."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-surface-container-high overflow-hidden">
                            <img alt="CEO" class="w-full h-full object-cover" data-alt="Professional portrait of a female African CEO in a sophisticated minimalist studio environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwxa4H_w_NU6L4R2TeN4M_sVDK6P310cSU-1jj5N9phPx6rKHyfhzUfgaTlMmZ4o-cQ8xymcSaSm7P1y02NOQQ_KEPti9aZ8sCmCCFowYszPZXtQn06KoFCmRwpt-wR_3n9qGM2HCQ9T-O3I1ui-jLT--AbxIhENqF7Mv5XtHp-cql5MXHRw6UF02tCwdZTVsdSTGO8KNLhVTmrXbeer9ELS0iu_729PUkjXoiRVLmboP1mxR3cNYp1qccG0E8v8ULx8DrzFk2gl9B"/>
                        </div>
                        <div>
                            <h4 class="font-bold text-on-surface">Elena Rodriguez</h4>
                            <p class="text-on-surface/50 text-xs uppercase tracking-widest">CEO, Vertex Venture</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative hidden md:block">
                <div class="aspect-[4/5] bg-surface-container-low rounded-xl overflow-hidden shadow-2xl">
                    <img alt="Iloge on stage" class="w-full h-full object-cover opacity-80" data-alt="Realistic photograph of a professional speaker on a grand stage with dramatic golden stage lighting and a captive audience." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBU4jS3jJDq3gRwpasapVLZwl72OZ89_Q5E8sXCi-EmJ0Hww-pTyo1MsMxXm1fkKla9v-thPjNwnitXH5xP6F4m4MSVOqxYeJVDEgAt1LJyrLcL168ZdTX3x3yPXFf1KsUtRjxYQXadSKIZZS94OG32pWMxaFA3yU7s41vqKDi20qc5rwYYVzHCpCmGEfHE3bhPZMvDsu5NAwwqZ8xl9rEdrN3wiXOJeRD6scMO05B99Cqgw-m4GlfRfq6QZJ91ngFisZsN2OpvYh9c"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-transparent"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-32 bg-surface-container-lowest" id="contact">
    <div class="container mx-auto px-6 md:px-12">
        <div class="bg-surface-container-high rounded-2xl p-8 md:p-20 shadow-2xl relative overflow-hidden">
            <div class="absolute -top-24 -left-24 w-64 h-64 bg-primary/10 rounded-full blur-[100px]"></div>
            <div class="relative z-10 max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-5xl font-black tracking-tighter mb-6">Book an <span class="text-primary">Engagement</span></h2>
                <p class="text-on-surface/60 text-lg">Secure Iloge for your next summit, private event, or executive workshop.</p>
            </div>
            <form class="max-w-5xl mx-auto relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
                    <div class="space-y-8">
                        <div class="relative group">
                            <label class="text-xs uppercase tracking-[0.2em] text-on-surface/40 font-bold mb-2 block group-focus-within:text-primary transition-colors">Full Name</label>
                            <input class="w-full bg-transparent border-b border-outline-variant/30 py-4 focus:outline-none focus:border-primary text-lg transition-all placeholder:text-on-surface/10" placeholder="John Doe" type="text"/>
                        </div>
                        <div class="relative group">
                            <label class="text-xs uppercase tracking-[0.2em] text-on-surface/40 font-bold mb-2 block group-focus-within:text-primary transition-colors">Professional Email</label>
                            <input class="w-full bg-transparent border-b border-outline-variant/30 py-4 focus:outline-none focus:border-primary text-lg transition-all placeholder:text-on-surface/10" placeholder="john@company.com" type="email"/>
                        </div>
                    </div>
                    <div class="space-y-8">
                        <div class="relative group">
                            <label class="text-xs uppercase tracking-[0.2em] text-on-surface/40 font-bold mb-2 block group-focus-within:text-primary transition-colors">Event Details</label>
                            <textarea class="w-full bg-transparent border-b border-outline-variant/30 py-4 focus:outline-none focus:border-primary text-lg transition-all placeholder:text-on-surface/10 resize-none" placeholder="Briefly describe your event and preferred dates..." rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center justify-between gap-8 pt-8 border-t border-outline-variant/10">
                    <p class="text-on-surface/40 text-sm italic">Estimated response time: 24-48 hours</p>
                    <button class="liquid-gold text-on-primary w-full md:w-auto px-16 py-6 font-black uppercase tracking-widest rounded-lg shadow-xl hover:scale-[1.02] active:scale-95 transition-all" type="submit">
                        Send Inquiry
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<footer class="bg-[#0e0e0e] w-full py-16 px-6 md:px-12 tonal-shift-surface-container-lowest">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 max-w-7xl mx-auto">
        <div class="space-y-6">
            <div class="text-lg font-bold text-[#f1cc19]">ILOGE</div>
            <p class="font-body text-xs tracking-widest uppercase text-[#e5e2e1]/40 leading-loose">
                THE ARCHITECT OF <br/> SHADOWS &amp; LIGHT.
            </p>
        </div>
        <div class="space-y-4">
            <h4 class="font-body text-xs tracking-widest uppercase text-[#f1cc19]">Authority</h4>
            <ul class="space-y-2 font-body text-xs tracking-widest uppercase text-[#e5e2e1]/40">
                <li><a class="hover:text-[#f1cc19] underline-offset-4 hover:underline transition-all" href="{{ url('/speaker') }}">Speaker</a></li>
                <li><a class="hover:text-[#f1cc19] underline-offset-4 hover:underline transition-all" href="{{ url('/investor') }}">Investor</a></li>
                <li><a class="hover:text-[#f1cc19] underline-offset-4 hover:underline transition-all" href="{{ url('/leader') }}">Leader</a></li>
            </ul>
        </div>
        <div class="space-y-4">
            <h4 class="font-body text-xs tracking-widest uppercase text-[#f1cc19]">The Diary</h4>
            <ul class="space-y-2 font-body text-xs tracking-widest uppercase text-[#e5e2e1]/40">
                <li><a class="hover:text-[#f1cc19] underline-offset-4 hover:underline transition-all" href="{{ url('/podcast') }}">Podcast</a></li>
                <li><a class="hover:text-[#f1cc19] underline-offset-4 hover:underline transition-all" href="#">Blog</a></li>
                <li><a class="hover:text-[#f1cc19] underline-offset-4 hover:underline transition-all" href="#">Team</a></li>
            </ul>
        </div>
        <div class="space-y-4">
            <h4 class="font-body text-xs tracking-widest uppercase text-[#f1cc19]">Access</h4>
            <ul class="space-y-2 font-body text-xs tracking-widest uppercase text-[#e5e2e1]/40">
                <li><a class="hover:text-[#f1cc19] underline-offset-4 hover:underline transition-all" href="#">Gallery</a></li>
                <li><a class="hover:text-[#f1cc19] underline-offset-4 hover:underline transition-all" href="#">Testimonials</a></li>
                <li><a class="hover:text-[#f1cc19] underline-offset-4 hover:underline transition-all" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
        <div class="font-body text-xs tracking-widest uppercase text-[#e5e2e1]/40">
            &copy; 2024 ILOGE. ALL RIGHTS RESERVED.
        </div>
        <div class="flex gap-8 font-body text-xs tracking-widest uppercase text-[#e5e2e1]/40">
            <a class="hover:text-[#f1cc19]" href="#">Privacy</a>
            <a class="hover:text-[#f1cc19]" href="#">Legal</a>
        </div>
    </div>
</footer>
</body>
</html>
