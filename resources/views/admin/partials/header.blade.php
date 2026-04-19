<header class="fixed right-0 top-0 z-40 flex h-20 w-full items-center justify-between border-b border-outline-variant/10 bg-[#131313]/60 px-4 backdrop-blur-3xl sm:px-6 lg:w-[calc(100%-18rem)] lg:px-8">
    <div class="flex min-w-0 items-center gap-4 lg:gap-8">
        <a class="font-headline text-base font-black uppercase tracking-tight text-primary lg:hidden" href="{{ route('dashboard') }}">Iloge</a>
        <h2 class="font-headline hidden truncate text-xs font-bold uppercase tracking-widest text-primary sm:block">
            @yield('headerTitle', 'Dashboard')
        </h2>
        <label class="relative hidden max-w-md flex-grow md:block">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-lg text-on-surface-variant" aria-hidden="true">search</span>
            <span class="sr-only">@yield('searchLabel', 'Search dashboard')</span>
            <input class="w-64 rounded-full border-none bg-surface-container-low py-2 pl-10 pr-6 text-sm text-on-surface placeholder:text-on-surface-variant/40 focus:ring-1 focus:ring-primary/40" placeholder="@yield('searchPlaceholder', 'Search insights...')" type="search">
        </label>
    </div>

    <div class="flex items-center gap-4 sm:gap-6 lg:gap-8">
        @hasSection('headerAction')
            @yield('headerAction')
        @endif

        <button type="button" class="relative text-[#e5e2e1]/70 transition-colors hover:text-primary" aria-label="Notifications">
            <span class="material-symbols-outlined" aria-hidden="true">notifications</span>
            <span class="absolute right-0 top-0 h-2 w-2 rounded-full bg-primary"></span>
        </button>
        <a class="text-[#e5e2e1]/70 transition-colors hover:text-primary" href="{{ route('profile.edit') }}" aria-label="Settings">
            <span class="material-symbols-outlined" aria-hidden="true">settings</span>
        </a>
        <form class="hidden sm:block" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-[#e5e2e1]/70 transition-colors hover:text-primary" aria-label="Log out">
                <span class="material-symbols-outlined" aria-hidden="true">logout</span>
            </button>
        </form>
        <div class="hidden h-8 w-8 overflow-hidden rounded-full bg-surface-container-high sm:block">
            <img
                alt="Executive Admin"
                class="h-full w-full object-cover"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDf_dzl8ursXiKd2yp7rN81_tQ4EOJsrVzyIG8AJZ9-FX2f0gBOgNFDr9ZuuDHqUKoqmT4ZX6HBUJG5_Yk6wGKQoEXBrTu0XX4nl4SdjGEMJP4hNADpcy4sDjjpX4mDJLaoOFLMu1girphsyEHCkwxVtVD61caK7GtikYtRxpNtqHW5prSAoH6v6ycXHDiHy2BNuVgXDQ3ru309wrjVVsnE_jomuVUv6t1OQ_YMeRt745e3HcV3h2iODu78D_jD0PXkUZ5yIMhIemZ8"
            >
        </div>
    </div>
</header>
