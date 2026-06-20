<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Contact | ILOGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-tertiary-fixed": "#221b00",
                        "on-background": "#e5e2e1",
                        "surface-variant": "#353534",
                        "surface-container-low": "#1c1b1b",
                        "surface-container-highest": "#353534",
                        "on-surface-variant": "#d0c5af",
                        "secondary-container": "#474746",
                        "error-container": "#93000a",
                        "on-secondary-fixed": "#1c1b1b",
                        "tertiary-fixed": "#ffe16d",
                        "inverse-surface": "#e5e2e1",
                        "tertiary": "#f2cc00",
                        "on-primary-container": "#524400",
                        "surface-dim": "#131313",
                        "surface-container-high": "#2a2a2a",
                        "surface": "#131313",
                        "on-secondary-fixed-variant": "#474746",
                        "inverse-on-surface": "#313030",
                        "surface-container": "#201f1f",
                        "on-tertiary-container": "#534400",
                        "tertiary-fixed-dim": "#e9c400",
                        "outline": "#99907c",
                        "on-error-container": "#ffdad6",
                        "surface-container-lowest": "#0e0e0e",
                        "surface-tint": "#e8c408",
                        "primary-fixed-dim": "#e8c408",
                        "primary-container": "#d2b100",
                        "surface-bright": "#3a3939",
                        "primary": "#f1cc19",
                        "on-secondary": "#313030",
                        "on-primary-fixed-variant": "#544600",
                        "on-surface": "#e5e2e1",
                        "error": "#ffb4ab",
                        "background": "#131313",
                        "on-tertiary-fixed-variant": "#544600",
                        "on-primary": "#3a3000",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-primary-fixed": "#221b00",
                        "tertiary-container": "#d2b100",
                        "outline-variant": "#4d4635",
                        "on-tertiary": "#3a3000",
                        "secondary-fixed": "#e5e2e1",
                        "primary-fixed": "#ffe16c",
                        "on-secondary-container": "#b7b5b4",
                        "inverse-primary": "#705d00",
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
                },
            },
        }
    </script>
    <style>
        .liquid-gold-bg {
            background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body selection:bg-primary selection:text-on-primary">
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
            <a class="text-[#f1cc19] border-b border-[#f1cc19] pb-1" href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <a class="liquid-gold-bg text-on-primary font-headline font-bold tracking-tight text-sm uppercase px-6 md:px-8 py-3 rounded-lg scale-95 active:scale-90 transition-transform" href="#liaison">
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
                        <a class="text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="{{ url('/contact') }}">Contact</a>
                    </div>
                </div>
            </details>
        </div>
    </div>
</nav>

<main class="pt-24">
    <section class="relative w-full min-h-[716px] flex flex-col justify-center px-6 md:px-12 lg:px-24 py-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img alt="Corporate Authority" class="w-full h-full object-cover opacity-20 grayscale" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0YMzZX8NFjsuLbOj5ImfpgXiygEAfTKPpepZEE0TSF_Zz6xf6UKfNowehmdb8lHUCbQdz1yOePlqoiNOvUH_XbgU1cSfTPh0bugYI-CJiG8q4Bs_Kc88bX8l9J4UoRoBt8pa5vn8srBj5gC7lJae2Mqg83QabyYcgsCNOtiVGwT4oRaIoCNtMP3V3yJOXds_6YXe9Z3aEdBmGEfODs0gZcJmUTc3B-UVZxxHrzQkChUq-OfveqO3yfTp55_jk7bSgGRjQ6JWq93ub"/>
            <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-4xl">
            <h1 class="font-headline font-extrabold text-6xl lg:text-9xl tracking-tighter text-on-surface leading-tight mb-8">
                Secure Your <br/> <span class="text-primary">Strategy.</span>
            </h1>
            <p class="font-body text-xl lg:text-2xl text-on-surface-variant max-w-2xl font-light leading-relaxed">
                Access is strictly curated. Exclusive channels are open for high-level advisory, venture partnerships, and global speaking engagements.
            </p>
        </div>
    </section>

    <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 px-6 md:px-12 lg:px-24 py-24 bg-surface-container-lowest" id="liaison">
        <div class="lg:col-span-7 bg-surface p-8 md:p-10 lg:p-16 rounded-xl shadow-2xl">
            <div class="mb-12">
                <h2 class="font-headline text-4xl font-bold tracking-tight mb-4">Direct Liaison</h2>
                <div class="h-1 w-20 bg-primary"></div>
            </div>
            <form class="space-y-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="relative">
                        <input class="peer w-full bg-transparent border-0 border-b border-outline-variant/30 py-3 focus:ring-0 focus:border-primary transition-all text-on-surface placeholder-transparent" id="full-identity" placeholder=" " type="text"/>
                        <label class="absolute left-0 -top-6 text-sm font-medium text-on-surface-variant transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-6 peer-focus:text-sm peer-focus:text-primary uppercase tracking-widest" for="full-identity">Full Identity</label>
                    </div>
                    <div class="relative">
                        <input class="peer w-full bg-transparent border-0 border-b border-outline-variant/30 py-3 focus:ring-0 focus:border-primary transition-all text-on-surface placeholder-transparent" id="digital-address" placeholder=" " type="email"/>
                        <label class="absolute left-0 -top-6 text-sm font-medium text-on-surface-variant transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-6 peer-focus:text-sm peer-focus:text-primary uppercase tracking-widest" for="digital-address">Digital Address</label>
                    </div>
                </div>
                <div class="relative">
                    <select class="peer w-full bg-transparent border-0 border-b border-outline-variant/30 py-3 focus:ring-0 focus:border-primary transition-all text-on-surface appearance-none uppercase text-sm tracking-widest cursor-pointer" id="engagement-nature">
                        <option class="bg-surface text-on-surface">Strategic Advisory</option>
                        <option class="bg-surface text-on-surface">Keynote Speaking</option>
                        <option class="bg-surface text-on-surface">Venture Inquiry</option>
                        <option class="bg-surface text-on-surface">Other High-Profile Engagement</option>
                    </select>
                    <label class="absolute left-0 -top-6 text-sm font-medium text-on-surface-variant uppercase tracking-widest" for="engagement-nature">Nature of Engagement</label>
                    <div class="absolute right-0 top-3 pointer-events-none">
                        <span class="material-symbols-outlined text-primary">keyboard_arrow_down</span>
                    </div>
                </div>
                <div class="relative">
                    <textarea class="peer w-full bg-transparent border-0 border-b border-outline-variant/30 py-3 focus:ring-0 focus:border-primary transition-all text-on-surface placeholder-transparent" id="overview" placeholder=" " rows="4"></textarea>
                    <label class="absolute left-0 -top-6 text-sm font-medium text-on-surface-variant transition-all peer-placeholder-shown:top-3 peer-placeholder-shown:text-base peer-focus:-top-6 peer-focus:text-sm peer-focus:text-primary uppercase tracking-widest" for="overview">Brief Overview</label>
                </div>
                <div class="flex justify-start">
                    <button class="liquid-gold-bg text-on-primary font-headline font-extrabold tracking-[0.15em] text-sm uppercase px-12 md:px-16 py-5 rounded-md hover:brightness-110 transition-all shadow-xl active:scale-95" type="submit">
                        Dispatch Request
                    </button>
                </div>
            </form>
        </div>

        <div class="lg:col-span-5 space-y-12">
            <div class="bg-surface-container p-8 md:p-10 rounded-xl">
                <h2 class="font-headline text-2xl font-bold mb-8 uppercase tracking-widest text-primary">Strategic HQ</h2>
                <div class="space-y-10">
                    <div class="group">
                        <div class="flex items-center gap-4 mb-2">
                            <span class="material-symbols-outlined text-primary-fixed-dim" style="font-variation-settings: 'FILL' 1;">location_on</span>
                            <p class="font-headline font-bold text-xl tracking-tight">Abuja</p>
                        </div>
                        <p class="text-on-surface-variant pl-10 font-light leading-relaxed">Suite 4, 77 Lome Crescent <br>Wuse Zone 7, FCT,
Abuja</p>
                    </div>
                    <!-- <div class="group">
                        <div class="flex items-center gap-4 mb-2">
                            <span class="material-symbols-outlined text-primary-fixed-dim" style="font-variation-settings: 'FILL' 1;">location_on</span>
                            <p class="font-headline font-bold text-xl tracking-tight">Dubai</p>
                        </div>
                        <p class="text-on-surface-variant pl-10 font-light leading-relaxed">DIFC Gate Village 4,<br/>Strategic Business District</p>
                    </div> -->
                </div>
            </div>
            <div class="bg-surface-container-high p-8 md:p-10 rounded-xl">
                <h2 class="font-headline text-2xl font-bold mb-8 uppercase tracking-widest text-primary">Global Liaison</h2>
                <div class="space-y-6">
                    <div class="flex items-center gap-6 group cursor-pointer">
                        <div class="w-12 h-12 rounded-full border border-outline-variant/30 flex items-center justify-center group-hover:border-primary transition-colors">
                            <span class="material-symbols-outlined text-primary">alternate_email</span>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-on-surface-variant/60 font-bold">Email Interface</p>
                            <p class="text-lg font-medium">bookonyekwelu2speak@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-6 group cursor-pointer">
                        <div class="w-12 h-12 rounded-full border border-outline-variant/30 flex items-center justify-center group-hover:border-primary transition-colors">
                            <span class="material-symbols-outlined text-primary">encrypted</span>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-on-surface-variant/60 font-bold">Secure Voice</p>
                            <p class="text-lg font-medium">070411612922</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-6">
                        <div class="w-12 h-12 rounded-full border border-outline-variant/30 flex items-center justify-center group-hover:border-primary transition-colors">
                            <span class="material-symbols-outlined text-primary">share_reviews</span>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-on-surface-variant/60 font-bold">Social Ecosystem</p>
                            <div class="mt-2 space-y-3">
                                <a class="block text-sm font-bold uppercase tracking-tighter transition-colors hover:text-primary" href="https://www.tiktok.com/@onyekwelu.iloge?_r=1&_t=ZS-961iPNelbGu" rel="noreferrer" target="_blank">
                                    TikTok <span class="text-on-surface-variant normal-case tracking-normal font-medium">@onyekwelu.iloge</span>
                                </a>
                                <a class="block text-sm font-bold uppercase tracking-tighter transition-colors hover:text-primary" href="https://www.facebook.com/share/18SSFPEB5E/" rel="noreferrer" target="_blank">
                                    Facebook <span class="text-on-surface-variant normal-case tracking-normal font-medium">@Onyekwelu ILOGE</span>
                                </a>
                                <a class="block text-sm font-bold uppercase tracking-tighter transition-colors hover:text-primary" href="https://www.instagram.com/onyekwelu.iloge?igsh=b21wdGk5aHNibHRu" rel="noreferrer" target="_blank">
                                    Instagram <span class="text-on-surface-variant normal-case tracking-normal font-medium">@onyekwelu.iloge</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-6 md:px-12 lg:px-24 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 min-h-[600px]">
            <div class="relative overflow-hidden rounded-xl group min-h-[360px]">
                <img alt="Executive Lounge" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAy41b_ihL6Zn9xcUKXiTha2RMc43fdMBrr_wBSCpdLQEt2hAUAi5ZJGRu3bhPuVxAuGMP2SgxShk8CrAQkqahMVYnxEAkLqztArLsjtQGUJRk7lCT4dlYbYeTmCwxkxRITvPPcchfr2qI6Ol6ZRkUzovDRRwW0pLjDneufoi06EfVRAsK0sKlAjE1KEWhul-3RydtsCjpeEJw9ZdjhCi-V12mmk3FZS5OL75rPG811MCzk-_MysuKnGhC2jNBbrt3PRQRi8YHrIYpA"/>
                <div class="absolute inset-0 bg-surface/30 mix-blend-multiply"></div>
                <div class="absolute bottom-10 left-10">
                    <p class="font-headline font-black text-2xl uppercase tracking-widest text-on-surface">The War Room</p>
                </div>
            </div>
            <div class="relative overflow-hidden rounded-xl group min-h-[360px]">
                <img alt="Dubai Skyline" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJGijge4wb85X9wpHbhTvaA6EW4g29-OnMicfMuJ10CN3qQRdqBtoJOBxgoHosXAqKKjOqysTKqV1trm2Z3kMVhEEzPc6yXmiBjKWh0teGXoDHne7-haj2GxToVrba3Sj5I7Ndw_S3A1E-SgLmb0Enx02u4BcQ4yuujdHoy8apNXKSpiRdPG8rBX10_FkYiKKobAZho7e_zq0F0AJOOsNrURx5m8RoJ0Mvbag-Hc6qF3bBP2Gw6ywbYVJYV5M7rFKmEhrz2Iv7ojDh"/>
                <div class="absolute inset-0 bg-surface/30 mix-blend-multiply"></div>
                <div class="absolute bottom-10 left-10">
                    <p class="font-headline font-black text-2xl uppercase tracking-widest text-on-surface">Global Reach</p>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="w-full mt-auto bg-[#0e0e0e] dark:bg-[#0e0e0e]">
    <div class="flex flex-col md:flex-row justify-between items-center w-full px-6 md:px-12 py-20 border-t border-[#4d4635]/10 max-w-[1920px] mx-auto">
        <a class="text-lg font-bold text-[#e5e2e1] font-headline uppercase mb-8 md:mb-0" href="{{ url('/') }}">ILOGE</a>
        <div class="flex flex-col items-center gap-4">
            <p class="font-['Inter'] text-[10px] tracking-[0.2em] uppercase font-medium text-[#e5e2e1]/30">&copy; 2026 Iloge. Designed &amp; developed by codewitheugene</p>
        </div>
        <div class="flex gap-8 mt-8 md:mt-0">
            <a class="font-['Inter'] text-[10px] tracking-[0.2em] uppercase font-medium text-[#e5e2e1]/30 hover:text-[#e5e2e1] transition-opacity duration-500" href="#">Privacy</a>
            <a class="font-['Inter'] text-[10px] tracking-[0.2em] uppercase font-medium text-[#e5e2e1]/30 hover:text-[#e5e2e1] transition-opacity duration-500" href="#">Terms</a>
            <a class="font-['Inter'] text-[10px] tracking-[0.2em] uppercase font-medium text-[#e5e2e1]/30 hover:text-[#e5e2e1] transition-opacity duration-500" href="#">Social</a>
            <a class="font-['Inter'] text-[10px] tracking-[0.2em] uppercase font-medium text-[#e5e2e1]/30 hover:text-[#e5e2e1] transition-opacity duration-500" href="{{ url('/pressroom') }}">Press</a>
        </div>
    </div>
</footer>
</body>
</html>
