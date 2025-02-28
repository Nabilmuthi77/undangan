<x-guest-layout>
    <div class="flex justify-center mb-5 mt-2">
        <img src="{{ asset('images/web-logo.png') }}" class="h-8" alt="Logo" />
    </div>
    <hr>
    <div class="mb-4 mt-5 text-sm text-gray-600">
        Silakan verifikasi email Anda melalui link yang telah kami kirim ke email Anda
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            Link verifikasi baru telah dikirim ke email Anda
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-primary-button>
                Kirim Ulang
            </x-primary-button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="text-sm text-gray-800 hover:underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Logout
            </button>
        </form>
    </div>
</x-guest-layout>
