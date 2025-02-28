<div id="tema" class="py-10 px-5 mx-auto lg:px-8 lg:py-16 bg-white rounded-lg shadow-lg mt-10">
    <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
        Tema
    </h2>
    <form action="{{ route('user.invitation.update', $invitation) }}" method="POST" class="max-w-3xl mx-auto">
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label for="title" class="block text-gray-700">
                Judul Undangan
            </label>
            <input type="text" id="title" name="title" required
                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"
                value="{{ $invitation->title }}" class="mt-1 custom-input">
        </div>
        <div class="flex justify-center mt-4">
            <button type="submit"
                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                <i class="fas fa-save mr-2"></i>
                <span class="mr-2">Simpan</span>
            </button>
        </div>
    </form>
    <br>
    <div class="max-w-3xl mx-auto">
        <label for="tema" class="block text-gray-700">
            Tema
        </label>
        <input type="text" id="tema" name="tema" required
            oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"
            value="{{ $invitation->theme->name }}" class="mt-1 custom-input" disabled>
    </div>
    <br>
    <h2 class="mt-10 text-2xl text-center font-bold font-croissant text-gray-900">
        Daftar Tema
    </h2>
    <div class="flex justify-center mb-10">
        <img src="{{ asset('images/divider-1.png') }}" alt="" class="w-1/2">
    </div>
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
                <input class="custom-input border" style="border-color: #1f2937; border-radius: 0.5rem 0 0 0.5rem;"
                    placeholder="Cari Tema" id="query" name="query" value="{{ request('query') }}"
                    autocomplete="off">
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
                    <div class="swiper-slide flex flex-col items-center mb-2">
                        <div
                            class="rounded-lg overflow-hidden shadow-lg border bg-white w-[270px] h-auto mx-auto relative">
                            @if ($theme->tipe === 'Premium')
                                <div
                                    class="absolute top-4 left-4 bg-gradient-to-r from-[#dbac34] via-[#ffe75f] to-[#dbac34] text-white font-bold px-2 py-1">
                                    <i class="fas fa-crown"></i>
                                </div>
                            @endif
                            <img src="{{ asset($theme->path . '/' . $theme->thumbnail) }}" alt="{{ $theme->name }}"
                                class="w-[250px] h-[375px] mx-auto pt-2">
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
                                    @if (Auth::user()->tipe_akun === 'Basic' && $theme->tipe === 'Premium')
                                        <form action="{{ route('user.invitation.updateTheme', $invitation->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="theme_id" value="{{ $theme->id }}">
                                            <button disabled
                                                class="select-theme bg-gray-400 text-white font-bold py-2 px-6 rounded focus:outline-none transition ease-in-out duration-150 antialiased text-sm cursor-not-allowed">
                                                <i class="fas fa-lock mr-1"></i>
                                                <span>Pilih</span>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('user.invitation.updateTheme', $invitation->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="theme_id" value="{{ $theme->id }}">
                                            <button
                                                class="select-theme bg-gray-800 hover:bg-black text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 antialiased text-sm">
                                                <i class="fas fa-check mr-1"></i>
                                                <span>Pilih</span>
                                            </button>
                                        </form>
                                    @endif
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
        @endif
    </div>
</div>
