@extends('layouts.admin')

@section('title', 'ILOGE | Executive Profile')
@section('activeAdminPage', 'profile')
@section('headerTitle', 'Executive Profile')
@section('searchPlaceholder', 'Search profile...')
@section('mainClass', 'min-h-screen px-4 pb-24 pt-28 sm:px-6 lg:ml-72 lg:px-12 lg:pt-32')

@section('headerAction')
    <span class="hidden text-right sm:block">
        <p class="font-headline text-xs font-bold text-on-surface">{{ Str::of($user->name)->limit(16) }}</p>
        <p class="text-[10px] text-on-surface-variant/50">MD / CSO</p>
    </span>
@endsection

@section('content')
    <div class="mx-auto max-w-6xl">
        <div class="mb-10">
            <h2 class="font-headline text-4xl font-black leading-none tracking-tighter text-on-surface">Executive Profile</h2>
            <p class="mt-2 text-sm uppercase tracking-[0.3em] text-on-surface-variant/60">Identity &amp; Authorization</p>
        </div>

        <section class="relative mb-16 flex flex-col items-center gap-8 overflow-hidden rounded-xl border border-outline-variant/5 bg-surface-container-low p-8 sm:p-10 lg:flex-row lg:gap-12 lg:p-12">
            <div class="group relative shrink-0">
                <div class="absolute inset-0 rounded-full bg-primary/20 blur-2xl transition-all group-hover:bg-primary/30"></div>
                <img
                    alt="Portrait"
                    class="relative h-40 w-40 rounded-full border-4 border-[#131313] object-cover shadow-2xl sm:h-48 sm:w-48"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrPaVnsRQzhwzg3bsCbC-WVe6k5QvArC-R-wYXTjvC6YfM0iq3_bgnxpaWJXFVy3tPjAV_-8geQgkZqmtghxEbsSOjsQuWIV81X-6l2CLxKT2cLcjxOP2aoqAB1uqzKr-WJiFoqAvkC6l13qsDxy9Lc15g2tMq_6DC6kAaMGm4YM3MYaAWub4Mey0kooVXkWuHwmhIRZRj3l_CsxWi58oCM7WWMniJ_zSF2oXRdiHcC8MLhGPUa7WIvbwb0plpvFc7LqemxNy1qFWP"
                >
                <button type="button" class="absolute bottom-2 right-2 flex h-10 w-10 items-center justify-center rounded-full bg-primary text-on-primary shadow-lg transition-transform hover:scale-110" aria-label="Update profile photo">
                    <span class="material-symbols-outlined text-sm" aria-hidden="true">photo_camera</span>
                </button>
            </div>

            <div class="space-y-3 text-center lg:text-left">
                <span class="inline-flex rounded-full bg-primary/10 px-3 py-1 text-[10px] font-bold uppercase tracking-widest text-primary">Verified Executive</span>
                <h3 class="font-headline text-4xl font-extrabold tracking-tighter text-on-surface sm:text-5xl">{{ $user->name }}</h3>
                <p class="text-xl font-light italic text-on-surface-variant">Chief Strategy Officer &amp; Managing Director</p>
                <div class="mt-6 flex flex-col gap-6 sm:flex-row sm:justify-center lg:justify-start lg:gap-8">
                    <div>
                        <p class="mb-1 text-[10px] uppercase tracking-widest text-on-surface-variant/40">Portfolio Access</p>
                        <p class="font-headline text-lg text-primary">Unrestricted</p>
                    </div>
                    <div class="hidden h-10 w-px bg-outline-variant/20 sm:block"></div>
                    <div>
                        <p class="mb-1 text-[10px] uppercase tracking-widest text-on-surface-variant/40">Clearance Level</p>
                        <p class="font-headline text-lg text-on-surface">L9 Governance</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
            <section class="rounded-xl border border-outline-variant/5 bg-surface-container p-8 shadow-xl">
                <div class="mb-8 flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary" aria-hidden="true">badge</span>
                    <h4 class="font-headline text-xl font-bold">Account Identity</h4>
                </div>

                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form method="post" action="{{ route('profile.update') }}" class="space-y-8">
                    @csrf
                    @method('patch')

                    <label class="block">
                        <span class="mb-2 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant/60">Full Name</span>
                        <input class="font-headline w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-3 text-lg text-on-surface transition-colors focus:border-primary focus:ring-0" name="name" type="text" value="{{ old('name', $user->name) }}" required autocomplete="name">
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </label>

                    <label class="block">
                        <span class="mb-2 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant/60">Corporate Email</span>
                        <input class="font-headline w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-3 text-lg text-on-surface transition-colors focus:border-primary focus:ring-0" name="email" type="email" value="{{ old('email', $user->email) }}" required autocomplete="username">
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </label>

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div class="rounded-lg border border-outline-variant/20 bg-surface/40 p-4 text-sm text-on-surface-variant">
                            {{ __('Your email address is unverified.') }}
                            <button form="send-verification" class="font-bold text-primary hover:underline">
                                {{ __('Resend verification email.') }}
                            </button>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-primary">{{ __('A new verification link has been sent to your email address.') }}</p>
                            @endif
                        </div>
                    @endif

                    <div class="flex items-center gap-4">
                        <button class="liquid-gold rounded-md px-8 py-3 font-headline text-xs font-black uppercase tracking-[0.2em] text-on-primary shadow-lg transition-all active:scale-[0.98]">
                            Save Identity
                        </button>
                        @if (session('status') === 'profile-updated')
                            <p class="text-sm text-primary">{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </section>

            <section class="rounded-xl border border-outline-variant/5 bg-surface-container p-8 shadow-xl">
                <div class="mb-8 flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary" aria-hidden="true">lock</span>
                    <h4 class="font-headline text-xl font-bold">Credential Security</h4>
                </div>

                <form method="post" action="{{ route('password.update') }}" class="space-y-6">
                    @csrf
                    @method('put')

                    <label class="block">
                        <span class="mb-1 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant/60">Current Passphrase</span>
                        <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-3 text-on-surface transition-colors focus:border-primary focus:ring-0" name="current_password" type="password" autocomplete="current-password">
                        <x-input-error class="mt-2" :messages="$errors->updatePassword->get('current_password')" />
                    </label>

                    <div class="grid gap-6 sm:grid-cols-2">
                        <label class="block">
                            <span class="mb-1 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant/60">New Passphrase</span>
                            <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-3 text-on-surface transition-colors placeholder:text-on-surface-variant/30 focus:border-primary focus:ring-0" name="password" placeholder="Min. 8 chars" type="password" autocomplete="new-password">
                            <x-input-error class="mt-2" :messages="$errors->updatePassword->get('password')" />
                        </label>
                        <label class="block">
                            <span class="mb-1 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant/60">Confirm Passphrase</span>
                            <input class="w-full border-x-0 border-t-0 border-outline-variant/30 bg-transparent px-0 py-3 text-on-surface transition-colors placeholder:text-on-surface-variant/30 focus:border-primary focus:ring-0" name="password_confirmation" placeholder="Repeat passphrase" type="password" autocomplete="new-password">
                            <x-input-error class="mt-2" :messages="$errors->updatePassword->get('password_confirmation')" />
                        </label>
                    </div>

                    <div class="flex items-center gap-4">
                        <button class="liquid-gold w-full rounded-md py-4 font-headline text-xs font-black uppercase tracking-[0.2em] text-on-primary shadow-lg transition-all active:scale-[0.98]">
                            Secure Update
                        </button>
                        @if (session('status') === 'password-updated')
                            <p class="shrink-0 text-sm text-primary">{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </section>

            <section class="rounded-xl border border-outline-variant/10 bg-surface-container-high p-8">
                <div class="mb-6 flex items-start justify-between">
                    <div>
                        <h4 class="font-headline text-lg font-bold">Authentication Factors</h4>
                        <p class="mt-1 text-xs text-on-surface-variant/60">Biometric &amp; Physical Key status</p>
                    </div>
                    <span class="rounded border border-primary/30 px-2 py-1 text-[10px] font-bold text-primary">ENCRYPTED</span>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between rounded-lg bg-surface/40 p-4">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary" aria-hidden="true">fingerprint</span>
                            <span class="text-sm font-medium">TouchID / FaceID</span>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-primary">Active</span>
                    </div>
                    <div class="flex items-center justify-between rounded-lg bg-surface/40 p-4">
                        <div class="flex items-center gap-3 text-on-surface-variant/50">
                            <span class="material-symbols-outlined" aria-hidden="true">token</span>
                            <span class="text-sm font-medium">YubiKey Hardware</span>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant/40">Setup Needed</span>
                    </div>
                </div>
            </section>

            <section class="rounded-xl border border-error/20 bg-[#1a1111] p-8">
                <div class="mb-6 flex items-center gap-3">
                    <span class="material-symbols-outlined text-error" aria-hidden="true">warning</span>
                    <h4 class="font-headline text-lg font-bold text-error">Danger Zone</h4>
                </div>
                <div class="mb-8">
                    <h5 class="mb-2 text-sm font-bold text-on-surface">Account Deletion</h5>
                    <p class="text-xs leading-relaxed text-on-surface-variant/60">
                        Once you delete your executive account, there is no going back. All governance access and encrypted vault keys will be permanently purged.
                    </p>
                </div>

                <form method="post" action="{{ route('profile.destroy') }}" class="space-y-5">
                    @csrf
                    @method('delete')

                    <label class="block">
                        <span class="mb-1 block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant/60">Confirm Password</span>
                        <input class="w-full border-x-0 border-t-0 border-error/30 bg-transparent px-0 py-3 text-on-surface transition-colors placeholder:text-on-surface-variant/30 focus:border-error focus:ring-0" name="password" placeholder="Required to delete account" type="password">
                        <x-input-error class="mt-2" :messages="$errors->userDeletion->get('password')" />
                    </label>

                    <button class="group relative flex items-center gap-2 rounded border border-error/40 px-6 py-3 font-headline text-xs font-bold uppercase tracking-widest text-error transition-all duration-300 hover:bg-error hover:text-on-error">
                        <span class="material-symbols-outlined text-sm" aria-hidden="true">delete_forever</span>
                        Delete Account
                    </button>
                </form>
            </section>
        </div>

        <div class="mt-24 flex flex-col gap-4 border-t border-outline-variant/10 pt-12 opacity-40 sm:flex-row sm:items-center sm:justify-between">
            <div class="flex items-center gap-2">
                <span class="h-2 w-2 rounded-full bg-primary"></span>
                <span class="font-headline text-[10px] uppercase tracking-widest">System Online</span>
            </div>
            <p class="font-headline text-[10px] uppercase tracking-[0.3em]">&copy; {{ now()->year }} ILOGE STRATEGIC PARTNERS</p>
            <div class="flex gap-4">
                <span class="font-headline text-[10px]">PRIVACY</span>
                <span class="font-headline text-[10px]">TERMS</span>
            </div>
        </div>
    </div>
@endsection
