<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>The Collective | ILOGE</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-tint": "#e8c408",
                        "inverse-surface": "#e5e2e1",
                        "secondary-fixed-dim": "#c8c6c5",
                        "surface": "#131313",
                        "on-secondary": "#313030",
                        "tertiary": "#f2cc00",
                        "secondary": "#c8c6c5",
                        "tertiary-container": "#d2b100",
                        "primary-fixed": "#ffe16c",
                        "surface-container": "#201f1f",
                        "outline-variant": "#4d4635",
                        "on-error-container": "#ffdad6",
                        "primary": "#f1cc19",
                        "on-tertiary-fixed": "#221b00",
                        "background": "#131313",
                        "surface-variant": "#353534",
                        "on-background": "#e5e2e1",
                        "on-primary-fixed": "#221b00",
                        "surface-container-low": "#1c1b1b",
                        "secondary-container": "#474746",
                        "outline": "#99907c",
                        "inverse-on-surface": "#313030",
                        "primary-fixed-dim": "#e8c408",
                        "tertiary-fixed": "#ffe16d",
                        "on-surface-variant": "#d0c5af",
                        "surface-container-lowest": "#0e0e0e",
                        "on-primary": "#3a3000",
                        "surface-container-high": "#2a2a2a",
                        "on-surface": "#e5e2e1",
                        "tertiary-fixed-dim": "#e9c400",
                        "on-primary-fixed-variant": "#544600",
                        "primary-container": "#d2b100",
                        "on-tertiary-container": "#534400",
                        "on-primary-container": "#524400",
                        "secondary-fixed": "#e5e2e1",
                        "on-secondary-fixed-variant": "#474746",
                        "inverse-primary": "#705d00",
                        "on-tertiary": "#3a3000",
                        "surface-dim": "#131313",
                        "surface-container-highest": "#353534",
                        "on-tertiary-fixed-variant": "#544600",
                        "on-secondary-container": "#b7b5b4",
                        "on-secondary-fixed": "#1c1b1b",
                        "surface-bright": "#3a3939"
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
        body { background-color: #131313; color: #e5e2e1; }
        .liquid-gold { background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%); }
        .glass-nav { background: rgba(32, 31, 31, 0.6); backdrop-filter: blur(30px); }
        .rim-light { box-shadow: inset 0.5px 0.5px 0px 0px rgba(58, 57, 57, 0.5); }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="font-body selection:bg-primary selection:text-on-primary">
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
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#f1cc19] bg-white/5 transition-all" href="{{ url('/team') }}">Team</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/gallery') }}">Gallery</a>
                        <a class="block px-5 py-3 text-xs tracking-widest text-[#e5e2e1]/70 hover:text-[#f1cc19] hover:bg-white/5 transition-all" href="{{ url('/testimonials') }}">Testimonials</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/shop') }}">Shop</a>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <a class="hidden sm:inline-flex px-6 py-2 border border-outline-variant text-sm font-bold tracking-widest uppercase hover:bg-surface-variant transition-colors" href="{{ url('/contact') }}">Contact</a>
            <a class="hidden md:inline-flex px-6 py-2 liquid-gold text-on-primary text-sm font-bold tracking-widest uppercase rounded-md active:scale-95 duration-200 transition-transform" href="#contact">Book Speaker</a>
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
                                <a class="py-2 text-xs text-[#f1cc19]" href="{{ url('/team') }}">Team</a>
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
    <section class="relative min-h-[calc(100vh-6rem)] lg:min-h-[819px] flex items-center justify-start px-6 md:px-12 overflow-hidden pt-24 py-24">
        <div class="absolute inset-0 z-0">
            <img alt="Monochromatic wide shot of a futuristic dark glass boardroom with dramatic lighting and silhouettes of powerful executives standing at sunset" class="w-full h-full object-cover opacity-40 mix-blend-luminosity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9qpXejAxyyPbrczp1vb7-qEHyINiaYvyIadXvan7qw8Sln7uQTr37sr_hfwLaxNLi0sh3llYjys6gStCnef7i2Ab6gB6veyFpEp5LABxa8hXej8R5RblH36-88jBmzUm44KutZHZ6zzNqnE7Jp_hkQYJu1UZnGRdAEnUZAg9m-JXA4Fk_oDyQ_enZTtLYF37QVKgCPN6wKcc0GhaC8UyP-ttfqDnYNw24n3q-ndTL9qMlpkilAQywkemzYardCYf1he0gkfbMM2vo"/>
            <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-surface/70 via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-5xl lg:ml-12">
            <span class="text-primary font-headline font-bold tracking-[0.3em] md:tracking-[0.4em] uppercase text-xs md:text-sm mb-6 block">The Architecture of Power</span>
            <h1 class="font-headline font-extrabold text-6xl md:text-8xl lg:text-9xl tracking-tighter text-on-surface mb-8 leading-[0.9]">
                The <br/>Collective.
            </h1>
            <p class="max-w-xl text-neutral-400 text-lg leading-relaxed font-light">
                The invisible force behind world-shaping strategies. A curated assembly of minds dedicated to the sovereign future of global innovation.
            </p>
        </div>
    </section>

    <section class="py-24 md:py-32 px-6 md:px-12 bg-surface">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-end mb-16 md:mb-20">
                <div>
                    <h2 class="font-headline font-bold text-4xl md:text-5xl tracking-tighter mb-4 text-on-surface">Executive Leadership</h2>
                    <div class="w-24 h-1 bg-primary"></div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <article class="group">
                    <div class="relative aspect-[3/4] mb-6 overflow-hidden rounded-xl bg-surface-container-high rim-light">
                        <img alt="Close-up professional portrait of Amara Okonjo in a high-end dark suit, confident gaze, against a minimalist dark studio background" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6sPO2Mkf4ekGlLIksNqHBohgOeeRtWS4pff5EoDn-0NiNw9xrM9IzzP4KbgXQ_x1w3P4pD_kx0WETjQL030YFt0VPPq4DZZ-hlHn3KC9AM0MxtFAHibrBqPI95YP2h_B4a2DJvMZNH907Pft2b9RvsoYHcaT7APPpDG0CDUisDHXJnO0llQcZS5RDY3oPprZlmCpyLmkAL2QgsS9DE7Sj_aKvs6C87lUTtjc0THGP3NUVCYxUzERAehe7WKCWKks4BOkXy4y7JQIy"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent opacity-60"></div>
                    </div>
                    <h3 class="font-headline font-bold text-2xl text-on-surface">Amara Okonjo</h3>
                    <p class="text-primary font-label tracking-widest uppercase text-xs mt-2">Chief of Staff</p>
                    <p class="text-neutral-500 mt-4 text-sm leading-relaxed">Pioneer of operational excellence and strategic execution across sovereign borders.</p>
                </article>

                <article class="group">
                    <div class="relative aspect-[3/4] mb-6 overflow-hidden rounded-xl bg-surface-container-high rim-light">
                        <img alt="Distinguished professional portrait of David Mensah wearing a bespoke charcoal blazer, soft warm lighting, executive office backdrop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUlBXBVfhYZAQWNR0oSFrGCM0OTxgIVcbpHv63fzQJrhGiYNUNjdeSMRTBt_3j-ZSuNxUOZF0X5RXfWdcodLjsV-J4L27ba4FIz9FZQsYA-Md8Dl1FNQozKmVsSVteb0wS3CPh1QsU3oljbeLgk09Go8GMdJYxnPGxucJZQ8KqIV_BgLI3BbMVwZQ87Hpk82zf3zgL4IBpkOqsq_N-At3ifjwXdCMnDJYjGVKlFIU2URVTLghpi8KzEUk2yjPWY71DRotg-wlzPrJZ"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent opacity-60"></div>
                    </div>
                    <h3 class="font-headline font-bold text-2xl text-on-surface">David Mensah</h3>
                    <p class="text-primary font-label tracking-widest uppercase text-xs mt-2">Head of Strategy</p>
                    <p class="text-neutral-500 mt-4 text-sm leading-relaxed">Architect of modern investment frameworks and high-impact tactical maneuvers.</p>
                </article>

                <article class="group">
                    <div class="relative aspect-[3/4] mb-6 overflow-hidden rounded-xl bg-surface-container-high rim-light">
                        <img alt="Editorial portrait of Zainab Abiola with a commanding presence, modern luxury aesthetic, shadows highlighting sharp features" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYhisSDDbiPakcVORbIBQMuVmSKhl7JBGoEY3W03HOfPpvdkosZSU_94SoEoWvZa8Ahd3coaobLHHv957xpA_60UkKkKV_4YuPAZmCGsIXtcc69HgRKmTbNjcL03px3_mAEasHuI_DzVX-xGDxT8zeO3U_BwaEW8YCkJRp2CrlIkWHt_4NrLEnT79Xy_w-tM7zeochEvYDmbTFymPd6M7K8v9NqNQyRgF1EoLgs4L1b1Xcm7iwyDb8ZASmtsKzBdRehqBVRo7dhy4f"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent opacity-60"></div>
                    </div>
                    <h3 class="font-headline font-bold text-2xl text-on-surface">Zainab Abiola</h3>
                    <p class="text-primary font-label tracking-widest uppercase text-xs mt-2">Managing Director</p>
                    <p class="text-neutral-500 mt-4 text-sm leading-relaxed">Leading the vanguard of international business development and institutional growth.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="py-24 md:py-32 px-6 md:px-12 bg-surface-container-low">
        <div class="max-w-7xl mx-auto">
            <div class="mb-16 md:mb-20 text-center">
                <h2 class="font-headline font-bold text-4xl md:text-5xl tracking-tighter text-on-surface inline-block relative">
                    Advisory Board
                    <span class="absolute -bottom-4 left-0 w-full h-[1px] bg-outline-variant/30"></span>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <article class="p-8 bg-surface-container-high rounded-xl rim-light border border-outline-variant/10 hover:border-primary/20 transition-all group">
                    <div class="mb-6">
                        <span class="material-symbols-outlined text-primary text-4xl">policy</span>
                    </div>
                    <h3 class="font-headline font-bold text-xl text-on-surface">Lord Julian Vane</h3>
                    <p class="text-neutral-500 text-xs tracking-widest uppercase mt-1 mb-4">Geopolitical Advisor</p>
                    <p class="text-neutral-400 text-sm leading-relaxed">Former state strategist with 30 years in transcontinental relations.</p>
                </article>

                <article class="p-8 bg-surface-container-high rounded-xl rim-light border border-outline-variant/10 hover:border-primary/20 transition-all group">
                    <div class="mb-6">
                        <span class="material-symbols-outlined text-primary text-4xl">currency_exchange</span>
                    </div>
                    <h3 class="font-headline font-bold text-xl text-on-surface">Elena Rossi</h3>
                    <p class="text-neutral-500 text-xs tracking-widest uppercase mt-1 mb-4">Fiscal Governance</p>
                    <p class="text-neutral-400 text-sm leading-relaxed">Expert in sovereign wealth management and decentralised finance systems.</p>
                </article>

                <article class="p-8 bg-surface-container-high rounded-xl rim-light border border-outline-variant/10 hover:border-primary/20 transition-all group">
                    <div class="mb-6">
                        <span class="material-symbols-outlined text-primary text-4xl">shield_with_heart</span>
                    </div>
                    <h3 class="font-headline font-bold text-xl text-on-surface">Marcus Thorne</h3>
                    <p class="text-neutral-500 text-xs tracking-widest uppercase mt-1 mb-4">Legacy Protection</p>
                    <p class="text-neutral-400 text-sm leading-relaxed">Specialist in asset preservation and long-term family office architecture.</p>
                </article>

                <article class="p-8 bg-surface-container-high rounded-xl rim-light border border-outline-variant/10 hover:border-primary/20 transition-all group">
                    <div class="mb-6">
                        <span class="material-symbols-outlined text-primary text-4xl">clinical_notes</span>
                    </div>
                    <h3 class="font-headline font-bold text-xl text-on-surface">Dr. Sarah Chen</h3>
                    <p class="text-neutral-500 text-xs tracking-widest uppercase mt-1 mb-4">Tech Ethicist</p>
                    <p class="text-neutral-400 text-sm leading-relaxed">Global lead on emerging technologies and ethical AI integration.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 md:px-12 bg-surface">
        <div class="max-w-7xl mx-auto border-y border-outline-variant/20 py-16">
            <h2 class="text-center text-neutral-500 font-label tracking-[0.4em] md:tracking-[0.5em] uppercase text-xs mb-16">Institutional Partnerships</h2>
            <div class="flex flex-wrap justify-around items-center gap-12 opacity-60 grayscale hover:grayscale-0 transition-all duration-700">
                <div class="text-2xl font-black tracking-tighter text-on-surface">HEXA GEN</div>
                <div class="text-2xl font-black tracking-tighter text-on-surface">VANGUARD</div>
                <div class="text-2xl font-black tracking-tighter text-on-surface">AETHELRED</div>
                <div class="text-2xl font-black tracking-tighter text-on-surface">MONOLITH</div>
            </div>
        </div>
    </section>

    <section class="py-24 md:py-32 px-6 md:px-12" id="contact">
        <div class="max-w-7xl mx-auto rounded-xl overflow-hidden relative">
            <div class="absolute inset-0 z-0">
                <img alt="Abstract interior of an ultra-luxury modern lounge at night with soft amber glow and deep obsidian surfaces" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6t4xZepaj6H-evZCxpft2cyY0_oALJMIP3JF2BF5l3kWSf64UYCyDPQ8dMELZFBf2X1coZr6jGSZJIereo6UpHgexxuJCVRSiPQKmwyayK1VFVtRez4cmZAR-EF7J-gTfEPOHO3h9xwANRqbvrqjQz1gKuJqlHUd5f6bscPDJqgR17JMDf3kVyqfjVmPFgFr_4h5yApAzjikzhV9XcpXb7WDwIX9gV-0GDuTJCr5ZzIXl7_EZzNVkdc1y5E-k9NuWTgBW9pLDaSRH"/>
                <div class="absolute inset-0 bg-neutral-950/80 backdrop-blur-sm"></div>
            </div>
            <div class="relative z-10 p-8 md:p-16 lg:p-24 text-center">
                <h2 class="font-headline font-extrabold text-4xl md:text-7xl tracking-tighter text-on-surface mb-8">Join the Inner Circle.</h2>
                <p class="max-w-2xl mx-auto text-neutral-400 text-lg mb-12">
                    Gain unprecedented access to strategic briefings and board-level consulting. Excellence is not accidental; it is orchestrated.
                </p>
                <div class="flex flex-col md:flex-row justify-center gap-6">
                    <a class="px-8 md:px-12 py-5 liquid-gold text-on-primary font-bold tracking-widest uppercase rounded-lg shadow-xl hover:-translate-y-0.5 transition-transform" href="#">Consultation Inquiry</a>
                    <a class="px-8 md:px-12 py-5 border border-primary text-primary font-bold tracking-widest uppercase rounded-lg hover:bg-primary/10 transition-colors" href="#">Board Briefing</a>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="bg-neutral-950 w-full py-16 px-6 md:px-12 border-t border-neutral-800/30">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
        <a class="text-xl font-bold text-neutral-100" href="{{ url('/') }}">ILOGE</a>
        <div class="flex flex-wrap justify-center gap-8 text-neutral-500 font-['Inter'] text-sm tracking-widest uppercase">
            <a class="hover:text-amber-400 transition-colors" href="{{ url('/investor') }}">Investor Relations</a>
            <a class="hover:text-amber-400 transition-colors" href="{{ url('/speaker') }}">Speaker Kit</a>
            <a class="hover:text-amber-400 transition-colors" href="{{ url('/podcast') }}">Podcast Archives</a>
            <a class="hover:text-amber-400 transition-colors" href="{{ url('/blog') }}">Blog</a>
            <a class="hover:text-amber-400 transition-colors" href="#">Privacy Policy</a>
        </div>
        <p class="text-neutral-500 font-['Inter'] text-[10px] tracking-widest uppercase text-center md:text-right">
            &copy; 2026 Iloge. Designed &amp; developed by codewitheugene
        </p>
    </div>
</footer>
</body>
</html>
