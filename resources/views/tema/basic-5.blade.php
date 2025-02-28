<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $invitation->title }}</title>

    <!-- Resources -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">

    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <style>
        .bg-trans {
            background-color: rgba(255, 255, 255, 0.8);
        }

        html {
            scroll-behavior: smooth;
        }

        #modal-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
        }
    </style>
</head>

<body class="antialiased" style="background-color: #f5dda2; overflow: hidden;">

    <!-- Sampul -->
    <div id="cover-page" class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
        style="background-image: url('{{ asset('tema/basic-5/images/bg.webp') }}'); background-position: center; background-size: cover;">
        <!-- Flash Message -->
        @if (session('success') || session('error'))
            <div id="flash-message"
                class="absolute top-5 left-1/2 transform -translate-x-1/2 z-20 flex items-center p-4 text-sm shadow-lg rounded-lg w-[90%] max-w-[400px]"
                style="background-color: rgba(255, 255, 255, 0.8); visibility: hidden;">
                <i
                    class="{{ session('success') ? 'fas fa-check-circle text-green-800' : 'fas fa-exclamation-circle text-red-800' }} flex-shrink-0 inline w-4 h-4 mr-3"></i>
                <span class="sr-only">{{ session('success') ? 'Success' : 'Error' }}</span>
                <div class="text-sm {{ session('success') ? 'text-green-800' : 'text-red-800' }}">
                    {{ session('success') ?? session('error') }}
                </div>
            </div>
        @endif
        <div class="absolute top-0 left-0 z-10">
            <img src="{{ asset('tema/basic-5/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 right-0 z-10">
            <img src="{{ asset('tema/basic-5/images/corner-2.png') }}" alt="Corner 2"
                class="w-[150px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center text-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto my-5">
                @if ($invitation->galeri)
                    @php
                        $firstGallery = $invitation->galeri;
                    @endphp
                    @if ($firstGallery->foto_sampul)
                        <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $firstGallery->foto_sampul)) }}"
                            alt="Foto Sampul" class="rounded-full w-48 h-48 mx-auto object-cover mb-5"
                            data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    @else
                        <img src="{{ asset('tema/foto/default.png') }}" alt="Foto Sampul"
                            class="rounded-full w-48 h-48 mx-auto object-cover mb-5">
                    @endif
                @else
                    <img src="{{ asset('tema/foto/default.png') }}" alt="Foto Sampul"
                        class="rounded-full w-48 h-48 mx-auto object-cover mb-5">
                @endif
                <div class="text-2xl font-bold mt-3 font-croissant text-[#dbb658]" data-aos="fade-right"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    @if ($invitation->mempelai)
                        {{ $invitation->mempelai->panggilan_pria }} & {{ $invitation->mempelai->panggilan_wanita }}
                    @else
                        - & -
                    @endif
                </div>
                <div class="mt-10 font-montserrat text-gray-700">
                    <div class="text-sm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Kepada Yth :
                    </div>
                    <div class="text-sm mt-1" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        Bapak/Ibu/Saudara/i
                    </div>
                    <div class="rounded text-lg font-croissant mt-5 mb-1 text-[#dbb658]" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        @if (isset($guestData) && !empty($guestData->nama_tamu))
                            <div class="rounded text-lg font-croissant mt-5 mb-1 text-[#dbb658]" data-aos="fade-left"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                                {{ $guestData->nama_tamu }}
                            </div>
                        @else
                            <div class="rounded text-lg font-croissant mt-5 mb-1 text-[#dbb658]" data-aos="fade-left"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                                -
                            </div>
                        @endif
                    </div>
                    <hr style="border-color: #dbb658;" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <button type="button" onclick="openInvitation()"
                            class="text-white py-2 px-6 rounded mt-5 font-croissant focus:outline-none focus:ring-2 focus:ring-[#dbb658] focus:ring-offset-2 transition ease-in-out duration-150"
                            style="background-color: #dbb658;">
                            <i class="fa-solid fa-envelope mr-1"></i>
                            Buka Undangan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pembuka -->
    <div id="main-invitation"
        class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px] py-10"
        style="background-image: url('{{ asset('tema/basic-5/images/bg.webp') }}'); background-position: center; background-size: cover;">
        <div class="absolute top-0 left-0 z-10">
            <img src="{{ asset('tema/basic-5/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 right-0 z-10">
            <img src="{{ asset('tema/basic-5/images/corner-2.png') }}" alt="Corner 2"
                class="w-[150px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto my-5">
                <div class="text-sm text-center text-gray-700" data-aos="fade-down" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <div class="text-[#dbb658] font-croissant">
                        {{ $invitation->tekspembuka->salam ?? 'Assalamu’alaikum Wr. Wb.' }}
                    </div>
                    <div class="font-montserrat mt-2 px-2">
                        {{ $invitation->tekspembuka->teks ?? 'Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, Insya Allah kami akan menyelenggarakan acara pernikahan :' }}
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-4 mb-5 mt-10">
                    <!-- Mempelai Pria -->
                    <div class="flex flex-col items-center justify-center text-center" data-aos="fade-right"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="w-40 h-40">
                            @if ($invitation->mempelai && $invitation->mempelai->foto_pria)
                                <img src="{{ asset($invitation->mempelai->foto_pria) }}" alt=""
                                    class="w-full h-full object-cover rounded-full">
                            @else
                                <img src="{{ asset('tema/foto/default.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-full">
                            @endif
                        </div>
                        <div class="mt-5">
                            <div class="font-bold font-croissant text-[#dbb658] pb-3">
                                {{ $invitation->mempelai ? $invitation->mempelai->nama_pria : '-' }}
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                Putra ke-{{ $invitation->mempelai ? $invitation->mempelai->anak_ke_pria : '' }}
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                Bapak {{ $invitation->mempelai ? $invitation->mempelai->ayah_pria : '' }}
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                &amp;
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1 pb-3">
                                Ibu {{ $invitation->mempelai ? $invitation->mempelai->ibu_pria : '' }}
                            </div>
                            <a href="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_pria ? $invitation->mempelai->instagram_link_pria : '' }}"
                                target="_blank" class="text-[#dbb658]"
                                title="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_pria ? '' : 'Link Instagram tidak tersedia' }}">
                                <i class="fab fa-instagram text-3xl"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Divider -->
                    <div class="flex items-center justify-center text-center gap-4 w-full" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="h-[1px] bg-[#dbb658] flex-1"></div>
                        <i class="fa-solid fa-heart text-3xl text-[#dbb658] py-5" data-aos="zoom-in"
                            data-aos-easing="ease-in-sine" data-aos-duration="800"></i>
                        <div class="h-[1px] bg-[#dbb658] flex-1"></div>
                    </div>
                    <!-- Mempelai Wanita -->
                    <div class="flex flex-col items-center justify-center text-center" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="w-40 h-40 rounded-full">
                            @if ($invitation->mempelai && $invitation->mempelai->foto_wanita)
                                <img src="{{ asset($invitation->mempelai->foto_wanita) }}" alt=""
                                    class="w-full h-full object-cover rounded-full">
                            @else
                                <img src="{{ asset('tema/foto/default.png') }}" alt=""
                                    class="w-full h-full object-cover rounded-full">
                            @endif
                        </div>
                        <div class="mt-5">
                            <div class="font-bold font-croissant text-[#dbb658] pb-3">
                                {{ $invitation->mempelai ? $invitation->mempelai->nama_wanita : '-' }}
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                Putra ke-{{ $invitation->mempelai ? $invitation->mempelai->anak_ke_wanita : '' }}
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                Bapak {{ $invitation->mempelai ? $invitation->mempelai->ayah_wanita : '' }}
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                &amp;
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1 pb-3">
                                Ibu {{ $invitation->mempelai ? $invitation->mempelai->ibu_wanita : '' }}
                            </div>
                            <a href="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_wanita ? $invitation->mempelai->instagram_link_wanita : '' }}"
                                target="_blank" class="text-[#dbb658]"
                                title="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_wanita ? '' : 'Link Instagram tidak tersedia' }}">
                                <i class="fab fa-instagram text-3xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center mt-10 font-montserrat text-[#dbb658]" data-aos="fade-up"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div id="formattedDate" class="text-lg font-semibold">
                        Waktu Menuju Acara
                    </div>
                    <div id="countdown" class="text-center mt-5 flex justify-center space-x-5">
                        <div class="text-center">
                            <span style="background-color: #dbb658;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center days">00</span>
                            <br>
                            <small>
                                Hari
                            </small>
                        </div>
                        <div class="text-center">
                            <span style="background-color: #dbb658;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center hours">00</span>
                            <br>
                            <small>
                                Jam
                            </small>
                        </div>
                        <div class="text-center">
                            <span style="background-color: #dbb658;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center minutes">00</span>
                            <br>
                            <small>
                                Menit
                            </small>
                        </div>
                        <div class="text-center">
                            <span style="background-color: #dbb658;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center seconds">00</span>
                            <br>
                            <small>
                                Detik
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Acara -->
    @if ($invitation->acara->isNotEmpty())
        <div class="relative flex flex-col justify-center items-center min-h-screen w-full mx-auto max-w-[500px] py-10"
            style="background-image: url('{{ asset('tema/basic-5/images/bg.webp') }}'); background-position: center; background-size: cover;">
            <div class="absolute top-0 left-0 z-10">
                <img src="{{ asset('tema/basic-5/images/corner-1.png') }}" alt="Corner 1"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute bottom-0 right-0 z-10">
                <img src="{{ asset('tema/basic-5/images/corner-2.png') }}" alt="Corner 2"
                    class="w-[150px] h-auto md:w-[250px]">
            </div>
            <div
                class="bg-trans rounded-full shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]">
                <div class="mx-auto my-20">
                    <div
                        class="grid grid-cols-1 gap-6 text-center items-center mx-auto max-w-lg lg:max-w-4xl font-montserrat">
                        @foreach ($invitation->acara as $acara)
                            <div class="text-[#dbb658] text-2xl font-bold mb-5 mt-10 font-croissant"
                                data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                                {{ $acara->nama_acara }}
                            </div>
                            <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                                <div class="text-lg font-medium">
                                    <div class="bg-[#dbb658] text-white py-2 px-4 rounded-lg">
                                        {{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('l') }}
                                    </div>
                                </div>
                                <div class="text-gray-700 my-5">
                                    <div class="text-5xl font-extrabold">
                                        {{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('d') }}
                                    </div>
                                    <div class="text-sm font-light mt-5">
                                        {{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('F') }}
                                    </div>
                                </div>
                                <div class="text-lg font-medium">
                                    <div class="bg-[#dbb658] text-white py-2 px-4 rounded-lg">
                                        {{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('Y') }}
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                                <div class="text-sm mt-5">
                                    <div class="text-gray-700">
                                        Pukul
                                    </div>
                                    <div class="text-gray-700">
                                        {{ \Carbon\Carbon::parse($acara->jam_mulai)->format('H:i') }} -
                                        {{ \Carbon\Carbon::parse($acara->jam_selesai)->format('H:i') }}
                                        {{ $acara->zona_waktu }}
                                    </div>
                                    <br>
                                    <div class="text-gray-700 pb-1 font-bold">
                                        {{ $acara->nama_tempat }}
                                    </div>
                                    <div class="text-gray-700">
                                        {{ $acara->alamat_tempat }}
                                    </div>
                                </div>
                                <br>
                                <div class="flex justify-center text-center items-center text-sm mb-10">
                                    <a class="bg-[#dbb658] text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#dbb658] focus:ring-offset-2 transition ease-in-out duration-150"
                                        href="{{ $acara->link_google_maps }}" target="_blank">
                                        <i class="fas fa-map-marker-alt mb-2"></i>
                                        <br>
                                        Google Map
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Galeri -->
    @if ($invitation->galeri && ($invitation->galeri->video_galeri || $invitation->galeri->foto_galeri))
        <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px] py-10"
            style="background-image: url('{{ asset('tema/basic-5/images/bg.webp') }}'); background-position: center; background-size: cover;">
            <div class="absolute top-0 left-0 z-10">
                <img src="{{ asset('tema/basic-5/images/corner-1.png') }}" alt="Corner 1"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute bottom-0 right-0 z-10">
                <img src="{{ asset('tema/basic-5/images/corner-2.png') }}" alt="Corner 2"
                    class="w-[150px] h-auto md:w-[250px]">
            </div>
            <div
                class="bg-trans rounded-full shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]">
                <div class="mx-auto my-28">
                    @if ($invitation->galeri && ($invitation->galeri->video_galeri || !empty($invitation->galeri->foto_galeri)))
                        <div class="text-[#dbb658] text-2xl font-bold mb-10 font-croissant text-center"
                            data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Galeri
                        </div>
                    @endif
                    @if ($invitation->galeri && $invitation->galeri->video_galeri)
                        <div class="w-full rounded" data-aos="fade-right" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                            <iframe class="w-full h-56 rounded" src="{{ $invitation->galeri->video_galeri }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    @endif
                    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        @if (
                            $invitation->galeri &&
                                is_array(json_decode($invitation->galeri->foto_galeri, true)) &&
                                !empty(json_decode($invitation->galeri->foto_galeri, true)))
                            <div class="grid grid-cols-2 gap-4 pt-5">
                                @foreach (json_decode($invitation->galeri->foto_galeri) as $foto)
                                    <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}"
                                        alt="Foto"
                                        class="w-full aspect-square object-cover rounded cursor-pointer"
                                        onclick="openModal('{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}')">
                                @endforeach
                            </div>
                        @else
                            <p class="text-center text-gray-700">Tidak ada foto galeri</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Cerita -->
    @if (($invitation->cerita && $invitation->cerita->isNotEmpty()) || $invitation->quote)
        <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px] py-10"
            style="background-image: url('{{ asset('tema/basic-5/images/bg.webp') }}'); background-position: center; background-size: cover;">
            <div class="absolute top-0 left-0 z-10">
                <img src="{{ asset('tema/basic-5/images/corner-1.png') }}" alt="Corner 1"
                    class="w-[200px] h-auto md:w-[250px]">
            </div>
            <div class="absolute bottom-0 right-0 z-10">
                <img src="{{ asset('tema/basic-5/images/corner-2.png') }}" alt="Corner 2"
                    class="w-[150px] h-auto md:w-[250px]">
            </div>
            <div
                class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]">
                <div class="mx-auto my-5">
                    @if ($invitation->cerita && $invitation->cerita->isNotEmpty())
                        <div class="text-[#dbb658] text-2xl font-bold font-croissant mb-10 text-center"
                            data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Cerita
                        </div>
                    @endif
                    @if ($invitation->quote)
                        <div class="text-center text-sm pb-5 font-montserrat text-gray-700" data-aos="fade-right"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            {!! nl2br(e($invitation->quote->quote)) !!}
                        </div>
                        <div class="text-center pb-5 text-lg font-semibold font-croissant text-[#dbb658]"
                            data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            {{ $invitation->quote->author }}
                        </div>
                    @endif
                    <br>
                    @if ($invitation->cerita && $invitation->cerita->isNotEmpty())
                        @foreach ($invitation->cerita as $cerita)
                            <div class="mt-5" data-aos="fade-up" data-aos-easing="ease-in-sine"
                                data-aos-duration="800">
                                <div class="bg-white rounded-lg shadow-md text-center border">
                                    <div class="bg-[#dbb658] text-white font-bold font-montserrat p-4 rounded-t-lg">
                                        {{ $cerita->judul_cerita }}
                                    </div>
                                    <div class="p-4 text-sm font-montserrat text-gray-700">
                                        {{ $cerita->isi_cerita }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center text-gray-500">Tidak ada cerita.</p>
                    @endif
                </div>
            </div>
        </div>
    @endif

    <!-- RSVP -->
    <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px] py-10"
        style="background-image: url('{{ asset('tema/basic-5/images/bg.webp') }}'); background-position: center; background-size: cover;">
        <div class="absolute top-0 left-0 z-10">
            <img src="{{ asset('tema/basic-5/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 right-0 z-10">
            <img src="{{ asset('tema/basic-5/images/corner-2.png') }}" alt="Corner 2"
                class="w-[150px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto my-5 w-full">
                <h2 class="text-center text-[#dbb658] text-2xl font-bold mb-10 font-croissant" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    RSVP
                </h2>
                <form action="{{ route('rsvp.store', $invitation->id) }}" method="POST" data-aos="fade-up"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 font-croissant">
                            Nama :
                        </label>
                        <input type="text" id="name" name="nama"
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                            placeholder="Nama Anda" required
                            style="border-color: #d1d5db; transition: border-color 0.3s ease; outline: none;"
                            onfocus="this.style.borderColor='#dbb658'; this.style.boxShadow='0 0 0 1px #dbb658';"
                            onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';"
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700 font-croissant">
                            Pesan :
                        </label>
                        <textarea id="message" name="pesan" rows="4"
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                            placeholder="Tulis pesan Anda di sini..." required style="outline: none;"
                            onfocus="this.style.borderColor='#dbb658'; this.style.boxShadow='0 0 0 1px #dbb658';"
                            onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';"
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                    </div>
                    <div class="mb-4">
                        <div class="relative inline-block w-full">
                            <label for="message" class="block text-sm font-medium text-gray-700 font-croissant">
                                Konfirmasi Kehadiran
                            </label>
                            <button id="dropdownButton"
                                class="mt-1 block text-left w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                                style="transition: 0.3s ease; outline: none;" onclick="toggleDropdown(event)">
                                . . .
                            </button>
                            <ul id="dropdownMenu"
                                class="hidden absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg font-montserrat">
                                <li class="rounded-t-lg py-2 px-3 cursor-pointer hover:bg-[#dbb658] hover:text-white"
                                    onclick="selectOption('Ya, Saya akan datang')">
                                    Ya, Saya akan datang
                                </li>
                                <li class="py-2 px-3 cursor-pointer hover:bg-[#dbb658] hover:text-white"
                                    onclick="selectOption('Maaf, Saya tidak bisa datang')">
                                    Maaf, Saya tidak bisa datang
                                </li>
                                <li class="rounded-b-lg py-2 px-3 cursor-pointer hover:bg-[#dbb658] hover:text-white"
                                    onclick="selectOption('Saya belum tahu bisa datang atau tidak')">
                                    Saya belum tahu bisa datang atau tidak
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" id="konfirmasi_kehadiran" name="konfirmasi_kehadiran">
                    <input type="hidden" name="invitation_id" value="{{ $invitation->id }}">
                    <div class="text-center">
                        <button type="submit"
                            class="text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#dbb658] focus:ring-offset-2 transition ease-in-out duration-150 font-montserrat"
                            style="background-color: #dbb658;">
                            <span>
                                Kirim
                            </span>
                            <i class="fas fa-paper-plane ml-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Penutup -->
    <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px] py-10"
        style="background-image: url('{{ asset('tema/basic-5/images/bg.webp') }}'); background-position: center; background-size: cover;">
        <div class="absolute top-0 left-0 z-10">
            <img src="{{ asset('tema/basic-5/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 right-0 z-10">
            <img src="{{ asset('tema/basic-5/images/corner-2.png') }}" alt="Corner 2"
                class="w-[150px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-3xl shadow-lg p-10 m-5 flex flex-col justify-center items-center text-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto">
                <div class="text-sm text-center text-gray-700" data-aos="fade-left" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <div class="font-montserrat">
                        {{ $invitation->tekspenutup->teks ??
                            'Suatu kebahagiaan & kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do’a restu kepada kami' }}
                    </div>
                    <div class="text-[#dbb658] font-croissant mt-5">
                        {{ $invitation->tekspenutup->salam ?? ' Wassalamu’alaikum Wr. Wb.' }}
                    </div>
                </div>
                <br><br>
                <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="text-sm font-montserrat text-gray-700">
                        Kami yang berbahagia
                    </div>
                    <div class="text-2xl font-bold mt-3 font-croissant text-[#dbb658]">
                        @if ($invitation->mempelai)
                            {{ $invitation->mempelai->panggilan_pria ?? '-' }}
                            &
                            {{ $invitation->mempelai->panggilan_wanita ?? '-' }}
                        @else
                            - & -
                        @endif
                    </div>
                    <div class="mt-10 font-montserrat">
                        <div class="text-sm mt-5 text-[#dbb658] font-montserrat">
                            Created with
                            <i class="fa-solid fa-heart"></i>
                            by
                            <a href="{{ route('home') }}" class="hover:underline" target="_blank">WeInvite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Foto -->
    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center">
        <div class="bg-black/80 absolute inset-0"></div>
        <div class="relative p-1 w-full max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <div class="flex items-center justify-between p-4 border-b">
                    <h3 class="text-xl font-semibold text-[#dbb658]">
                        Galeri Foto
                    </h3>
                    <button type="button"
                        class="text-[#dbb658] bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        onclick="closeModal()">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">
                            Close modal
                        </span>
                    </button>
                </div>
                <div class="px-4 py-2">
                    <img id="modal-image" class="w-full h-full object-contain rounded" src=""
                        alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Musik -->
    <button id="music-control"
        class="fixed top-4 right-4 z-30 text-[#dbb658] bg-white py-3 px-4 rounded-full shadow-lg">
        <i id="music-icon" class="fas fa-music pr-[1px]"></i>
        @if ($invitation->music)
            <iframe id="music-iframe" width="100%" height="160" scrolling="no" frameborder="no"
                allow="autoplay" hidden
                src="https://w.soundcloud.com/player/?url={{ urlencode($invitation->music->file_path) }}&color=%23ff5500&auto_play=true&hide_related=true&show_comments=false&show_user=false&show_reposts=false&visual=false&repeat=true">
            </iframe>
        @endif
    </button>

    <script>
        // Disable Klik Kanan
        document.addEventListener('contextmenu', event => event.preventDefault());

        // Disable specific key combinations
        document.addEventListener('keydown', event => {
            if (
                event.key === "F12" ||
                (event.ctrlKey && event.shiftKey && (event.key === "I" || event.key === "J" || event.key === "C" ||
                    event.key === "K")) ||
                (event.ctrlKey && event.key === "U") ||
                (event.metaKey && event.altKey && (event.key === "I" || event.key === "J" || event.key === "U")) ||
                (event.metaKey && event.shiftKey && (event.key === "C" || event.key === "K"))
            ) {
                event.preventDefault();
            }
        });

        // Detect DevTools is open
        let devtoolsOpen = false;
        setInterval(() => {
            const widthThreshold = window.outerWidth - window.innerWidth > 100;
            const heightThreshold = window.outerHeight - window.innerHeight > 100;
            if (widthThreshold || heightThreshold) {
                if (!devtoolsOpen) {
                    devtoolsOpen = true;
                }
            } else {
                devtoolsOpen = false;
            }
        }, 500);

        // Inisialisasi AOS
        AOS.init();

        // Fungsi Buka Undangan
        function openInvitation() {
            document.body.style.overflowY = "auto";
            document.body.style.overflowX = "hidden";

            const invitation = document.getElementById("main-invitation");
            invitation.scrollIntoView({
                behavior: "smooth",
            });
        }

        // Inisialisasi Navbar saat Halaman Dimuat
        window.onload = function() {
            document.body.style.overflow = "hidden";
            const coverPage = document.getElementById("cover-page");
            coverPage.scrollIntoView({
                behavior: "smooth",
            });
        };

        // Fungsi Countdown
        document.addEventListener("DOMContentLoaded", function() {
            @if ($invitation->acara->isNotEmpty())
                const targetDate = new Date(
                    "{{ \Carbon\Carbon::parse($acara->tanggal_acara)->format('Y-m-d H:i:s') }}").getTime();
            @else
                const targetDate = null;
            @endif

            if (targetDate) {
                const countdownInterval = setInterval(function() {
                    const now = new Date().getTime();

                    const distance = targetDate - now;

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.querySelector(".days").innerText = String(days).padStart(2, '0');
                    document.querySelector(".hours").innerText = String(hours).padStart(2, '0');
                    document.querySelector(".minutes").innerText = String(minutes).padStart(2, '0');
                    document.querySelector(".seconds").innerText = String(seconds).padStart(2, '0');

                    if (distance < 0) {
                        clearInterval(countdownInterval);
                        document.getElementById("countdown").innerHTML =
                            "<h2 style='color:red;'>Acara Telah Dimulai!</h2>";
                    }
                }, 1000);
            } else {
                document.getElementById("countdown").innerHTML =
                    "<h2 style='color:red;'>Tidak Ada Acara</h2>";
            }
        });

        // Fungsi Buka Modal
        function openModal(imageSrc) {
            const modalImage = document.getElementById("modal-image");
            modalImage.src = imageSrc;

            const modal = document.getElementById("default-modal");
            const modalContent = modal.querySelector('.relative');

            modal.classList.remove("hidden");

            gsap.fromTo(
                modalContent, {
                    scale: 0,
                    opacity: 0,
                }, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.5,
                    ease: "back.out(1.7)",
                }
            );
        }

        // Fungsi Tutup Modal
        function closeModal() {
            const modal = document.getElementById("default-modal");
            const modalContent = modal.querySelector('.relative');

            gsap.to(modalContent, {
                scale: 0,
                opacity: 0,
                duration: 0.5,
                ease: "back.in(1.7)",
                onComplete: () => {
                    modal.classList.add("hidden");
                },
            });
        }

        // Fungsi Salin Nomor Rekening
        function copyToClipboard(id) {
            const rekeningText = document.getElementById("nomor_rekening_" + id).innerText;

            const tempTextArea = document.createElement("textarea");
            tempTextArea.value = rekeningText;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand("copy");
            document.body.removeChild(tempTextArea);

            const button = document.getElementById("copyButton_" + id);
            button.innerHTML =
                '<span>Nomor Rekening Berhasil Disalin!</span> <i class="fas fa-check text-lg ml-1"></i>';

            setTimeout(() => {
                button.innerHTML =
                    '<span>Salin Nomor Rekening</span> <i class="fas fa-copy text-lg ml-1"></i>';
            }, 3000);
        }

        // Fungsi Toggle Dropdown
        function toggleDropdown(event) {
            event.preventDefault();
            const dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("hidden");
        }

        // Fungsi Pilih Opsi Dropdown
        function selectOption(option) {
            const dropdownButton = document.getElementById("dropdownButton");
            dropdownButton.textContent = option;
            document.getElementById("dropdownMenu").classList.add("hidden");

            const konfirmasiInput = document.getElementById("konfirmasi_kehadiran");
            if (option === 'Ya, Saya akan datang') {
                konfirmasiInput.value = 1;
            } else if (option === 'Maaf, Saya tidak bisa datang') {
                konfirmasiInput.value = 2;
            } else if (option === 'Saya belum tahu bisa datang atau tidak') {
                konfirmasiInput.value = 3;
            }
        }

        // Fungsi Tutup Dropdown Saat Mengklik Di Luar Dropdown
        document.addEventListener("click", function(event) {
            const dropdownButton = document.getElementById("dropdownButton");
            const dropdownMenu = document.getElementById("dropdownMenu");
            if (!dropdownButton.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
            }
        });


        // Fungsi Pause & Play Music
        const musicControl = document.getElementById('music-control');
        const musicIframe = document.getElementById('music-iframe');
        const musicIcon = document.getElementById('music-icon');
        let isPlaying = true;

        function toggleMusic() {
            if (isPlaying) {
                musicIframe.contentWindow.postMessage('{"method":"pause"}', '*');
                musicIcon.classList.remove('fa-music');
                musicIcon.classList.add('fa-pause');
            } else {
                musicIframe.contentWindow.postMessage('{"method":"play"}', '*');
                musicIcon.classList.remove('fa-pause');
                musicIcon.classList.add('fa-music');
            }
            isPlaying = !isPlaying;
        }

        musicControl.addEventListener('click', toggleMusic);

        // Custom Form
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                const requiredInputs = Array.from(form.querySelectorAll('input[required]'));
                let firstInvalidInput = null;

                requiredInputs.forEach(input => {
                    input.setCustomValidity('');
                });

                for (const input of requiredInputs) {
                    if (!input.value.trim()) {
                        if (!firstInvalidInput) {
                            firstInvalidInput = input;
                        }
                        input.setCustomValidity('Kolom ini harus diisi.');
                    }
                }

                if (firstInvalidInput) {
                    firstInvalidInput.focus();
                    firstInvalidInput.reportValidity();
                    event.preventDefault();
                }
            });
        });

        // Flash message
        document.addEventListener('DOMContentLoaded', () => {
            const flashMessage = document.getElementById('flash-message');

            if (flashMessage) {
                flashMessage.style.visibility = "visible";

                gsap.fromTo(flashMessage, {
                    scale: 0.8,
                    opacity: 0
                }, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.7,
                    ease: "power3.out"
                });

                setTimeout(() => {
                    gsap.to(flashMessage, {
                        opacity: 0,
                        duration: 0.5,
                        onComplete: () => flashMessage.remove()
                    });
                }, 3000);
            }
        });
    </script>

</body>

</html>
