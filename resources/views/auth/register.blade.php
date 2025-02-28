<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex justify-center my-7">
        <img src="{{ asset('images/web-logo.png') }}" class="h-8" alt="Logo" />
    </div>
    <div class="mt-5">
        <form method="POST" action="{{ route('register') }}" novalidate>
            @csrf
            <div class="mt-4">
                <x-input-label for="username" :value="__('Username')" />
                <input id="username" class="custom-input mt-1" type="text" name="username" :value="old('username')"
                    required autocomplete="username" oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                    oninput="this.setCustomValidity('')" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password" :value="__('Kata Sandi')" />
                <input id="password" class="custom-input mt-1" type="password" name="password" required
                    autocomplete="new-password" oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                    oninput="this.setCustomValidity('')" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Ulangi Kata Sandi')" />
                <input id="password_confirmation" class="custom-input mt-1" type="password" name="password_confirmation"
                    required autocomplete="new-password" oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                    oninput="this.setCustomValidity('')" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <p class="mt-4 text-center text-sm">
                Sudah Punya Akun?
                <a href="{{ route('login') }}" class="font-semibold leading-6 hover:underline">Login
                    Di
                    Sini!</a>
            </p>
            <div class="flex items-center justify-center mt-4 mb-2">
                <x-primary-button>
                    <i class="fa-solid fa-user-plus mr-2"></i>
                    <span class="mr-2">
                        {{ __('Daftar') }}
                    </span>
                </x-primary-button>
            </div>
        </form>
        <hr class="my-5">
        <div class="flex items-center justify-center mt-5 mb-[0.60rem]">
            <x-primary-button>
                <a href="/">
                    <i class="fa-solid fa-house mr-2"></i>
                    <span class="mr-2">
                        Beranda
                    </span>
                </a>
            </x-primary-button>
        </div>
    </div>
</x-guest-layout>
