<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>The Voice of Authority | ILOGE</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700;800&amp;family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-fixed-dim": "#e9c400",
                        "surface-container-high": "#2a2a2a",
                        "primary": "#f1cc19",
                        "inverse-on-surface": "#313030",
                        "tertiary-fixed": "#ffe16d",
                        "on-primary": "#3a3000",
                        "inverse-primary": "#705d00",
                        "on-secondary": "#313030",
                        "surface-dim": "#131313",
                        "surface-tint": "#e8c408",
                        "on-background": "#e5e2e1",
                        "surface": "#131313",
                        "on-error-container": "#ffdad6",
                        "on-primary-fixed-variant": "#544600",
                        "on-tertiary": "#3a3000",
                        "error": "#ffb4ab",
                        "on-surface": "#e5e2e1",
                        "primary-fixed-dim": "#e8c408",
                        "on-primary-fixed": "#221b00",
                        "tertiary": "#f2cc00",
                        "background": "#131313",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-tertiary-fixed": "#221b00",
                        "on-tertiary-container": "#534400",
                        "surface-container-highest": "#353534",
                        "surface-container-lowest": "#0e0e0e",
                        "primary-fixed": "#ffe16c",
                        "on-primary-container": "#524400",
                        "on-secondary-container": "#b7b5b4",
                        "surface-container-low": "#1c1b1b",
                        "on-tertiary-fixed-variant": "#544600",
                        "on-secondary-fixed": "#1c1b1b",
                        "surface-bright": "#3a3939",
                        "tertiary-container": "#d2b100",
                        "surface-container": "#201f1f",
                        "outline": "#99907c",
                        "inverse-surface": "#e5e2e1",
                        "on-surface-variant": "#d0c5af",
                        "primary-container": "#d2b100",
                        "surface-variant": "#353534",
                        "secondary-container": "#474746",
                        "on-secondary-fixed-variant": "#474746",
                        "outline-variant": "#4d4635",
                        "secondary-fixed": "#e5e2e1",
                        "secondary": "#c8c6c5"
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
        .liquid-gold {
            background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .rim-light {
            box-shadow: inset 0.5px 0.5px 0px 0px rgba(58, 57, 57, 0.5);
        }
        .glow-shadow {
            box-shadow: 0 40px 40px -10px rgba(229, 226, 225, 0.05);
        }
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
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/blog') }}">Blog</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/team') }}">Team</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/gallery') }}">Gallery</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#f1cc19] bg-white/5 transition-all" href="{{ url('/testimonials') }}">Testimonials</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/shop') }}">Shop</a>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <a class="liquid-gold text-on-primary px-6 py-2 rounded-md font-headline font-bold uppercase tracking-tight transition-all active:scale-95 duration-200" href="#briefing">
                Request Briefing
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
                                <a class="py-2 text-xs text-[#e5e2e1]/60 hover:text-[#f1cc19]" href="{{ url('/gallery') }}">Gallery</a>
                                <a class="py-2 text-xs text-[#f1cc19]" href="{{ url('/testimonials') }}">Testimonials</a>
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

<aside class="hidden lg:flex fixed left-0 top-[89px] h-[calc(100vh-89px)] w-64 bg-[#0e0e0e] flex-col gap-8 p-8 z-40 shadow-2xl shadow-black/50 border-r border-white/5">
    <div>
        <div class="text-xl font-black text-zinc-100 font-headline">ILOGE</div>
        <div class="text-zinc-500 text-xs font-headline uppercase tracking-widest mt-1">The Architect of Shadows</div>
    </div>
    <nav class="flex flex-col gap-2 mt-4">
        <a class="bg-gradient-to-br from-[#f1cc19] to-[#d2b100] text-zinc-900 rounded-md font-bold px-4 py-3 flex items-center gap-3 font-headline text-sm tracking-wide" href="#stories">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">verified</span>
            Endorsements
        </a>
        <a class="text-zinc-500 hover:bg-zinc-800/50 px-4 py-3 rounded-md transition-all flex items-center gap-3 font-headline text-sm tracking-wide hover:translate-x-1 duration-200" href="#artifacts">
            <span class="material-symbols-outlined">trending_up</span>
            Metrics
        </a>
        <a class="text-zinc-500 hover:bg-zinc-800/50 px-4 py-3 rounded-md transition-all flex items-center gap-3 font-headline text-sm tracking-wide hover:translate-x-1 duration-200" href="#briefing">
            <span class="material-symbols-outlined">calendar_today</span>
            Briefings
        </a>
        <a class="text-zinc-500 hover:bg-zinc-800/50 px-4 py-3 rounded-md transition-all flex items-center gap-3 font-headline text-sm tracking-wide hover:translate-x-1 duration-200" href="#briefing">
            <span class="material-symbols-outlined">mail</span>
            Contact
        </a>
    </nav>
    <div class="mt-auto">
        <a class="w-full py-4 border border-outline-variant/30 text-on-surface font-headline font-bold text-xs uppercase tracking-widest hover:bg-surface-container-high transition-colors rounded-md inline-flex justify-center" href="#briefing">
            Join Masterclass
        </a>
    </div>
</aside>

<main class="lg:pl-64">
    <section class="relative min-h-[921px] flex items-center justify-start px-6 md:px-12 overflow-hidden pt-24">
        <div class="absolute inset-0 z-0">
            <img alt="Dramatic low angle shot of a modern glass skyscraper reflecting a dark stormy sky with golden sunset highlights on the edges" class="w-full h-full object-cover opacity-40 mix-blend-luminosity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlz9hOS7XFAhmUmvrUPfdNA2SQyLGg2OlaG-ypU_fcNsoKG0TdIblE515BBY_eT6VCDisqXd0Qrv-wPgNpZMXE75pPJZTSvhMEacE5yYqaGkyotc9-7EB0dje-WFCrJ-hZmpTukvQEHz2Ud5l0eJuN3BaKa-fEVTLd4THlbLxoydmAWz-bUi83UIsxtfEG7UBY9U5g84gv9CpQFb1HH4KrajUeMSS219LgoBr4obFSTBC27iyv1nwsGobM7pUkII7OZPcb1kBpaUA7"/>
            <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-4xl pt-20">
            <span class="inline-block px-4 py-1 bg-primary/10 text-primary font-headline text-xs font-bold tracking-[0.3em] uppercase mb-6">Testimonials</span>
            <h1 class="text-6xl md:text-8xl font-headline font-extrabold tracking-tighter leading-[0.9] text-on-surface mb-8">
                The Voice of <br/><span class="text-transparent bg-clip-text liquid-gold">Authority.</span>
            </h1>
            <p class="text-xl md:text-2xl text-on-surface-variant font-light max-w-2xl leading-relaxed mb-10">
                When the world's most influential leaders need to navigate the shadows of industry, they turn to one architect. Discover the impact of ILOGE.
            </p>
            <div class="flex flex-col sm:flex-row gap-6">
                <a class="liquid-gold text-on-primary px-8 md:px-10 py-5 rounded-md font-headline font-black uppercase tracking-widest text-sm glow-shadow hover:scale-105 transition-transform text-center" href="#stories">
                    Explore Success Stories
                </a>
                <a class="px-8 md:px-10 py-5 border border-outline-variant/30 text-on-surface font-headline font-black uppercase tracking-widest text-sm hover:bg-surface-container-high transition-colors rounded-md text-center" href="#artifacts">
                    The Philosophy
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-surface-container-lowest px-6 md:px-12">
        <div class="flex flex-wrap justify-between items-center gap-12 opacity-40 grayscale hover:grayscale-0 transition-all duration-700">
            <div class="text-2xl font-headline font-bold text-on-surface-variant tracking-tighter">FORBES</div>
            <div class="text-2xl font-headline font-bold text-on-surface-variant tracking-tighter">BLOOMBERG</div>
            <div class="text-2xl font-headline font-bold text-on-surface-variant tracking-tighter">WSJ</div>
            <div class="text-2xl font-headline font-bold text-on-surface-variant tracking-tighter">WIRED</div>
            <div class="text-2xl font-headline font-bold text-on-surface-variant tracking-tighter">FINANCIAL TIMES</div>
        </div>
    </section>

    <section class="py-24 md:py-32 px-6 md:px-12 bg-surface" id="stories">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <article class="md:col-span-8 bg-surface-container-low p-8 md:p-12 rounded-xl rim-light group cursor-default">
                <div class="flex flex-col md:flex-row gap-12 items-start">
                    <img alt="Close-up portrait of a confident African male CEO in a charcoal suit, sharp lighting, neutral background, editorial style" class="w-full md:w-48 h-72 md:h-64 object-cover rounded-lg grayscale group-hover:grayscale-0 transition-all duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAvS4ZrNgpwf10I96U7DqHsyG3KEoL3iAFk9btHPxLPhQtGgZxW8V8_iWBMnZwkdL3oQa3DBTpkBNQpxlZMUAmu7tkJc-6QMPWPcfVrX2LUD1dzVLb_acKjQgJHywWKv25ekkX-mOsPCDrHS9pm8a4TQCYGmt66Aqz2P9KWg4lIlQ6F1kebIRTUJD9u42-b77TiF5CKYY_4_OROS9mSmbANSI-frk1t4TkBRd18xqjCbPguQv0mL6FXD_paJH1nUl6mQ9tsN91X0IcD"/>
                    <div>
                        <span class="material-symbols-outlined text-primary text-5xl mb-6" style="font-variation-settings: 'FILL' 1;">format_quote</span>
                        <h2 class="text-2xl md:text-3xl font-headline font-bold mb-6 italic leading-snug">
                            "ILOGE doesn't just consult; they redefine the battlefield. Our expansion into pan-African markets was executed with a precision I've never seen in thirty years of corporate leadership."
                        </h2>
                        <div>
                            <p class="font-headline font-extrabold text-on-surface text-lg">Kofi Mensah</p>
                            <p class="text-primary text-sm font-headline tracking-widest uppercase font-semibold">Group Chairman, Zenith Holdings</p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="md:col-span-4 bg-surface-container-high p-8 md:p-12 rounded-xl rim-light flex flex-col justify-between">
                <div>
                    <span class="material-symbols-outlined text-primary text-5xl mb-6">format_quote</span>
                    <p class="text-xl font-body text-on-surface-variant italic leading-relaxed mb-8">
                        "The strategic depth provided during our merger was the difference between a deal and a legacy."
                    </p>
                </div>
                <div>
                    <p class="font-headline font-extrabold text-on-surface">Elena Rodriguez</p>
                    <p class="text-primary text-xs font-headline tracking-widest uppercase font-semibold">CEO, NexGen Ventures</p>
                </div>
            </article>

            <article class="md:col-span-4 bg-primary text-on-primary p-8 md:p-12 rounded-xl flex flex-col justify-center items-center text-center">
                <h2 class="text-6xl font-headline font-black mb-2 tracking-tighter">240%</h2>
                <p class="text-sm font-headline font-bold uppercase tracking-widest">ROI in 18 Months</p>
                <div class="w-12 h-px bg-on-primary/30 my-6"></div>
                <p class="text-sm opacity-80 max-w-[200px]">Average performance increase across legacy client portfolios.</p>
            </article>

            <article class="md:col-span-8 bg-surface-container-low p-8 md:p-12 rounded-xl rim-light group">
                <div class="flex flex-col md:flex-row-reverse gap-12 items-start">
                    <img alt="Elegant African female executive in a minimalist modern office, professional lighting, corporate leadership aesthetic" class="w-full md:w-48 h-72 md:h-64 object-cover rounded-lg grayscale group-hover:grayscale-0 transition-all duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJMal6EesStfhoOUWiQ_DkoEt7LvuUofI3bkrrbPgDf3QY9zAAi3H4fAnvS5VZ7siSPCenn0twKyUm8IJRPw8AZAkTsXvWrCPA9A2DgTl96AoUpyLvBVet7HLoF5xSzjAcn1xqdVnf4-Vc2Xp7u71h94gojktqbA4aFVZGbZeDwuoi48qJDfKgRDXU9L74AHvXga9vX6C-qCt4Ru8OYYrmB6UHABzCOMoG6ZZE3nzG2JCOW6wS0RIo9XrYgVMPpjU7RP6NTozn5zP7"/>
                    <div class="md:text-right">
                        <span class="material-symbols-outlined text-primary text-5xl mb-6" style="font-variation-settings: 'FILL' 1;">format_quote</span>
                        <h2 class="text-2xl md:text-3xl font-headline font-bold mb-6 italic leading-snug">
                            "The level of discretion and high-level architectural thinking provided by ILOGE is unparalleled in the global tech ecosystem. They are the silent partners of every successful pivot we've made."
                        </h2>
                        <div>
                            <p class="font-headline font-extrabold text-on-surface text-lg">Amara Okafor</p>
                            <p class="text-primary text-sm font-headline tracking-widest uppercase font-semibold">Founder, Synapse AI</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="py-24 bg-surface-container-lowest px-6 md:px-12 overflow-hidden" id="artifacts">
        <div class="flex flex-col md:flex-row gap-12 justify-between items-start md:items-end border-l-2 border-primary/20 pl-8 md:pl-12">
            <div class="max-w-xl">
                <h2 class="text-5xl font-headline font-bold tracking-tighter mb-6">Strategic Artifacts</h2>
                <p class="text-on-surface-variant text-lg leading-relaxed">
                    We don't deal in promises. We deal in iron-clad results. Every engagement is a calculated maneuver toward absolute market dominance.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-10 md:gap-16 pb-2">
                <div>
                    <div class="text-4xl font-headline font-black text-primary">$4.2B</div>
                    <div class="text-xs font-headline uppercase tracking-[0.2em] text-zinc-500 mt-2">Assets Optimized</div>
                </div>
                <div>
                    <div class="text-4xl font-headline font-black text-primary">12</div>
                    <div class="text-xs font-headline uppercase tracking-[0.2em] text-zinc-500 mt-2">Global Markets</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 md:py-40 px-6 md:px-12 relative overflow-hidden bg-surface" id="briefing">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-primary/5 blur-[120px] rounded-full translate-x-1/2"></div>
        <div class="relative z-10 text-center max-w-4xl mx-auto">
            <h2 class="text-5xl md:text-7xl font-headline font-extrabold tracking-tighter mb-8 leading-tight">
                Are You Ready to Join the <span class="text-primary italic">Inner Circle?</span>
            </h2>
            <p class="text-xl text-on-surface-variant font-light mb-12 max-w-2xl mx-auto">
                Entry is strictly by invitation or briefing request. Only those who seek to architect the future need apply.
            </p>
            <a class="inline-flex liquid-gold text-on-primary px-12 md:px-16 py-6 rounded-md font-headline font-black uppercase tracking-widest text-lg glow-shadow hover:scale-105 transition-transform" href="#">
                Submit Briefing
            </a>
        </div>
    </section>
</main>

<footer class="w-full flex flex-col md:flex-row justify-between items-center px-6 md:px-12 py-12 bg-[#0e0e0e] border-t border-zinc-800/20 gap-8">
    <div>
        <a class="text-lg font-bold text-zinc-500 font-headline uppercase tracking-widest" href="{{ url('/') }}">ILOGE</a>
        <p class="text-zinc-600 font-body text-xs tracking-widest uppercase mt-2">&copy; 2026 Iloge. Designed &amp; developed by codewitheugene</p>
    </div>
    <div class="flex flex-wrap justify-center gap-8">
        <a class="text-zinc-600 hover:text-yellow-500 transition-colors font-body text-xs tracking-widest uppercase" href="#">Privacy Protocol</a>
        <a class="text-zinc-600 hover:text-yellow-500 transition-colors font-body text-xs tracking-widest uppercase" href="#">Terms of Service</a>
        <a class="text-zinc-600 hover:text-yellow-500 transition-colors font-body text-xs tracking-widest uppercase" href="{{ url('/pressroom') }}">Press Kit</a>
    </div>
    <div class="flex gap-4">
        <span class="material-symbols-outlined text-zinc-600 hover:text-primary transition-colors cursor-pointer">public</span>
        <span class="material-symbols-outlined text-zinc-600 hover:text-primary transition-colors cursor-pointer">share</span>
    </div>
</footer>
</body>
</html>
