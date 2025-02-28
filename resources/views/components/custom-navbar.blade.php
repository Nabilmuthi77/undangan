<nav x-data="{ open: false }" class="bg-white/80 backdrop-blur-sm shadow-lg z-40 fixed w-full top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/web-logo.png') }}" class="h-8" alt="Logo">
                </a>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden sm:flex items-center justify-center flex-grow space-x-8">
                <x-custom-nav-link :href="request()->is('tutorial') ? route('home') . '#beranda' : '#beranda'" :active="request()->is('#beranda')">
                    Beranda
                </x-custom-nav-link>
                <x-custom-nav-link :href="request()->is('tutorial') ? route('home') . '#fitur' : '#fitur'" :active="request()->is('#fitur')">
                    Fitur
                </x-custom-nav-link>
                <x-custom-nav-link :href="request()->is('tutorial') ? route('home') . '#tema' : '#tema'" :active="request()->is('#tema')">
                    Tema
                </x-custom-nav-link>
                <x-custom-nav-link :href="request()->is('tutorial') ? route('home') . '#donasi' : '#donasi'" :active="request()->is('#donasi')">
                    Donasi
                </x-custom-nav-link>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ms-6" x-data="{ open: false }">
                @if (Auth::check())
                    <!-- Dropdown For Authenticated Users -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-800 hover:text-black focus:outline-none focus:text-black transition ease-in-out duration-150">
                                <div>{{ Auth::user()->username }}</div>
                                <div class="ms-1">
                                    <!-- Icon Dropdown -->
                                    <svg x-show="!open" x-cloak x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 transform scale-90 rotate-90"
                                        x-transition:enter-end="opacity-100 transform scale-100 rotate-0"
                                        class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <!-- Icon Dropdown Open -->
                                    <svg x-show="open" x-cloak x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 transform scale-90 rotate-90"
                                        x-transition:enter-end="opacity-100 transform scale-100 rotate-0"
                                        class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 12.707a1 1 0 011.414 0L10 9.414l3.293 3.293a1 1 0 001.414-1.414l-4-4a1 1 0 00-1.414 0l-4 4a1 1 0 000 1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <!-- Dashboard Link -->
                            @if (Auth::user()->role === 'admin')
                                <x-dropdown-link :href="route('admin.dashboard')">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('admin.tema')">
                                    {{ __('Tema') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('admin.feedbackandbug')">
                                    {{ __('Feedback & Laporan Bug') }}
                                </x-dropdown-link>
                            @else
                                <x-dropdown-link :href="route('user.dashboard')">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('user.undangan')">
                                    {{ __('Undangan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('user.feedbackandbug')">
                                    {{ __('Feedback & Laporan Bug') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('user.cs')">
                                    {{ __('Customer Service') }}
                                </x-dropdown-link>
                            @endif
                            <hr class="w-40 mx-auto">
                            <!-- Profile Link -->
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <!-- Login Button For Unauthenticated Users -->
                    <div class="relative">
                        <a class="text-nowrap bg-gray-800 hover:bg-black text-white font-bold py-3 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150"
                            href="{{ route('login') }}">
                            <span>Masuk</span>
                            <i class="fa-solid fa-sign-in-alt ml-1"></i>
                        </a>
                    </div>
                @endif
            </div>
            <!-- Mobile Menu Button -->
            <div class="-me-2 flex items-center sm:hidden z-50">
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
    <div x-show="open" @click="open = false" x-cloak class="fixed inset-0 z-40 bg-black/80 h-[100vh]">
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
                <x-responsive-nav-link :href="request()->is('tutorial') ? route('home') . '#beranda' : '#beranda'" :active="request()->is('#beranda')">
                    <i class="fas fa-home mr-2"></i> {{ __('Beranda') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="request()->is('tutorial') ? route('home') . '#fitur' : '#fitur'" :active="request()->is('#fitur')">
                    <i class="fas fa-star mr-2"></i> {{ __('Fitur') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="request()->is('tutorial') ? route('home') . '#tema' : '#tema'" :active="request()->is('#tema')">
                    <i class="fas fa-palette mr-2"></i> {{ __('Tema') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="request()->is('tutorial') ? route('home') . '#donasi' : '#donasi'" :active="request()->is('#donasi')">
                    <i class="fas fa-donate mr-2"></i> {{ __('Donasi') }}
                </x-responsive-nav-link>
                <hr class="border-gray-800 border-1">
                @if (Route::has('login'))
                    @auth
                        <div class="relative space-y-1">
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
                                <hr class="border-gray-800 border-1">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    <i class="fa-solid fa-user mr-2"></i> {{ __('Profile') }}
                                </x-responsive-nav-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="fa-solid fa-sign-out-alt mr-2"></i> {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            @endif
                        </div>
                    @else
                        <div class="relative">
                            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('user.dashboard')">
                                <i class="fa-solid fa-sign-in-alt mr-2"></i> {{ __('Login') }}
                            </x-responsive-nav-link>
                        </div>
                    @endauth
                @endif
            </div>
        </div>
    </div>
</nav>
