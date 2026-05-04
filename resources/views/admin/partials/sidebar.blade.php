@php
    $activeAdminPage = trim($__env->yieldContent('activeAdminPage', 'dashboard'));

    $navItems = [
        ['key' => 'dashboard', 'label' => 'Overview', 'icon' => 'dashboard', 'route' => 'dashboard'],
        ['key' => 'blog', 'label' => 'Blog Management', 'icon' => 'edit_note', 'route' => 'dashboard.blog'],
        ['key' => 'gallery', 'label' => 'Gallery Updates', 'icon' => 'photo_library', 'route' => 'dashboard.gallery'],
        ['key' => 'podcast', 'label' => 'Podcast Curation', 'icon' => 'mic', 'route' => 'dashboard.podcast'],
        ['key' => 'Shop', 'label' => 'Shop Management', 'icon' => 'shopping_cart', 'route' => 'dashboard.shop'],
        ['key' => 'customers', 'label' => 'Customers', 'icon' => 'group', 'route' => 'dashboard.customers'],
        ['key' => 'subscribers', 'label' => 'Subscribers', 'icon' => 'mark_email_read', 'route' => 'dashboard.subscribers'],
    ];
@endphp

<aside class="fixed left-0 top-0 z-50 hidden h-screen w-72 flex-col border-r border-[#4d4635]/15 bg-[#131313] p-6 shadow-[40px_0_40px_-10px_rgba(229,226,225,0.05)] lg:flex">
    <div class="mb-10 flex items-center gap-3">
        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-primary-container">
            <span class="material-symbols-outlined text-xl text-on-primary" aria-hidden="true">token</span>
        </div>
        <div>
            <h1 class="font-headline text-xl font-black uppercase tracking-tight text-primary">Iloge</h1>
            <p class="font-headline text-[10px] font-bold uppercase tracking-widest text-primary/70">Executive Portal</p>
        </div>
    </div>

    <button type="button" class="liquid-gold mb-10 flex w-full items-center justify-center gap-2 rounded-lg px-6 py-4 font-headline text-xs font-bold uppercase tracking-widest text-on-primary transition-transform active:scale-[0.98]">
        <span class="material-symbols-outlined text-sm" aria-hidden="true">add_circle</span>
        Create New
    </button>

    <nav class="flex-1 space-y-2" aria-label="Executive portal">
        @foreach ($navItems as $item)
            @php
                $isActive = $activeAdminPage === $item['key'];
            @endphp
            <a
                class="{{ $isActive ? 'bg-gradient-to-r from-primary/10 to-transparent font-bold text-primary' : 'text-[#e5e2e1]/60 hover:bg-[#2a2a2a]/40 hover:text-[#e5e2e1]' }} flex items-center gap-4 rounded-lg px-4 py-3 transition-all duration-300"
                href="{{ route($item['route']) }}"
                @if ($isActive) aria-current="page" @endif
            >
                <span class="material-symbols-outlined {{ $isActive ? 'filled-icon' : '' }}" aria-hidden="true">{{ $item['icon'] }}</span>
                <span class="font-headline text-sm tracking-tight">{{ $item['label'] }}</span>
            </a>
        @endforeach
    </nav>

    <div class="mt-auto space-y-2 border-t border-[#4d4635]/15 pt-6">
        <a
            class="{{ $activeAdminPage === 'profile' ? 'bg-gradient-to-r from-primary/10 to-transparent font-bold text-primary' : 'text-[#e5e2e1]/60 hover:bg-[#2a2a2a]/40 hover:text-[#e5e2e1]' }} flex items-center gap-4 rounded-lg px-4 py-3 transition-all duration-300"
            href="{{ route('profile.edit') }}"
            @if ($activeAdminPage === 'profile') aria-current="page" @endif
        >
            <span class="material-symbols-outlined {{ $activeAdminPage === 'profile' ? 'filled-icon' : '' }}" aria-hidden="true">person</span>
            <span class="font-headline text-sm tracking-tight">Profile</span>
        </a>
        <div class="flex items-center gap-3 px-4 pt-4">
            <div class="h-10 w-10 overflow-hidden rounded-full border border-primary/30">
                <img
                    alt="Executive Profile"
                    class="h-full w-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIkzuihC8krmXDLR23dGsI-M-M17awQ8oI37zjQIKae7J_48ohA66E7wmmxTP0WU6PKVCUEd9cQlMNgBbLNnvqjeJFhK_pL8l-qUkuLr6ZvFyV5lO1qHwzfgsiyKcceAGNaUKF_mxQ6Fz115mMIwjLpvw6f127GozXy3xDTKqawA05egm5hhn_jy4uEaxE8VUG6BB-Uz8PZB6tfvb7al2UVrB_vrp956VhLDLouVcgGg7LfviYpT1cdrESWpkXu7godQAGnimQGjkU"
                >
            </div>
            <div>
                <p class="text-sm font-semibold text-[#e5e2e1]">{{ Auth::user()->name }}</p>
                <p class="text-[10px] uppercase tracking-tighter text-[#e5e2e1]/40">Chief Creative</p>
            </div>
        </div>
    </div>
</aside>
