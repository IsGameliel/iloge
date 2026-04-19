<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ILOGE EXECUTIVE - Join the Collective</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-tertiary-fixed": "#221b00",
                        "on-primary-container": "#524400",
                        "outline-variant": "#4d4635",
                        "on-primary-fixed": "#221b00",
                        "tertiary-fixed-dim": "#e9c400",
                        "tertiary-fixed": "#ffe16d",
                        "error": "#ffb4ab",
                        "surface-container-high": "#2a2a2a",
                        "on-secondary-fixed": "#1c1b1b",
                        "surface-dim": "#131313",
                        "secondary-fixed-dim": "#c8c6c5",
                        "on-tertiary-fixed-variant": "#544600",
                        "surface-container-highest": "#353534",
                        "on-primary-fixed-variant": "#544600",
                        "error-container": "#93000a",
                        "tertiary-container": "#d2b100",
                        "primary-container": "#d2b100",
                        "on-tertiary": "#3a3000",
                        "on-error": "#690005",
                        "surface-container": "#201f1f",
                        "primary": "#f1cc19",
                        "on-primary": "#3a3000",
                        "inverse-on-surface": "#313030",
                        "tertiary": "#f2cc00",
                        "surface-variant": "#353534",
                        "secondary-container": "#474746",
                        "outline": "#99907c",
                        "on-surface-variant": "#d0c5af",
                        "on-error-container": "#ffdad6",
                        "surface-bright": "#3a3939",
                        "primary-fixed-dim": "#e8c408",
                        "on-secondary": "#313030",
                        "inverse-surface": "#e5e2e1",
                        "secondary": "#c8c6c5",
                        "inverse-primary": "#705d00",
                        "secondary-fixed": "#e5e2e1",
                        "surface-tint": "#e8c408",
                        "primary-fixed": "#ffe16c",
                        "on-secondary-container": "#b7b5b4",
                        "on-background": "#e5e2e1",
                        "on-tertiary-container": "#534400",
                        "on-surface": "#e5e2e1",
                        "surface": "#131313",
                        "surface-container-lowest": "#0e0e0e",
                        "background": "#131313",
                        "surface-container-low": "#1c1b1b",
                        "on-secondary-fixed-variant": "#474746"
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
        body {
            background-color: #131313;
            color: #e5e2e1;
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .liquid-gold-gradient {
            background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%);
        }
        .text-glow {
            text-shadow: 0 0 20px rgba(241, 204, 25, 0.2);
        }
        input:focus + label,
        input:not(:placeholder-shown) + label {
            transform: translateY(-1.5rem) scale(0.85);
            color: #f1cc19;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col overflow-x-hidden selection:bg-primary selection:text-on-primary">
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-6 md:px-8 py-6 bg-neutral-950/60 backdrop-blur-3xl">
    <a class="text-2xl font-bold tracking-tighter text-yellow-500 font-headline" href="{{ url('/') }}">
        ILOGE
    </a>
    <div class="flex items-center gap-8">
        <a class="font-headline tracking-tight text-neutral-400 hover:text-yellow-400 transition-colors duration-300" href="{{ url('/contact') }}">Support</a>
    </div>
</nav>

<main class="flex-grow flex relative min-h-screen">
    <section class="hidden lg:flex lg:w-1/2 relative overflow-hidden">
        <div class="absolute inset-0 z-10 bg-gradient-to-r from-transparent to-surface"></div>
        <img alt="Executive Architecture" class="absolute inset-0 w-full h-full object-cover opacity-60 grayscale hover:grayscale-0 transition-all duration-1000" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUIOYTNl0pySpBQgxvt4bcN_Q6NADO6T0vQfjchUMDCDenxwSJZt4VxaxD2oB2WZRkgoC-luZq-4hMaGOLfksafIMc-BiZstmQNqddvsmxXG-Q0BpRUB2mlOfbD5T84QcoVWnFiBhJ6LNlI75nI4ayFP3aizsR6cbCACnaH3d7O0ZKHTt-f2kXY8I6iDCAWApEQZ-y9V7eTXYB--auUWwiikw-PMPtci3WQkj_1ZISD1wCHj2ggfVqjub9tFQlcY-6AEuEMDfMylN-"/>
        <div class="relative z-20 self-end p-20 max-w-2xl">
            <div class="mb-6 inline-flex items-center gap-2 px-3 py-1 rounded-full border border-primary/20 bg-primary/5 text-primary text-[10px] uppercase tracking-widest font-semibold">
                <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">verified_user</span>
                Identity Authentication Active
            </div>
            <h1 class="font-headline text-6xl font-extrabold tracking-tighter text-on-surface leading-none mb-6">
                A Legacy <br/><span class="text-primary text-glow">Refined.</span>
            </h1>
            <p class="font-body text-on-surface-variant text-lg leading-relaxed opacity-80">
                Access the exclusive digital infrastructure designed for global sovereign leaders. Your entry into the collective is secured by end-to-end sovereign encryption.
            </p>
        </div>
    </section>

    <section class="w-full lg:w-1/2 flex flex-col justify-center px-6 md:px-24 py-32 bg-surface">
        <div class="max-w-md w-full mx-auto lg:mx-0">
            <header class="mb-12">
                <h2 class="font-headline text-5xl font-extrabold tracking-tight text-on-surface mb-4">
                    Join the Collective
                </h2>
                <p class="font-body text-on-surface-variant tracking-wide">
                    Initialize your executive credentials for the Iloge portal.
                </p>
            </header>

            <form class="space-y-10" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="relative group">
                    <input class="block w-full bg-transparent border-0 border-b border-outline-variant/30 py-4 px-0 text-on-surface focus:ring-0 focus:border-primary transition-all duration-300 font-body text-lg placeholder-transparent" id="name" name="name" placeholder=" " type="text" value="{{ old('name') }}" required autofocus autocomplete="name"/>
                    <label class="absolute left-0 top-4 text-on-surface-variant transition-all duration-300 pointer-events-none font-label uppercase text-[10px] tracking-[0.2em] origin-left" for="name">
                        Name
                    </label>
                    @error('name')
                        <p class="mt-3 text-xs text-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative group">
                    <input class="block w-full bg-transparent border-0 border-b border-outline-variant/30 py-4 px-0 text-on-surface focus:ring-0 focus:border-primary transition-all duration-300 font-body text-lg placeholder-transparent" id="email" name="email" placeholder=" " type="email" value="{{ old('email') }}" required autocomplete="username"/>
                    <label class="absolute left-0 top-4 text-on-surface-variant transition-all duration-300 pointer-events-none font-label uppercase text-[10px] tracking-[0.2em] origin-left" for="email">
                        Executive Email
                    </label>
                    @error('email')
                        <p class="mt-3 text-xs text-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative group">
                    <input class="block w-full bg-transparent border-0 border-b border-outline-variant/30 py-4 px-0 text-on-surface focus:ring-0 focus:border-primary transition-all duration-300 font-body text-lg placeholder-transparent" id="password" name="password" placeholder=" " type="password" required autocomplete="new-password"/>
                    <label class="absolute left-0 top-4 text-on-surface-variant transition-all duration-300 pointer-events-none font-label uppercase text-[10px] tracking-[0.2em] origin-left" for="password">
                        Password
                    </label>
                    @error('password')
                        <p class="mt-3 text-xs text-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative group">
                    <input class="block w-full bg-transparent border-0 border-b border-outline-variant/30 py-4 px-0 text-on-surface focus:ring-0 focus:border-primary transition-all duration-300 font-body text-lg placeholder-transparent" id="password_confirmation" name="password_confirmation" placeholder=" " type="password" required autocomplete="new-password"/>
                    <label class="absolute left-0 top-4 text-on-surface-variant transition-all duration-300 pointer-events-none font-label uppercase text-[10px] tracking-[0.2em] origin-left" for="password_confirmation">
                        Confirm Password
                    </label>
                    @error('password_confirmation')
                        <p class="mt-3 text-xs text-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-6">
                    <button class="liquid-gold-gradient w-full py-5 rounded-md text-on-primary font-headline font-extrabold text-sm uppercase tracking-[0.25em] shadow-2xl hover:opacity-90 active:scale-[0.98] transition-all flex items-center justify-center gap-3" type="submit">
                        Request Credentials
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
            </form>

            <div class="mt-12 space-y-6">
                <div class="flex items-center gap-4 text-on-surface-variant">
                    <span class="material-symbols-outlined text-primary text-[20px]">encrypted</span>
                    <span class="font-body text-[12px] tracking-wide uppercase">End-to-End Sovereign Encryption</span>
                </div>
                <div class="pt-8 border-t border-outline-variant/10">
                    <a class="group flex items-center gap-2 text-on-surface hover:text-primary transition-colors font-label text-xs uppercase tracking-widest font-semibold" href="{{ route('login') }}">
                        <span class="material-symbols-outlined transition-transform group-hover:-translate-x-1">west</span>
                        Back to Login
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="w-full py-12 px-6 md:px-8 flex flex-col md:flex-row justify-between items-center gap-6 bg-neutral-950">
    <div class="text-yellow-500 font-black font-['Inter'] text-[10px] uppercase tracking-[0.2em]">
        &copy; 2026 Iloge. Designed &amp; developed by codewitheugene
    </div>
    <div class="flex flex-wrap justify-center gap-8">
        <a class="font-['Inter'] text-[10px] uppercase tracking-[0.2em] text-neutral-600 hover:text-neutral-300 transition-all" href="#">Privacy Policy</a>
        <a class="font-['Inter'] text-[10px] uppercase tracking-[0.2em] text-neutral-600 hover:text-neutral-300 transition-all" href="#">Terms of Service</a>
        <a class="font-['Inter'] text-[10px] uppercase tracking-[0.2em] text-neutral-600 hover:text-neutral-300 transition-all" href="#">Security Architecture</a>
    </div>
</footer>
</body>
</html>
