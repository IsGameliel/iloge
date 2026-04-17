<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Investor | ILOGE - Architect of Capital</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700;800&amp;family=Inter:wght@300;400;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline-variant": "#4d4635",
                        "surface-container-low": "#1c1b1b",
                        "on-tertiary-container": "#534400",
                        "on-secondary-fixed": "#1c1b1b",
                        "tertiary-fixed-dim": "#e9c400",
                        "on-error-container": "#ffdad6",
                        "on-primary": "#3a3000",
                        "on-tertiary": "#3a3000",
                        "on-tertiary-fixed-variant": "#544600",
                        "surface-container-lowest": "#0e0e0e",
                        "inverse-on-surface": "#313030",
                        "secondary": "#c8c6c5",
                        "surface-container-highest": "#353534",
                        "on-surface": "#e5e2e1",
                        "on-secondary": "#313030",
                        "surface": "#131313",
                        "error": "#ffb4ab",
                        "tertiary-container": "#d2b100",
                        "surface-bright": "#3a3939",
                        "on-background": "#e5e2e1",
                        "secondary-fixed": "#e5e2e1",
                        "on-primary-fixed-variant": "#544600",
                        "error-container": "#93000a",
                        "secondary-fixed-dim": "#c8c6c5",
                        "surface-container-high": "#2a2a2a",
                        "on-tertiary-fixed": "#221b00",
                        "on-secondary-fixed-variant": "#474746",
                        "on-primary-fixed": "#221b00",
                        "primary-container": "#d2b100",
                        "primary": "#f1cc19",
                        "surface-dim": "#131313",
                        "on-secondary-container": "#b7b5b4",
                        "inverse-surface": "#e5e2e1",
                        "primary-fixed-dim": "#e8c408",
                        "primary-fixed": "#ffe16c",
                        "on-surface-variant": "#d0c5af",
                        "surface-variant": "#353534",
                        "secondary-container": "#474746",
                        "on-error": "#690005",
                        "outline": "#99907c",
                        "on-primary-container": "#524400",
                        "inverse-primary": "#705d00",
                        "background": "#131313",
                        "tertiary-fixed": "#ffe16d",
                        "tertiary": "#f2cc00",
                        "surface-tint": "#e8c408",
                        "surface-container": "#201f1f"
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
            background: rgba(19, 19, 19, 0.6);
            backdrop-filter: blur(30px);
        }
        body {
            background-color: #131313;
            color: #e5e2e1;
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-surface text-on-surface">
<nav class="fixed top-0 w-full z-50 glass-nav">
    <div class="relative flex justify-between items-center px-6 md:px-12 py-6 w-full max-w-screen-2xl mx-auto">
        <a class="text-2xl font-black tracking-tighter text-[#e5e2e1]" href="{{ url('/') }}">ILOGE</a>
        <div class="hidden xl:flex items-center space-x-8 font-headline tracking-tight text-sm uppercase">
            <a class="text-[#e5e2e1] opacity-70 hover:opacity-100 hover:text-[#f1cc19] transition-all duration-300" href="{{ url('/') }}">Home</a>
            <div class="relative group">
                <button class="text-[#f1cc19] border-b border-[#f1cc19] pb-1 inline-flex items-center gap-1" type="button">
                    About
                    <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                </button>
                <div class="absolute left-0 top-full pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-300">
                    <div class="bg-surface-container-high p-4 min-w-[160px] rounded-xl shadow-2xl border border-white/10">
                        <a class="block py-2 text-xs opacity-70 hover:opacity-100 hover:text-[#f1cc19]" href="{{ url('/speaker') }}">Speaker</a>
                        <a class="block py-2 text-xs text-[#f1cc19]" href="{{ url('/investor') }}">Investor</a>
                        <a class="block py-2 text-xs opacity-70 hover:opacity-100 hover:text-[#f1cc19]" href="{{ url('/leader') }}">Leader</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1] opacity-70 hover:opacity-100 hover:text-[#f1cc19] transition-all duration-300" href="{{ url('/pressroom') }}">Press Room</a>
            <div class="relative group">
                <button class="text-[#e5e2e1] opacity-70 hover:opacity-100 hover:text-[#f1cc19] transition-all duration-300 inline-flex items-center gap-1" type="button">
                    Diary
                    <span class="material-symbols-outlined text-base leading-none">expand_more</span>
                </button>
                <div class="absolute left-0 top-full pt-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-focus-within:opacity-100 group-focus-within:visible transition-all duration-300">
                    <div class="bg-surface-container-high p-4 min-w-[180px] rounded-xl shadow-2xl border border-white/10">
                        <a class="block py-2 text-xs opacity-70 hover:opacity-100 hover:text-[#f1cc19]" href="{{ url('/podcast') }}">Podcast</a>
                        <a class="block py-2 text-xs opacity-70 hover:opacity-100 hover:text-[#f1cc19]" href="#">Blog</a>
                        <a class="block py-2 text-xs opacity-70 hover:opacity-100 hover:text-[#f1cc19]" href="#">Team</a>
                        <a class="block py-2 text-xs opacity-70 hover:opacity-100 hover:text-[#f1cc19]" href="#">Gallery</a>
                        <a class="block py-2 text-xs opacity-70 hover:opacity-100 hover:text-[#f1cc19]" href="#">Testimonials</a>
                    </div>
                </div>
            </div>
            <a class="text-[#e5e2e1] opacity-70 hover:opacity-100 hover:text-[#f1cc19] transition-all duration-300" href="#">Shop</a>
            <a class="text-[#e5e2e1] opacity-70 hover:opacity-100 hover:text-[#f1cc19] transition-all duration-300" href="#contact">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <a class="liquid-gold-gradient px-5 md:px-6 py-2 rounded-md font-headline text-xs md:text-sm font-bold text-on-primary uppercase tracking-widest active:scale-95 transition-transform" href="#pitch">
                Pitch Iloge
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
                                <a class="py-2 text-xs text-[#f1cc19]" href="{{ url('/investor') }}">Investor</a>
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

<main>
    <section class="relative min-h-screen flex items-center overflow-hidden pt-24">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover opacity-40" alt="Modern architectural abstract with golden sunlight" data-alt="Modern architectural abstract of a skyscraper with deep shadows and golden sunlight reflecting off glass panels" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgImknmDyXWGRLh536CKQh1wLy8gDy7C6WRsINn3eb4SCxc7Q3Z0raVabWm8iE4jNbewnHxd4N_faHE5mdJ_tfEQfhOj1pSzjXynvY2QBG1CQPo8PfTXj3Uy9Pt0VxofmCzWfz1Ckr6qpKnFz21r9KV83uKEwYqjyYIz-r0aHnpUMo0ZCWpHcIA3CdwxGREuoLHYra7J0Kqh7PfLJv8c_lRciXkKKQ6xaiFpK0Awl7ZYDieAfVonAshh3KbXl_RerumN5drnpFfWu9"/>
            <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-screen-2xl mx-auto px-6 md:px-12 w-full">
            <div class="max-w-4xl">
                <span class="text-primary font-headline tracking-[0.3em] uppercase text-sm mb-6 block">Strategic Sovereign</span>
                <h1 class="font-headline text-6xl md:text-[7rem] leading-[0.9] font-extrabold tracking-tighter text-on-surface mb-8">
                    Architect of <br/><span class="text-primary">Capital.</span>
                </h1>
                <p class="text-xl text-on-surface-variant max-w-xl font-light leading-relaxed">
                    Iloge does not just fund ideas; we engineer ecosystems. We deploy strategic liquidity into the shadows where innovation waits to be sculpted into dominance.
                </p>
            </div>
        </div>
        <div class="absolute bottom-12 left-6 md:left-12 flex items-center space-x-4 opacity-30">
            <div class="w-12 h-[1px] bg-on-surface"></div>
            <span class="text-xs uppercase tracking-widest">Scroll to Explore</span>
        </div>
    </section>

    <section class="py-32 bg-surface-container-lowest">
        <div class="max-w-screen-2xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-24 items-center">
            <div>
                <h2 class="font-headline text-5xl font-bold tracking-tight mb-12">The Shadow <br/>Thesis</h2>
            </div>
            <div class="space-y-8">
                <p class="text-2xl font-light leading-relaxed text-on-surface italic">
                    "Real value isn't found in the spotlight. It's built in the margins-the spaces between established infrastructure and the radical future."
                </p>
                <div class="h-[1px] w-full bg-outline-variant opacity-20"></div>
                <p class="text-on-surface-variant leading-loose">
                    Our investment philosophy relies on high-conviction participation in sectors that define the next century. We seek founders who possess the architectural vision to see past quarterly returns and toward generational shifts in human sovereignty.
                </p>
            </div>
        </div>
    </section>

    <section class="py-32 px-6 md:px-12 max-w-screen-2xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="p-10 md:p-12 bg-surface-container-low rounded-xl border-t border-surface-bright/20 hover:bg-surface-container transition-colors group">
                <span class="material-symbols-outlined text-primary text-4xl mb-8 group-hover:scale-110 transition-transform">neurology</span>
                <h3 class="font-headline text-2xl font-bold mb-6">Artificial Intelligence</h3>
                <p class="text-on-surface-variant leading-relaxed text-sm">
                    Investing in the cognitive infrastructure that will automate the world's most complex decision-making processes. Focus on neural architecture and private LLMs.
                </p>
            </div>
            <div class="p-10 md:p-12 bg-surface-container-low rounded-xl border-t border-surface-bright/20 hover:bg-surface-container transition-colors group">
                <span class="material-symbols-outlined text-primary text-4xl mb-8 group-hover:scale-110 transition-transform">eco</span>
                <h3 class="font-headline text-2xl font-bold mb-6">Sustainable Tech</h3>
                <p class="text-on-surface-variant leading-relaxed text-sm">
                    Radical efficiency in energy harvesting and waste transformation. We look for closed-loop systems that prioritize long-term planetary sovereign health.
                </p>
            </div>
            <div class="p-10 md:p-12 bg-surface-container-low rounded-xl border-t border-surface-bright/20 hover:bg-surface-container transition-colors group">
                <span class="material-symbols-outlined text-primary text-4xl mb-8 group-hover:scale-110 transition-transform">architecture</span>
                <h3 class="font-headline text-2xl font-bold mb-6">Architectural Infrastructure</h3>
                <p class="text-on-surface-variant leading-relaxed text-sm">
                    Building the physical and digital foundations of the next civilization. From sovereign clouds to heavy vertical modular construction.
                </p>
            </div>
        </div>
    </section>

    <section class="py-32 bg-surface">
        <div class="max-w-screen-2xl mx-auto px-6 md:px-12">
            <div class="flex flex-col md:flex-row justify-between md:items-end gap-8 mb-20">
                <div>
                    <span class="text-primary font-headline tracking-[0.2em] uppercase text-xs mb-4 block">Selected Holdings</span>
                    <h2 class="font-headline text-6xl font-black tracking-tighter">Portfolio.</h2>
                </div>
                <a class="text-on-surface-variant hover:text-primary font-body text-sm uppercase tracking-widest pb-2 transition-colors" href="#">
                    View Full Portal -&gt;
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-surface-container-low p-10 rounded-xl flex flex-col justify-between min-h-[280px] group cursor-pointer border border-transparent hover:border-primary/20 transition-all">
                    <div class="flex justify-between items-start gap-4">
                        <h4 class="font-headline text-3xl font-bold">Vertex AI</h4>
                        <span class="material-symbols-outlined opacity-0 group-hover:opacity-100 text-primary transition-opacity">north_east</span>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-widest text-primary uppercase block mb-2">Series B - AI</span>
                        <p class="text-on-surface-variant text-sm">Distributed neural networks for autonomous logistics.</p>
                    </div>
                </div>
                <div class="bg-surface-container-low p-10 rounded-xl flex flex-col justify-between min-h-[280px] group cursor-pointer border border-transparent hover:border-primary/20 transition-all">
                    <div class="flex justify-between items-start gap-4">
                        <h4 class="font-headline text-3xl font-bold">Aurelian Ventures</h4>
                        <span class="material-symbols-outlined opacity-0 group-hover:opacity-100 text-primary transition-opacity">north_east</span>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-widest text-primary uppercase block mb-2">Seed - Fintech</span>
                        <p class="text-on-surface-variant text-sm">Algorithmic wealth preservation for the sovereign class.</p>
                    </div>
                </div>
                <div class="bg-surface-container-low p-10 rounded-xl flex flex-col justify-between min-h-[280px] group cursor-pointer border border-transparent hover:border-primary/20 transition-all">
                    <div class="flex justify-between items-start gap-4">
                        <h4 class="font-headline text-3xl font-bold">Onyx Labs</h4>
                        <span class="material-symbols-outlined opacity-0 group-hover:opacity-100 text-primary transition-opacity">north_east</span>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-widest text-primary uppercase block mb-2">Acquired - Security</span>
                        <p class="text-on-surface-variant text-sm">Quantum-resistant encryption for enterprise data silos.</p>
                    </div>
                </div>
                <div class="bg-surface-container-low p-10 rounded-xl flex flex-col justify-between min-h-[280px] group cursor-pointer border border-transparent hover:border-primary/20 transition-all">
                    <div class="flex justify-between items-start gap-4">
                        <h4 class="font-headline text-3xl font-bold">Flux Energy</h4>
                        <span class="material-symbols-outlined opacity-0 group-hover:opacity-100 text-primary transition-opacity">north_east</span>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-widest text-primary uppercase block mb-2">Series A - CleanTech</span>
                        <p class="text-on-surface-variant text-sm">Modular salt-based thermal storage solutions.</p>
                    </div>
                </div>
                <div class="bg-surface-container-low p-10 rounded-xl flex flex-col justify-between min-h-[280px] group cursor-pointer border border-transparent hover:border-primary/20 transition-all">
                    <div class="flex justify-between items-start gap-4">
                        <h4 class="font-headline text-3xl font-bold">Titan Infra</h4>
                        <span class="material-symbols-outlined opacity-0 group-hover:opacity-100 text-primary transition-opacity">north_east</span>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-widest text-primary uppercase block mb-2">Growth - Urban</span>
                        <p class="text-on-surface-variant text-sm">Next-gen vertical cities and sustainable urbanism.</p>
                    </div>
                </div>
                <div class="bg-surface-container-low p-10 rounded-xl flex flex-col justify-between min-h-[280px] group cursor-pointer border border-transparent hover:border-primary/20 transition-all">
                    <div class="flex justify-between items-start gap-4">
                        <h4 class="font-headline text-3xl font-bold">Neo-Cobalt</h4>
                        <span class="material-symbols-outlined opacity-0 group-hover:opacity-100 text-primary transition-opacity">north_east</span>
                    </div>
                    <div>
                        <span class="text-xs font-bold tracking-widest text-primary uppercase block mb-2">Early - Materials</span>
                        <p class="text-on-surface-variant text-sm">Synthetic mineral synthesis for global supply chain resilience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-40 overflow-hidden" id="pitch">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover object-top grayscale" alt="Visionary founder portrait" data-alt="Professional portrait of a visionary founder in a dark charcoal suit against a minimal dark background with warm rim lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOpPkUgXyURMg02Xq0BF4aqUEAEKqpR3XCOaILaZpKksoKO7UaPtTx6FGx_j7yNjEQ6bZRSFiEM8DGZKgyqk0z0qRav9gsDGW2gY0O-QLpiaY6dq6nBbM8qd3w0Jb898sU3KfHqZ45g1N_9WLxfwWDoKiUKBxBMKbqbVn9H6ubpP7ttxyp0mLS4s2FuR40jXmCELH6CXEdmVQ4D0P9PQBjqo3XWoD4W0m1YOlkjTu0ct2HJQBvLCfoDWnkFNxMeLc0Eti0imq6K-g8"/>
            <div class="absolute inset-0 bg-surface/90"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-screen-2xl mx-auto px-6 md:px-12 text-center">
            <h2 class="font-headline text-5xl md:text-7xl font-black tracking-tighter mb-8 italic">Ready to Shape <br/>the Shadows?</h2>
            <p class="text-xl text-on-surface-variant max-w-2xl mx-auto mb-12 font-light">
                We are looking for the next radical architect. If your vision defies the standard, we have the capital to build it.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a class="liquid-gold-gradient px-12 py-5 rounded-md font-headline font-bold text-on-primary uppercase tracking-widest hover:scale-105 transition-transform" href="#pitch">
                    Pitch Iloge
                </a>
                <a class="bg-surface-container-high px-12 py-5 rounded-md font-headline font-bold text-on-surface uppercase tracking-widest border border-outline-variant/30 hover:bg-surface-container-highest transition-colors" href="#">
                    Our Process
                </a>
            </div>
        </div>
    </section>
</main>

<footer class="bg-[#0e0e0e] w-full py-12 px-6 md:px-12 border-t border-[#4d4635]/15" id="contact">
    <div class="flex flex-col md:flex-row justify-between items-center w-full max-w-screen-2xl mx-auto gap-8">
        <a class="text-[#e5e2e1] opacity-50 font-headline font-black tracking-tighter text-xl" href="{{ url('/') }}">ILOGE</a>
        <div class="flex flex-wrap justify-center gap-8 font-body text-xs tracking-widest uppercase">
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] transition-colors" href="#">Privacy Policy</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] transition-colors" href="#">Terms of Service</a>
            <a class="text-[#f1cc19]" href="{{ url('/investor') }}">Investor Portal</a>
            <a class="text-[#e5e2e1]/40 hover:text-[#f1cc19] transition-colors" href="#">Press Kit</a>
        </div>
        <div class="text-[#e5e2e1]/40 text-[10px] tracking-[0.2em]">
            &copy; 2024 THE SOVEREIGN CREATIVE. ALL RIGHTS RESERVED.
        </div>
    </div>
</footer>
</body>
</html>
