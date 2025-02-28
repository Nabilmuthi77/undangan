@extends('layouts.main-layout')

@section('title', 'Undangan Pernikahan Digital')

@section('content')

    <!-- Background -->
    <div class="bg-container absolute inset-0 z-0"></div>

    <!-- Beranda -->
    <section id="beranda">
        <div class="relative bg-center w-full text-gray-900 font-average">
            <div class="relative py-16 md:pt-24 lg:pb-[2.15rem] md:pb-[2.15rem]">
                <div class="relative mx-auto max-w-6xl px-6 lg:px-8 z-10">
                    <div class="flex flex-col md:flex-row items-center md:items-start justify-between mt-16 md:mt-0">
                        <!-- Teks -->
                        <div class="md:w-1/2 flex flex-col md:-mt-5">
                            <h1 class="text-4xl mb-6 font-bold tracking-tight sm:text-6xl leading-tight" data-aos="fade-right"
                                data-aos-easing="ease-in-sine" data-aos-duration="700">
                                Platform Undangan Pernikahan Digital
                            </h1>
                            <p class="mt-5 text-lg leading-8" data-aos="fade-left" data-aos-easing="ease-in-sine"
                                data-aos-duration="700">
                                Lebih praktis, hemat dan kekinian. Buat undangan pernikahan berbasis website
                                <span class="font-bold">GRATIS</span>
                            </p>
                            <div class="mt-12 flex flex-wrap items-center gap-6">
                                <a href="#tema"
                                    class="bg-gray-800 hover:bg-black text-white font-bold py-3 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150"
                                    data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-delay="900"
                                    data-aos-duration="700">
                                    <i class="fas fa-envelope mr-2"></i>
                                    <span>Buat Undangan</span>
                                </a>
                                <a href="{{ route('tutorial') }}" class="text-sm font-semibold leading-6" data-aos="fade-up"
                                    data-aos-easing="ease-in-sine" data-aos-delay="700" data-aos-duration="700">
                                    Cara Buat
                                    <span class="ml-1">→</span>
                                </a>
                            </div>
                        </div>
                        <!-- Slider -->
                        <div class="relative mt-[3.75rem] md:mt-[1.15rem] md:w-[40%] flex justify-center">
                            <div class="mx-auto w-[255px] h-[485px] overflow-hidden rounded-lg shadow-xl bg-gray-800"
                                data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="700"
                                data-aos-duration="700">
                                <div
                                    class="mt-[1.64rem] w-[235px] h-[400px] mx-auto flex items-center justify-center absolute inset-0 z-10">
                                    <div class="rounded-md overflow-hidden shadow-lg">
                                        <div class="splide" id="carousel">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide">
                                                        <img src="{{ asset('tema/premium-1/thumbnail.jpg') }}"
                                                            class="block object-cover object-center transition-transform duration-500 hover:scale-110"
                                                            alt="Theme 1">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="{{ asset('tema/premium-2/thumbnail.jpg') }}"
                                                            class="block object-cover object-center transition-transform duration-500 hover:scale-110"
                                                            alt="Theme 1">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="{{ asset('tema/premium-3/thumbnail.jpg') }}"
                                                            class="block object-cover object-center transition-transform duration-500 hover:scale-110"
                                                            alt="Theme 1">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="{{ asset('tema/premium-4/thumbnail.jpg') }}"
                                                            class="block object-cover object-center transition-transform duration-500 hover:scale-110"
                                                            alt="Theme 1">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="{{ asset('tema/basic-1/thumbnail.jpg') }}"
                                                            class="block object-cover object-center transition-transform duration-500 hover:scale-110"
                                                            alt="Theme 1">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="{{ asset('tema/basic-2/thumbnail.jpg') }}"
                                                            class="block object-cover object-center transition-transform duration-500 hover:scale-110"
                                                            alt="Theme 2">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="{{ asset('tema/basic-3/thumbnail.jpg') }}"
                                                            class="block object-cover object-center transition-transform duration-500 hover:scale-110"
                                                            alt="Theme 2">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="{{ asset('tema/basic-4/thumbnail.jpg') }}"
                                                            class="block object-cover object-center transition-transform duration-500 hover:scale-110"
                                                            alt="Theme 2">
                                                    </li>
                                                    <li class="splide__slide">
                                                        <img src="{{ asset('tema/basic-5/thumbnail.jpg') }}"
                                                            class="block object-cover object-center transition-transform duration-500 hover:scale-110"
                                                            alt="Theme 2">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute bottom-4 right-3 z-20 flex space-x-2">
                                    <div class="w-3 h-3 rounded-full bg-white animate-bounce"></div>
                                    <div class="w-3 h-3 rounded-full bg-white animate-bounce delay-1"></div>
                                    <div class="w-3 h-3 rounded-full bg-white animate-bounce delay-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur -->
    <section id="fitur" class="bg-white">
        <div class="max-w-6xl mx-auto px-4 py-10 md:py-16">
            <h2 class="text-3xl font-bold text-center mb-1 font-croissant" id="fitur">Fitur</h2>
            <div class="flex justify-center mb-10">
                <img src="{{ asset('images/divider-1.png') }}" alt="" class="w-1/2">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="flex items-center justify-end border bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    <div class="mr-6 text-right">
                        <h3 class="text-lg md:text-xl font-semibold mb-2">Aktif Selamanya</h3>
                        <p class=" text-gray-600">
                            Undanganmu aktif selamanya tanpa batasan waktu
                        </p>
                    </div>
                    <i class="fas fa-infinity text-5xl text-gray-500"></i>
                </div>
                <div
                    class="flex items-center border bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    <i class="fas fa-edit text-5xl text-gray-500 mr-6"></i>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Free Kustomisasi</h3>
                        <p class="text-gray-600">
                            Kustomisasi tampilan undanganmu tanpa biaya tambahan
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end border bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    <div class="mr-6 text-right">
                        <h3 class="text-xl font-semibold mb-2">Galeri</h3>
                        <p class="text-gray-600">
                            Tampilkan foto & video bersama pasanganmu
                        </p>
                    </div>
                    <i class="fas fa-images text-5xl text-gray-500"></i>
                </div>
                <div
                    class="flex items-center border bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    <i class="fas fa-comments text-5xl text-gray-500 mr-6"></i>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Ucapan & Doa</h3>
                        <p class="text-gray-600">
                            Dapatkan ucapan & doa dari teman-temanmu
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end border bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    <div class="mr-6 text-right">
                        <h3 class="text-xl font-semibold mb-2">Kado</h3>
                        <p class="text-gray-600">
                            Terima kado cashless dari teman-temanmu
                        </p>
                    </div>
                    <i class="fas fa-gift text-5xl text-gray-500"></i>
                </div>
                <div
                    class="flex items-center border bg-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    <i class="fas fa-music text-5xl text-gray-500 mr-6"></i>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Musik</h3>
                        <p class="text-gray-600">
                            Integrasikan musik latar di undanganmu dengan mudah
                        </p>
                    </div>
                </div>
                <div
                    class="flex items-center justify-end border bg-white p-6 rounded-lg shadow-lg max-w-3xl w-full md:hidden transition-transform duration-300 hover:scale-105">
                    <div class="mr-6 text-right">
                        <h3 class="text-xl font-semibold mb-2">Live Streaming</h3>
                        <p class="text-gray-600">
                            Bagikan link live streaming di undanganmu
                        </p>
                    </div>
                    <i class="fas fa-video text-5xl text-gray-500 mr-6"></i>
                </div>
            </div>
            <div class="flex justify-center items-center mt-10 hidden md:flex">
                <div
                    class="flex items-center border bg-white p-6 rounded-lg shadow-lg max-w-3xl w-full transition-transform duration-300 hover:scale-105">
                    <i class="fas fa-video text-5xl text-gray-500 mr-6"></i>
                    <div>
                        <h3 class="text-xl font-semibold mb-2">Live Streaming</h3>
                        <p class="text-gray-600">
                            Bagikan link live streaming di undanganmu
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tema -->
    <section id="tema">
        <div class="relative mx-auto px-4 py-10 md:py-16">
            <div class="relative z-10">
                <h2 class="text-3xl font-bold text-center mb-1 font-croissant" id="tema">Tema</h2>
                <div class="flex justify-center">
                    <img src="{{ asset('images/divider-1.png') }}" alt="" class="w-1/2">
                </div>
                <hr id="daftartema" class="border border-transparent my-5 md:my-10">
                @if (request('query') && $themes->isEmpty())
                    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-500 p-4 my-4" role="alert">
                        <p class="font-bold">Tidak ada hasil</p>
                        <p class="pt-2">Tidak ada tema yang cocok dengan pencarian "{{ request('query') }}"</p>
                    </div>
                @endif
                <form action="{{ route('home') }}#daftartema" method="GET" id="searchForm">
                    <div class="flex items-center mx-auto max-w-screen-sm mb-10">
                        <div class="relative w-full">
                            <label for="query" class="hidden mb-2 text-sm font-medium text-black">Cari</label>
                            <input class="custom-input border"
                                style="border-color: #1f2937; border-radius: 0.5rem 0 0 0.5rem;" placeholder="Cari Tema"
                                id="query" name="query" value="{{ request('query') }}" autocomplete="off">
                        </div>
                        <button type="submit"
                            class="py-3 px-5 text-sm font-medium text-white bg-gray-800 rounded-r-lg border border-gray-800 hover:bg-black">
                            Cari
                        </button>
                    </div>
                </form>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @if ($themes->isEmpty())
                            <div class="w-full h-full flex justify-center items-center text-lg font-semibold my-10">
                                Coming Soon
                            </div>
                        @else
                            @foreach ($themes as $theme)
                                <div class="swiper-slide flex flex-col items-center">
                                    <div
                                        class="rounded-lg overflow-hidden shadow-lg border bg-white w-[255px] h-auto mx-auto mb-16 relative">
                                        @if ($theme->tipe === 'Premium')
                                            <div
                                                class="absolute top-4 left-4 bg-gradient-to-r from-[#dbac34] via-[#ffe75f] to-[#dbac34] text-white font-bold px-2 py-1">
                                                <i class="fas fa-crown"></i>
                                            </div>
                                        @endif
                                        <img src="{{ asset($theme->path . '/' . $theme->thumbnail) }}"
                                            alt="{{ $theme->name }}"
                                            class="w-[240px] h-[400px] mx-auto pt-2 px-[0.10rem]">
                                        <div class="px-4 py-3">
                                            <div class="font-bold font-croissant text-lg text-center">
                                                {{ $theme->name }}
                                            </div>
                                        </div>
                                        <div class="w-full border-t border-gray-300"></div>
                                        <div class="flex justify-center space-x-2 py-4 px-6 text-nowrap">
                                            <a href="{{ route('demo.theme', ['slug' => $theme->slug]) }}" target="_blank"
                                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150 antialiased text-sm">
                                                <i class="fas fa-eye mr-1"></i>
                                                <span>Demo</span>
                                            </a>
                                            @auth
                                                @if (Auth::user()->role === 'admin')
                                                    <button disabled
                                                        class="select-theme bg-gray-400 text-white font-bold py-2 px-6 rounded focus:outline-none transition ease-in-out duration-150 antialiased text-sm cursor-not-allowed">
                                                        <i class="fas fa-lock mr-1"></i>
                                                        <span>Pilih</span>
                                                    </button>
                                                @elseif (Auth::user()->tipe_akun === 'Basic' && $theme->tipe === 'Premium')
                                                    <button disabled
                                                        class="select-theme bg-gray-400 text-white font-bold py-2 px-6 rounded focus:outline-none transition ease-in-out duration-150 antialiased text-sm cursor-not-allowed">
                                                        <i class="fas fa-lock mr-1"></i>
                                                        <span>Pilih</span>
                                                    </button>
                                                @else
                                                    <button aria-haspopup="dialog" aria-expanded="false"
                                                        aria-controls="hs-scale-animation-modal-{{ $theme->id }}"
                                                        data-hs-overlay="#hs-scale-animation-modal-{{ $theme->id }}"
                                                        class="select-theme bg-gray-800 hover:bg-black text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 antialiased text-sm">
                                                        <i class="fas fa-check mr-1"></i>
                                                        <span>Pilih</span>
                                                    </button>
                                                @endif
                                            @else
                                                <a href="{{ route('login') }}"
                                                    class="bg-gray-800 hover:bg-black text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 antialiased text-sm">
                                                    <i class="fas fa-check mr-1"></i>
                                                    <span>Pilih</span>
                                                </a>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    @if (!$themes->isEmpty())
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="md:hidden">
                            <div class="swiper-pagination"></div>
                        </div>
                    @endif
                </div>
                <!-- Upgrade to Premium -->
                <div
                    class="bg-white max-w-4xl mx-auto mt-12 rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-center mb-4 text-gray-800">
                            Upgrade ke Premium
                        </h3>
                        <p class="text-gray-700 text-center md:text-lg mb-6">
                            Dapatkan akses penuh ke semua tema premium dengan donasi sebesar
                            <span class="font-semibold">
                                Rp100.000
                            </span>
                        </p>
                        <div class="flex justify-center">
                            <div class="flex justify-center">
                                <a href="https://wa.me/628558359732" target="_blank"
                                    class="flex items-center bg-gray-800 hover:bg-black text-white font-bold py-2 px-6 rounded shadow-md transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2">
                                    <i class="fa-brands fa-whatsapp mr-2 text-xl"></i>
                                    Upgrade Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Buat Undangan -->
    @foreach ($themes as $theme)
        <div id="hs-scale-animation-modal-{{ $theme->id }}"
            class="hs-overlay hs-overlay-backdrop-open:bg-black/80 anti hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
            role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label-{{ $theme->id }}">
            <div
                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                    <div class="flex justify-between items-center p-4 md:p-5 border-b">
                        <h3 id="hs-scale-animation-modal-label" class="font-bold text-lg text-gray-800">
                            Buat Undangan
                        </h3>
                        <button type="button"
                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                            aria-label="Close" data-hs-overlay="#hs-scale-animation-modal-{{ $theme->id }}">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <form action="{{ route('user.store.invitation') }}" method="POST" class="p-4 md:p-5">
                        @csrf
                        <input type="hidden" name="theme_id" id="theme_id" value="{{ $theme->id }}">
                        <div class="mb-4">
                            <label for="title" class="block mb-2 text-gray-900">
                                Judul Undangan
                            </label>
                            <input type="text" name="title" id="title" class="custom-input" required
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">
                        </div>
                        <hr class="my-4">
                        <button type="submit"
                            class="bg-gray-800 hover:bg-black text-white font-bold py-3 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150">
                            <i class="fas fa-plus mr-2"></i>
                            <span class="mr-2">
                                Buat Undangan
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Donasi -->
    <section id="donasi" class="bg-white">
        <div class="max-w-6xl mx-auto px-4 py-10 md:py-16 text-center">
            <h2 class="text-3xl font-bold mb-1 font-croissant">Donasi</h2>
            <div class="flex justify-center mb-10">
                <img src="{{ asset('images/divider-1.png') }}" alt="" class="w-1/2">
            </div>
            <h2 class="text-xl md:text-3xl mt-5">Dukung Kami</h2>
            <p class="mt-4 md:text-lg text-gray-600">Jika Anda ingin mendukung pengembangan platform ini, Anda
                dapat berdonasi
                melalui :</p>
            <div
                class="mt-8 max-w-sm md:max-w-lg mx-auto bg-white border rounded-lg shadow-xl transform transition duration-500 hover:scale-105">
                <div class="p-6">
                    <div class="flex items-center justify-center w-full pb-6 font-medium border-b">
                        <img src="{{ asset('images/dana.png') }}" alt="" class="h-10 w-15 md:h-12 md:w-18" />
                    </div>
                    <div class="space-y-5 mt-6 mb-2 md:text-lg">
                        <div>
                            <h3 class="font-medium text-gray-800">Atas Nama :</h3>
                            <p class="text-gray-600">Ikhsan Permana Hadiansyah</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Nomor Rekening :</h4>
                            <p class="text-gray-700">08558359732</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WhatsApp -->
    <a href="https://wa.me/628558359732" target="_blank"
        class="fixed bottom-3 right-3 z-30 bg-gray-800 text-white rounded-full w-16 p-3 shadow-lg hover:bg-black transition duration-300 flex items-center justify-center"
        data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="700">
        <i class="fa-brands fa-whatsapp text-4xl"></i>
    </a>

@endsection
