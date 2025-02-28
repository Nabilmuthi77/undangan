<!-- Primary Navigation Menu -->
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 relative shadow-lg z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-40">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="block h-9 w-auto fill-current text-gray-800">
                        <img src="{{ asset('images/web-logo.png') }}" class="h-8" alt="">
                    </a>
                </div>
            </div>
            <!-- Mobile Menu Button -->
            <div class="-me-2 flex items-center z-50">
                <span class="mt-[0.10rem] font-montserrat">
                    MENU
                </span>
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Overlay -->
    <div x-show="open" @click="open = false" x-cloak class="fixed inset-0 z-40 bg-black/80">
        <!-- Caption -->
        <p class="mt-3 text-sm text-center text-white">
            Klik pada layar kosong untuk menutup menu
        </p>
    </div>
    <!-- Mobile Menu -->
    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-x-full"
        x-transition:enter-end="opacity-100 transform translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-x-0"
        x-transition:leave-end="opacity-0 transform translate-x-full"
        class="fixed top-[3.75rem] right-0 mt-2 w-auto bg-white shadow-lg z-40 rounded-tl-lg rounded-bl-lg ring-1 ring-gray-200">
        <div class="py-3 px-2">
            <div class="space-y-1">
                @if (Auth::check())
                    @if (Auth::user()->role === 'admin')
                        <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                            <i class="fa-solid fa-chart-line mr-2"></i> {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('admin.tema')" :active="request()->routeIs('admin.tema')">
                            <i class="fas fa-palette mr-2"></i> {{ __('Tema') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('admin.feedbackandbug')" :active="request()->routeIs('admin.feedbackandbug')">
                            <i class="fas fas fa-comment mr-2"></i> {{ __('Feedback & Laporan Bug') }}
                        </x-responsive-nav-link>
                    @elseif (Auth::user()->role === 'user')
                        <x-responsive-nav-link :href="route('user.dashboard')" :active="request()->routeIs('user.dashboard')">
                            <i class="fa-solid fa-chart-line mr-2"></i> {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('user.undangan')" :active="request()->routeIs('user.undangan')">
                            <i class="fas fa-envelope mr-2"></i> {{ __('Undangan') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('user.feedbackandbug')" :active="request()->routeIs('user.feedbackandbug')">
                            <i class="fas fas fa-comment mr-2"></i> {{ __('Feedback & Laporan Bug') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('user.cs')" :active="request()->routeIs('user.cs')">
                            <i class="fas fa-headset mr-2"></i> {{ __('Customer Service') }}
                        </x-responsive-nav-link>
                    @endif
                @endif
                <hr class="border-gray-800 border-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    <i class="fas fa-user mr-2"></i> {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
