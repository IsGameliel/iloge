<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ILOGE EXECUTIVE PORTAL - Secure Entry</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700;800&amp;family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet"/>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .liquid-gold-gradient {
            background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%);
        }
        .glass-panel {
            background: rgba(32, 31, 31, 0.4);
            backdrop-filter: blur(20px);
        }
        .input-border-bottom {
            border-bottom: 1px solid rgba(77, 70, 53, 0.3);
            transition: border-color 0.3s ease;
        }
        .input-border-bottom:focus-within {
            border-color: #f1cc19;
        }
        .rim-light {
            box-shadow: inset 0.5px 0.5px 0px 0px rgba(58, 57, 57, 1);
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface selection:bg-primary/30 min-h-screen overflow-x-hidden flex flex-col">
<main class="flex-grow flex items-center justify-center relative w-full overflow-hidden py-16">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-tr from-surface via-surface/90 to-surface-container-low/50 z-10"></div>
        <img alt="Modern dark glass skyscraper at night with warm golden lobby light" class="w-full h-full object-cover grayscale opacity-40" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbJbDUlEe6OoWMSNV5ZAClQhH3K51DynvcHGu1cDTBOGfLXLaHDPEZYCUdtjUpG4hqSUguTjv1s5p5cpkOtNZtPY56rD9sXKfrcEvKwvMn9Zi2x-MBUThGcuFGHYoXhiXTlf7g4FP0XZt7zkgFa0cUtEGD0IFBgREszqcW476HL5cHRQso6uloILAyRC4YNltltroSWWc78HAcflMzC4zHTuKr4sc4cNBmvsYA06Jm3U697S2lFtfR4DfAT5JnJ1jnToXCsi8l2Diq"/>
    </div>

    <div class="relative z-20 container mx-auto px-6 md:px-8 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center max-w-7xl">
        <section class="lg:col-span-7 flex flex-col items-start gap-8">
            <div class="flex flex-col">
                <a class="text-primary font-headline font-extrabold text-6xl md:text-7xl tracking-tighter mb-4" href="{{ url('/') }}">ILOGE</a>
                <h1 class="text-on-surface font-headline font-light text-4xl md:text-5xl lg:text-6xl tracking-tight leading-[1.1]">
                    Executive Gateway
                </h1>
                <div class="w-16 h-1 liquid-gold-gradient mt-8"></div>
            </div>
            <p class="max-w-md text-on-surface-variant font-light text-lg leading-relaxed">
                Access the strategic core of Iloge operations. Secure authentication for verified executive members only.
            </p>
        </section>

        <section class="lg:col-span-5 w-full flex justify-end">
            <div class="glass-panel w-full max-w-md p-8 md:p-12 rounded-xl rim-light border border-outline-variant/10">
                @if (session('status'))
                    <div class="mb-8 rounded-md border border-primary/20 bg-primary/10 px-4 py-3 text-sm text-primary">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="space-y-10" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="relative group">
                        <label class="block text-[10px] uppercase tracking-[0.2em] text-outline font-semibold mb-2 group-focus-within:text-primary transition-colors" for="email">Corporate Email</label>
                        <div class="input-border-bottom flex items-center gap-3 py-2">
                            <span class="material-symbols-outlined text-outline group-focus-within:text-primary transition-colors text-xl">alternate_email</span>
                            <input id="email" name="email" class="bg-transparent border-none focus:ring-0 w-full text-on-surface placeholder:text-neutral-700 text-sm py-1 font-body" placeholder="name@iloge-executive.com" type="email" value="{{ old('email') }}" required autofocus autocomplete="username"/>
                        </div>
                        @error('email')
                            <p class="mt-3 text-xs text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="relative group">
                        <label class="block text-[10px] uppercase tracking-[0.2em] text-outline font-semibold mb-2 group-focus-within:text-primary transition-colors" for="password">Strategy Key</label>
                        <div class="input-border-bottom flex items-center gap-3 py-2">
                            <span class="material-symbols-outlined text-outline group-focus-within:text-primary transition-colors text-xl">shield_lock</span>
                            <input id="password" name="password" class="bg-transparent border-none focus:ring-0 w-full text-on-surface placeholder:text-neutral-700 text-sm py-1 font-body" placeholder="••••••••••••" type="password" required autocomplete="current-password"/>
                        </div>
                        @error('password')
                            <p class="mt-3 text-xs text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <label class="flex items-center gap-3 text-[10px] uppercase tracking-[0.15em] text-outline hover:text-on-surface-variant transition-colors">
                        <input id="remember_me" type="checkbox" class="rounded border-outline-variant bg-transparent text-primary focus:ring-primary focus:ring-offset-0" name="remember">
                        Remember Device
                    </label>

                    <div class="space-y-6 pt-2">
                        <button class="liquid-gold-gradient w-full py-4 rounded-md flex items-center justify-center gap-3 group active:scale-[0.98] transition-all shadow-xl shadow-primary/10" type="submit">
                            <span class="text-on-primary font-headline font-extrabold text-sm tracking-widest uppercase">Secure Entry</span>
                            <span class="material-symbols-outlined text-on-primary text-xl" style="font-variation-settings: 'FILL' 1;">lock</span>
                        </button>
                        <div class="flex flex-col items-center gap-4">
                            @if (Route::has('password.request'))
                                <a class="text-[10px] uppercase tracking-[0.15em] text-outline hover:text-primary transition-colors" href="{{ route('password.request') }}">Forgot Password</a>
                            @endif
                            <div class="w-8 h-[1px] bg-outline-variant/30"></div>
                            @if (Route::has('register'))
                                <a class="text-[11px] font-semibold text-primary hover:text-tertiary-fixed transition-colors flex items-center gap-2" href="{{ route('register') }}">
                                    Request Executive Access
                                    <span class="material-symbols-outlined text-xs">arrow_forward</span>
                                </a>
                            @else
                                <a class="text-[11px] font-semibold text-primary hover:text-tertiary-fixed transition-colors flex items-center gap-2" href="{{ url('/contact') }}">
                                    Request Executive Access
                                    <span class="material-symbols-outlined text-xs">arrow_forward</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-primary/10 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute -top-24 right-1/4 w-[500px] h-[500px] bg-primary/5 blur-[150px] rounded-full pointer-events-none"></div>
</main>

<footer class="w-full py-10 md:py-12 px-6 md:px-8 flex flex-col md:flex-row justify-between items-center gap-6 bg-neutral-950 relative z-30">
    <div class="flex flex-col md:flex-row items-center gap-4 text-center md:text-left">
        <span class="text-yellow-500 font-black font-headline tracking-tighter">ILOGE EXECUTIVE</span>
        <span class="text-neutral-600 hidden md:block">|</span>
        <p class="font-['Inter'] text-[10px] uppercase tracking-[0.2em] text-neutral-600">&copy; 2026 Iloge. Designed &amp; developed by codewitheugene</p>
    </div>
    <div class="flex flex-wrap justify-center gap-6 md:gap-8">
        <a class="font-['Inter'] text-[10px] uppercase tracking-[0.2em] text-neutral-600 hover:text-neutral-300 transition-all" href="#">Privacy Policy</a>
        <a class="font-['Inter'] text-[10px] uppercase tracking-[0.2em] text-neutral-600 hover:text-neutral-300 transition-all" href="#">Terms of Service</a>
        <a class="font-['Inter'] text-[10px] uppercase tracking-[0.2em] text-neutral-600 hover:text-neutral-300 transition-all" href="#">Security Architecture</a>
    </div>
</footer>
</body>
</html>
