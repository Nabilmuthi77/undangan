<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Ubah Username') }}
        </h2>
    </header>
    <hr class="my-5">
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" name="username" type="text" class="mt-1 custom-input" :value="old('username', $user->username)"
                required autocomplete="username" oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                oninput="this.setCustomValidity('')" />
            <x-input-error class="mt-2" :messages="$errors->get('username')" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>
                <i class="fas fa-save mr-2"></i>
                {{ __('Simpan') }}
            </x-primary-button>
        </div>
    </form>
</section>
