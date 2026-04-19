<!DOCTYPE html>
<html class="dark" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>The Executive Library | ILOGE</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-variant": "#353534",
                        "on-tertiary": "#3a3000",
                        "inverse-surface": "#e5e2e1",
                        "tertiary-fixed": "#ffe16d",
                        "primary-fixed": "#ffe16c",
                        "on-tertiary-container": "#534400",
                        "on-primary-fixed": "#221b00",
                        "on-background": "#e5e2e1",
                        "on-secondary-fixed": "#1c1b1b",
                        "surface": "#131313",
                        "on-surface": "#e5e2e1",
                        "on-primary-fixed-variant": "#544600",
                        "surface-bright": "#3a3939",
                        "surface-dim": "#131313",
                        "secondary-container": "#474746",
                        "inverse-on-surface": "#313030",
                        "error-container": "#93000a",
                        "secondary-fixed": "#e5e2e1",
                        "tertiary-container": "#d2b100",
                        "secondary": "#c8c6c5",
                        "primary": "#f1cc19",
                        "on-secondary-container": "#b7b5b4",
                        "primary-container": "#d2b100",
                        "error": "#ffb4ab",
                        "surface-container-lowest": "#0e0e0e",
                        "on-primary-container": "#524400",
                        "tertiary": "#f2cc00",
                        "on-tertiary-fixed-variant": "#544600",
                        "on-primary": "#3a3000",
                        "on-secondary": "#313030",
                        "inverse-primary": "#705d00",
                        "secondary-fixed-dim": "#c8c6c5",
                        "surface-container": "#201f1f",
                        "primary-fixed-dim": "#e8c408",
                        "outline": "#99907c",
                        "on-tertiary-fixed": "#221b00",
                        "tertiary-fixed-dim": "#e9c400",
                        "on-error-container": "#ffdad6",
                        "on-surface-variant": "#d0c5af",
                        "on-secondary-fixed-variant": "#474746",
                        "surface-tint": "#e8c408",
                        "surface-container-highest": "#353534",
                        "surface-container-low": "#1c1b1b",
                        "surface-container-high": "#2a2a2a",
                        "outline-variant": "#4d4635",
                        "background": "#131313"
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
        .glass-nav {
            background: rgba(19, 19, 19, 0.6);
            backdrop-filter: blur(30px);
        }
        .liquid-gold {
            background: linear-gradient(135deg, #f1cc19 0%, #d2b100 100%);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .text-glow {
            text-shadow: 0 0 20px rgba(241, 204, 25, 0.3);
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
            <a class="text-[#f1cc19] border-b border-[#f1cc19] pb-1" href="{{ url('/shop') }}">Shop</a>
            <a class="text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300" href="{{ url('/contact') }}">Contact</a>
        </div>
        <div class="flex items-center gap-4 md:gap-6">
            <a class="relative text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300 scale-95 active:scale-100 transition-transform" href="#favorites" aria-label="Favorites">
                <span class="material-symbols-outlined">favorite</span>
                @if ($favoriteIds->isNotEmpty())
                    <span class="absolute -right-2 -top-2 flex h-4 min-w-4 items-center justify-center rounded-full bg-primary px-1 text-[10px] font-bold text-on-primary">{{ $favoriteIds->count() }}</span>
                @endif
            </a>
            <a class="relative text-[#e5e2e1]/70 hover:text-[#f1cc19] transition-colors duration-300 scale-95 active:scale-100 transition-transform" href="#cart" aria-label="Shopping cart">
                <span class="material-symbols-outlined">shopping_cart</span>
                @if ($cartCount > 0)
                    <span class="absolute -right-2 -top-2 flex h-4 min-w-4 items-center justify-center rounded-full bg-primary px-1 text-[10px] font-bold text-on-primary">{{ $cartCount }}</span>
                @endif
            </a>
            <a class="hidden sm:inline-flex bg-[#f1cc19] text-[#3a3000] px-5 md:px-6 py-2 rounded-md font-headline font-bold uppercase text-xs md:text-sm tracking-wider scale-95 active:scale-100 transition-transform hover:shadow-[0_0_15px_rgba(241,204,25,0.4)]" href="#library-service">
                Executive Access
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
                        <a class="text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="{{ url('/shop') }}">Shop</a>
                        <a class="text-[#e5e2e1]/80 hover:text-[#f1cc19] py-3 border-t border-white/5 transition-colors" href="{{ url('/contact') }}">Contact</a>
                    </div>
                </div>
            </details>
        </div>
    </div>
</nav>

<main class="pt-20">
    @if (session('success') || $errors->any())
        <div class="fixed left-1/2 top-28 z-50 w-[min(42rem,calc(100vw-2rem))] -translate-x-1/2 rounded-xl border {{ session('success') ? 'border-primary/30 bg-primary/10 text-primary' : 'border-error/30 bg-error-container/30 text-on-error-container' }} px-5 py-4 text-sm font-semibold shadow-2xl backdrop-blur-2xl">
            @if (session('success'))
                {{ session('success') }}
            @else
                {{ $errors->first() }}
            @endif
        </div>
    @endif

    <section class="relative h-[819px] w-full overflow-hidden flex items-center px-6 md:px-24">
        <div class="absolute inset-0 z-0">
            <img alt="Cinematic library view" class="w-full h-full object-cover opacity-40 grayscale" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDscfOtVtxsaHdYvXHC-rW7OBPEovEWKgclMbuUL0qqGXhIhm6rOaj6FvsWybV8TiDX0f22I3FmOAA3NwHzcBpSzHPPNYdPTr7YfKdEoVOTv8QKXUrxO4ZVWtJt52k354qyAMNG5pPKny-znNMGeO-iYCK_U0FkQljpsZYeETDok-VLVklr07GtbTiel20TljmSQi5RWbgq5yUrNQt3VCf-ALpToan3r_9U7cxWnloLDiK_S_hulqPmBsmOBZzhxJGFDy6Kme_8QYw9"/>
            <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
        </div>
        <div class="relative z-10 max-w-4xl">
            <span class="text-primary font-headline tracking-[0.4em] uppercase text-sm mb-4 block">Curation of Authority</span>
            <h1 class="text-6xl md:text-8xl font-headline font-extrabold tracking-tighter leading-[0.9] text-on-surface mb-8">
                The <br/><span class="text-glow">Executive</span> <br/>Library
            </h1>
            <p class="text-on-surface-variant max-w-lg text-lg font-light leading-relaxed mb-10 border-l-2 border-primary/30 pl-6">
                A strictly curated collection of intellectual assets designed for the modern architect of industry. From definitive hardcovers to digital blueprints.
            </p>
            <div class="flex gap-6">
                <a class="liquid-gold text-on-primary px-10 py-4 rounded-md font-headline font-extrabold uppercase tracking-widest text-sm transition-transform active:scale-95" href="#products">
                    Browse Collection
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 md:py-32 px-6 md:px-24 bg-surface" id="products">
        <div class="flex justify-between items-end mb-16">
            <div>
                <h2 class="text-4xl font-headline font-bold tracking-tight text-on-surface mb-2">Essential Acquisitions</h2>
                <div class="h-1 w-24 bg-primary"></div>
            </div>
            <div class="hidden md:block text-on-surface-variant text-sm tracking-[0.2em] uppercase">
                Sorted by Strategic Impact
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            @forelse ($shopProducts as $product)
                <article class="group relative flex flex-col">
                    <div class="relative aspect-[3/4] overflow-hidden rounded-xl bg-surface-container-low mb-6 border-t-[0.5px] border-l-[0.5px] border-surface-bright/20">
                        <img alt="{{ $product->name }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-80" src="{{ $product->image_url }}"/>
                        <div class="absolute top-4 right-4 z-20">
                            <form method="post" action="{{ route('shop.favorites.toggle', $product) }}">
                                @csrf
                                <button class="w-10 h-10 rounded-full bg-surface/80 backdrop-blur-md flex items-center justify-center {{ $favoriteIds->contains($product->id) ? 'text-primary' : 'text-on-surface hover:text-primary' }} transition-colors" type="submit" aria-label="Favorite {{ $product->name }}">
                                    <span class="material-symbols-outlined" style="{{ $favoriteIds->contains($product->id) ? 'font-variation-settings: \'FILL\' 1, \'wght\' 300, \'GRAD\' 0, \'opsz\' 24;' : '' }}">favorite</span>
                                </button>
                            </form>
                            </button>
                        </div>
                        @if ($product->is_featured)
                            <span class="absolute left-4 top-4 z-20 rounded-full bg-primary px-3 py-1 text-[10px] font-black uppercase tracking-widest text-on-primary">Featured</span>
                        @endif
                    </div>
                    <div class="px-2">
                        <h2 class="text-xl font-headline font-bold text-on-surface mb-1 uppercase tracking-tight">{{ $product->name }}</h2>
                        <p class="text-primary font-headline text-sm font-semibold tracking-widest mb-4 italic">{{ $product->category }}</p>
                        <p class="text-on-surface-variant text-sm mb-6 line-clamp-2 font-light">{{ $product->description }}</p>
                        <div class="flex items-center justify-between mt-auto gap-4">
                            <span class="text-2xl font-headline font-bold text-on-surface">${{ number_format((float) $product->price, 2) }}</span>
                            <form method="post" action="{{ route('shop.cart.add', $product) }}">
                                @csrf
                                <button class="liquid-gold text-on-primary px-6 py-2.5 rounded-lg font-headline font-bold text-xs uppercase tracking-tighter transition-all hover:shadow-[0_10px_20px_-10px_rgba(241,204,25,0.5)] disabled:cursor-not-allowed disabled:opacity-50" type="submit" @disabled($product->stock <= 0)>
                                    {{ $product->stock > 0 ? 'Add to Cart' : 'Sold Out' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </article>
            @empty
                <div class="md:col-span-3 rounded-xl border border-outline-variant/20 bg-surface-container-low p-12 text-center">
                    <span class="material-symbols-outlined text-5xl text-primary">shopping_bag</span>
                    <h2 class="mt-6 text-2xl font-headline font-bold text-on-surface">No Materials Available</h2>
                    <p class="mx-auto mt-3 max-w-md text-sm text-on-surface-variant">Published books and materials from the dashboard will appear here automatically.</p>
                </div>
            @endforelse
        </div>

        @if ($shopProducts->hasPages())
            <div class="mt-14 flex justify-end gap-3">
                @if ($shopProducts->previousPageUrl())
                    <a class="rounded border border-outline-variant/30 px-4 py-2 text-xs font-bold uppercase tracking-widest text-on-surface-variant transition-colors hover:border-primary hover:text-primary" href="{{ $shopProducts->previousPageUrl() }}#products">Prev</a>
                @endif
                @if ($shopProducts->nextPageUrl())
                    <a class="rounded border border-primary px-4 py-2 text-xs font-bold uppercase tracking-widest text-primary transition-colors hover:bg-primary hover:text-on-primary" href="{{ $shopProducts->nextPageUrl() }}#products">Next</a>
                @endif
            </div>
        @endif
    </section>

    <section class="grid grid-cols-1 gap-10 px-6 pb-24 md:px-24 lg:grid-cols-[1.1fr_0.9fr]" id="cart">
        <div class="rounded-xl border border-outline-variant/10 bg-surface-container-low p-6 md:p-8">
            <div class="mb-8 flex items-end justify-between gap-6">
                <div>
                    <h2 class="font-headline text-3xl font-bold tracking-tight text-on-surface">Cart</h2>
                    <p class="mt-2 text-sm text-on-surface-variant">{{ $cartCount }} {{ \Illuminate\Support\Str::plural('item', $cartCount) }} selected</p>
                </div>
                <span class="font-headline text-2xl font-bold text-primary">${{ number_format($cartSubtotal, 2) }}</span>
            </div>

            <div class="space-y-5">
                @forelse ($cartItems as $item)
                    <div class="flex flex-col gap-5 rounded-lg bg-surface-container p-4 sm:flex-row sm:items-center">
                        <img class="h-24 w-20 rounded-lg object-cover" src="{{ $item['product']->image_url }}" alt="{{ $item['product']->name }}">
                        <div class="min-w-0 flex-1">
                            <h3 class="font-headline text-lg font-bold text-on-surface">{{ $item['product']->name }}</h3>
                            <p class="mt-1 text-xs uppercase tracking-widest text-primary">{{ $item['product']->category }}</p>
                            <p class="mt-2 text-sm text-on-surface-variant">${{ number_format((float) $item['product']->price, 2) }} each</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <form method="post" action="{{ route('shop.cart.update', $item['product']) }}" class="flex items-center gap-2">
                                @csrf
                                @method('patch')
                                <input class="w-20 rounded-lg border-white/10 bg-surface-container-high text-center text-sm text-on-surface focus:border-primary focus:ring-primary" name="quantity" min="0" max="{{ $item['product']->stock }}" type="number" value="{{ $item['quantity'] }}">
                                <button class="rounded-lg border border-outline-variant/30 px-3 py-2 text-[10px] font-bold uppercase tracking-widest text-on-surface-variant transition-colors hover:border-primary hover:text-primary" type="submit">Update</button>
                            </form>
                            <form method="post" action="{{ route('shop.cart.remove', $item['product']) }}">
                                @csrf
                                @method('delete')
                                <button class="rounded-lg px-3 py-2 text-error transition-colors hover:bg-error-container/20" type="submit" aria-label="Remove {{ $item['product']->name }}">
                                    <span class="material-symbols-outlined text-base">delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <div class="rounded-lg border border-dashed border-outline-variant/30 p-8 text-center text-sm text-on-surface-variant">
                        Your cart is empty. Add a book or material from the collection above.
                    </div>
                @endforelse
            </div>
        </div>

        <div class="rounded-xl border border-outline-variant/10 bg-surface-container-lowest p-6 md:p-8">
            <h2 class="font-headline text-3xl font-bold tracking-tight text-on-surface">Checkout</h2>
            <p class="mt-2 text-sm text-on-surface-variant">Submit your order request. Payment and delivery confirmation can be handled after review.</p>

            <form class="mt-8 space-y-5" method="post" action="{{ route('shop.checkout') }}">
                @csrf
                <label class="block space-y-2">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Full Name</span>
                    <input class="w-full rounded-lg border-white/10 bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:border-primary focus:ring-primary" name="customer_name" value="{{ old('customer_name') }}" required>
                </label>
                <label class="block space-y-2">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Email</span>
                    <input class="w-full rounded-lg border-white/10 bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:border-primary focus:ring-primary" name="customer_email" type="email" value="{{ old('customer_email') }}" required>
                </label>
                <label class="block space-y-2">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Phone</span>
                    <input class="w-full rounded-lg border-white/10 bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:border-primary focus:ring-primary" name="customer_phone" value="{{ old('customer_phone') }}">
                </label>
                <label class="block space-y-2">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface/50">Delivery Address</span>
                    <textarea class="w-full resize-none rounded-lg border-white/10 bg-surface-container-high px-4 py-3 text-sm text-on-surface placeholder:text-on-surface/30 focus:border-primary focus:ring-primary" name="delivery_address" rows="3">{{ old('delivery_address') }}</textarea>
                </label>
                <button class="liquid-gold w-full rounded-xl py-4 font-headline text-xs font-extrabold uppercase tracking-widest text-on-primary transition-transform active:scale-[0.98] disabled:cursor-not-allowed disabled:opacity-50" type="submit" @disabled($cartCount === 0)>
                    Checkout ${{ number_format($cartSubtotal, 2) }}
                </button>
            </form>
        </div>
    </section>

    <section class="px-6 pb-24 md:px-24" id="favorites">
        <div class="mb-10 flex items-end justify-between">
            <div>
                <h2 class="font-headline text-3xl font-bold tracking-tight text-on-surface">Favorites</h2>
                <p class="mt-2 text-sm text-on-surface-variant">Saved books and materials for later review.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            @forelse ($favoriteProducts as $product)
                <article class="rounded-xl border border-outline-variant/10 bg-surface-container-low p-5">
                    <img class="mb-5 aspect-[4/3] w-full rounded-lg object-cover" src="{{ $product->image_url }}" alt="{{ $product->name }}">
                    <h3 class="font-headline text-lg font-bold text-on-surface">{{ $product->name }}</h3>
                    <p class="mt-1 text-xs uppercase tracking-widest text-primary">{{ $product->category }}</p>
                    <div class="mt-5 flex items-center justify-between gap-3">
                        <span class="font-headline text-xl font-bold">${{ number_format((float) $product->price, 2) }}</span>
                        <form method="post" action="{{ route('shop.cart.add', $product) }}">
                            @csrf
                            <button class="rounded-lg bg-primary px-4 py-2 text-[10px] font-bold uppercase tracking-widest text-on-primary disabled:opacity-50" type="submit" @disabled($product->stock <= 0)>Add</button>
                        </form>
                    </div>
                </article>
            @empty
                <div class="md:col-span-3 rounded-xl border border-dashed border-outline-variant/30 p-8 text-center text-sm text-on-surface-variant">
                    Tap the heart on any product to save it here.
                </div>
            @endforelse
        </div>
    </section>

    <section class="py-24 px-6 md:px-24 bg-surface-container-lowest border-t border-outline-variant/10" id="library-service">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="relative">
                <h2 class="text-5xl font-headline font-bold tracking-tight text-on-surface mb-8 leading-tight">
                    Global Shipping &amp; <br/><span class="text-primary italic font-light">White-Glove Service</span>
                </h2>
                <p class="text-on-surface-variant text-lg font-light leading-relaxed mb-8 max-w-md">
                    Every physical acquisition is handled with industrial precision. We provide worldwide discreet shipping and a dedicated concierge for all library members.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4 text-on-surface/80 uppercase tracking-widest text-xs font-bold">
                        <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                        Priority Courier Dispatch
                    </li>
                    <li class="flex items-center gap-4 text-on-surface/80 uppercase tracking-widest text-xs font-bold">
                        <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                        Custom Archival Packaging
                    </li>
                    <li class="flex items-center gap-4 text-on-surface/80 uppercase tracking-widest text-xs font-bold">
                        <span class="w-1.5 h-1.5 bg-primary rounded-full"></span>
                        Personalized Inscription Service
                    </li>
                </ul>
            </div>
            <div class="relative grid grid-cols-2 gap-4 h-[400px]">
                <div class="bg-surface-container-high rounded-xl overflow-hidden relative">
                    <img alt="Luxury packaging" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7b1vsWSqP8-I16wzgo5UWpzc3tRGt2omzfB7Fo2d2wwinv1lXc3DSdcfVygMGvfJG5trTil4guUISDt67UB46NjKoDJKgDK1Rwxx8SxHz7I6k9rXQm-5nwUAg9ovE0t2Ew0_hS2dYg82bChjyvstict721ezlUN2tUtsAH9uU3NkmGfRSEhqQAGt2dirSN7tJR8ioY8wMEhHmZGLMZQFPJb1WQICf_QEQTM2No12pR3ox5f6WIbztKjEFPqmjYxT4iPT-5Iyoiozz"/>
                </div>
                <div class="bg-surface-container-high rounded-xl overflow-hidden relative mt-12">
                    <img alt="Global logistics" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqar36RbEWw0kdj-inGnRMcoWl22aWTANcLYItbcUBa5lK9XZ8gcSfbVNPTBLxPadFzqmzS0xUfPTTQEBR2RMnjyxwPDwHVzo66kWhv576unX-YaivQWqI2eQmOT4K9PekGXCT6E1-5lWkXqL5bIIBTsvq3Y6GEd1E0exJra2d4DLaP75SAT8FKP4LaxdNR0SoE2ej2b7NgTW1cydiky6nY5AwHtk5o1Db8TLbHFqVvL6HFXGvlDvfSJ2sZJ9gPn-6M2ASiHVC8ROa"/>
                </div>
            </div>
        </div>
    </section>

    <div class="fixed right-10 top-1/2 -translate-y-1/2 hidden xl:flex flex-col gap-6 z-40">
        <div class="h-20 w-px bg-primary/20 mx-auto"></div>
        <a class="group relative flex items-center justify-end" href="{{ url('/') }}">
            <span class="absolute right-8 opacity-0 group-hover:opacity-100 transition-opacity text-[10px] uppercase tracking-[0.3em] font-bold text-primary">Home</span>
            <div class="w-2 h-2 bg-on-surface/20 rounded-full group-hover:bg-primary transition-colors"></div>
        </a>
        <a class="group relative flex items-center justify-end" href="{{ url('/speaker') }}">
            <span class="absolute right-8 opacity-0 group-hover:opacity-100 transition-opacity text-[10px] uppercase tracking-[0.3em] font-bold text-primary">About</span>
            <div class="w-2 h-2 bg-on-surface/20 rounded-full group-hover:bg-primary transition-colors"></div>
        </a>
        <a class="group relative flex items-center justify-end" href="{{ url('/shop') }}">
            <span class="absolute right-8 opacity-100 transition-opacity text-[10px] uppercase tracking-[0.3em] font-bold text-primary">Shop</span>
            <div class="w-2 h-2 bg-primary rounded-full"></div>
        </a>
        <a class="group relative flex items-center justify-end" href="{{ url('/blog') }}">
            <span class="absolute right-8 opacity-0 group-hover:opacity-100 transition-opacity text-[10px] uppercase tracking-[0.3em] font-bold text-primary">Diary</span>
            <div class="w-2 h-2 bg-on-surface/20 rounded-full group-hover:bg-primary transition-colors"></div>
        </a>
        <div class="h-20 w-px bg-primary/20 mx-auto"></div>
    </div>
</main>

<footer class="w-full py-12 px-6 md:px-8 bg-[#0e0e0e] border-t border-[#4d4635]/10 flex flex-col md:flex-row justify-between items-center gap-6">
    <a class="text-[#e5e2e1] font-headline font-bold uppercase tracking-widest text-lg" href="{{ url('/') }}">THE ARCHITECT</a>
    <div class="flex flex-wrap justify-center gap-8">
        <a class="font-['Inter'] text-xs tracking-widest text-[#e5e2e1]/50 uppercase hover:text-[#e5e2e1] transition-all" href="{{ url('/leader') }}">Strategic Advisory</a>
        <a class="font-['Inter'] text-xs tracking-widest text-[#e5e2e1]/50 uppercase hover:text-[#e5e2e1] transition-all" href="#">Privacy Protocol</a>
        <a class="font-['Inter'] text-xs tracking-widest text-[#e5e2e1]/50 uppercase hover:text-[#e5e2e1] transition-all" href="#">Terms of Authority</a>
    </div>
    <div class="font-['Inter'] text-xs tracking-widest text-[#e5e2e1]/50 uppercase text-center md:text-right">
        &copy; 2026 Iloge. Designed &amp; developed by codewitheugene
    </div>
</footer>

<nav class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center h-16 bg-[#131313]/80 backdrop-blur-xl border-t border-[#4d4635]/15 shadow-[0_-20px_40px_rgba(0,0,0,0.4)] z-50">
    <a class="flex flex-col items-center justify-center text-[#e5e2e1]/40 pt-2 hover:text-[#f1cc19]/80 active:opacity-70 transition-opacity" href="{{ url('/') }}">
        <span class="material-symbols-outlined">shutter_speed</span>
        <span class="font-['Inter'] text-[10px] font-medium uppercase tracking-widest mt-1">Aura</span>
    </a>
    <a class="flex flex-col items-center justify-center text-[#e5e2e1]/40 pt-2 hover:text-[#f1cc19]/80 active:opacity-70 transition-opacity" href="#products">
        <span class="material-symbols-outlined">auto_awesome_motion</span>
        <span class="font-['Inter'] text-[10px] font-medium uppercase tracking-widest mt-1">Vault</span>
    </a>
    <a class="flex flex-col items-center justify-center text-[#e5e2e1]/40 pt-2 hover:text-[#f1cc19]/80 active:opacity-70 transition-opacity" href="#favorites">
        <span class="material-symbols-outlined">favorite</span>
        <span class="font-['Inter'] text-[10px] font-medium uppercase tracking-widest mt-1">Curated</span>
    </a>
    <a class="flex flex-col items-center justify-center text-[#f1cc19] bg-[#f1cc19]/5 rounded-t-2xl pt-2 active:opacity-70 transition-opacity" href="#cart">
        <span class="material-symbols-outlined">shopping_bag</span>
        <span class="font-['Inter'] text-[10px] font-medium uppercase tracking-widest mt-1">Order</span>
    </a>
</nav>
</body>
</html>
