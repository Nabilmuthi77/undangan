<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $invitation->title }}</title>

    <!-- Resources -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=DM+Serif+Display&display=swap"
        rel="stylesheet">

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
        html {
            scroll-behavior: smooth;
        }

        #modal-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
        }

        .vertical-text {
            writing-mode: vertical-lr;
            text-orientation: mixed;
        }

        .text-shadow {
            text-shadow: -5px 5px 0px rgba(255, 255, 255, 0.2);
        }

        .text-shadow-2 {
            text-shadow: 0px 5px 0px rgba(255, 255, 255, 0.2);
        }

        .px-4::-webkit-scrollbar {
            width: 5px;
        }

        .px-4::-webkit-scrollbar-track {
            background: #ffffff;
            border-radius: 10px;
        }

        .px-4::-webkit-scrollbar-thumb {
            background-color: #C3CEB1;
            border-radius: 10px;
        }

        .px-4::-webkit-scrollbar-thumb:hover {
            background-color: #C3CEB1;
        }
    </style>
</head>

<body class="antialiased" style="overflow: hidden; background-color: #C3CEB1;">

    <!-- Sampul -->
    <section>
        <div id="cover-page"
            class="bg-[#879374] relative flex flex-col justify-between items-center min-h-screen mx-auto max-w-[500px]">
            <div class="flex flex-col justify-center py-5 space-y-5 flex-grow w-full">
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
                <!-- Judul -->
                <div class="text-start text-white pl-5 pb-10 z-10" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="800" data-aos-delay="500">
                    <div class="font-pinyon text-3xl">
                        The Wedding of
                    </div>
                    <div class="mt-1 font-dmSerifDisplay text-4xl">
                        @if ($invitation->mempelai)
                            {{ $invitation->mempelai->panggilan_pria ?? '-' }}
                            &
                            {{ $invitation->mempelai->panggilan_wanita ?? '-' }}
                        @else
                            - & -
                        @endif
                    </div>
                </div>
                {{-- Foto Cover --}}
                <div class="relative flex justify-center z-10 pb-5" data-aos="fade-left" data-aos-easing="ease-in-sine"
                    data-aos-duration="800" data-aos-delay="500">
                    @if (!empty($fotoSampul))
                        <img src="{{ asset($fotoSampul) }}" alt="Cover Image"
                            class="rounded-lg max-w-64 h-64 object-cover">
                        <div class="absolute rounded-lg border-[6px] border-[#879374] top-[-4rem] right-3 z-20">
                            <img src="{{ asset($fotoSampul) }}" alt="Cover Image"
                                class="rounded-sm max-w-32 h-32 object-cover">
                        </div>
                    @else
                        <p class="text-red-600 font-cormorant text-lg font-bold my-20 text-center">
                            Anda belum mengupload foto sampul
                        </p>
                    @endif
                </div>
                <!-- Nama Tamu -->
                <div class="text-start text-white ml-5 z-10 border-l-[10px] border-white" data-aos="fade-right"
                    data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-delay="500">
                    <div class="font-dmSerifDisplay ml-3">
                        <div class="mt-[-0.35rem]">
                            Kepada Yth :
                        </div>
                        <div class="mt-1">
                            Bapak/Ibu/Saudara/i
                        </div>
                        <div class="rounded text-lg mt-5 mb-1">
                            @if (isset($guestData) && !empty($guestData->nama_tamu))
                                {{ $guestData->nama_tamu }}
                            @else
                                -
                            @endif
                        </div>
                        <hr class="border-white">
                        <div>
                            <button type="button" onclick="openInvitation()"
                                class="text-[#879374] border-2 border-[#C3CEB1] py-2 px-6 mt-5 font-cormorant font-bold text-lg focus:outline-none focus:ring-2 focus:ring-[#ffffff] focus:ring-offset-1 transition duration-150"
                                style="background-color: #ffffff;">
                                <i class="fa-solid fa-envelope mr-1"></i>
                                Buka Undangan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pembuka -->
    <section id="main-invitation">
        <div
            class="bg-[#879374] relative flex flex-col justify-center items-start min-h-screen w-full mx-auto max-w-[500px]">
            <div
                class="rounded-tr-[230px] rounded-br-xl border-t-4 border-b-4 border-r-4 border-[#C3CEB1] bg-white shadow-xl my-10">
                <!-- Foto Pembuka -->
                <div class="w-full">
                    @if (!empty($fotoPembuka))
                        <img src="{{ asset($fotoPembuka) }}" alt="Foto Pembuka"
                            class="max-w-80 h-auto rounded-tr-[230px] m-2 border-2 border-[#C3CEB1] shadow-xl"
                            data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    @else
                        <p class="text-red-600 font-cormorant text-lg font-bold text-center mt-20 mb-16 w-52">
                            Anda belum mengupload foto pembuka
                        </p>
                    @endif
                    <div class="mt-8 pl-2 text-[#879374] font-dmSerifDisplay text-4xl" data-aos="fade-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        {{ $invitation->mempelai ? $invitation->mempelai->panggilan_pria : '-' }} <span
                            class="px-2">&</span>
                        {{ $invitation->mempelai ? $invitation->mempelai->panggilan_wanita : '-' }}
                    </div>
                </div>
                <!-- Countdown -->
                <div class="relative w-full mt-3 max-w-80 mx-auto">
                    <div id="countdown" class="text-center font-cormorant flex justify-center space-x-4 mx-2">
                        <div class="bg-[#879374]/50 text-center border-b-[3px] border-[#879374] px-2 mt-5"
                            data-aos="flip-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <span class="text-xl w-12 h-12 flex items-center justify-center days">
                                00
                            </span>
                            <span class="pb-3 flex items-center justify-center">
                                Hari
                            </span>
                        </div>
                        <div class="bg-[#879374]/50 text-center border-b-[3px] border-[#879374] px-2 mt-5"
                            data-aos="flip-up" data-aos-easing="ease-in-sine" data-aos-duration="800"
                            data-aos-delay="200">
                            <span class="text-xl p-3 w-12 h-12 flex items-center justify-center hours">
                                00
                            </span>
                            <span class="pb-3 flex items-center justify-center">
                                Jam
                            </span>
                        </div>
                        <div class="bg-[#879374]/50 text-center border-b-[3px] border-[#879374] px-2 mt-5"data-aos="flip-up"
                            data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-delay="400">
                            <span class="text-xl p-3 w-12 h-12 flex items-center justify-center minutes">
                                00
                            </span>
                            <span class="pb-3 flex items-center justify-center">
                                Menit
                            </span>
                        </div>
                        <div class="bg-[#879374]/50 text-center border-b-[3px] border-[#879374] px-2 mt-5"data-aos="flip-up"
                            data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-delay="600">
                            <span class="text-xl p-3 w-12 h-12 flex items-center justify-center seconds">
                                00
                            </span>
                            <span class="pb-3 flex items-center justify-center">
                                Detik
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Quote -->
                @if ($invitation->quote)
                    <div class="text-center my-10 max-w-80 mx-auto" data-aos="fade-up" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <div class="text-lg px-5 font-cormorant">
                            <i class="fa-solid fa-quote-left text-[#879374] text-2xl"></i>
                            <br>
                            {!! nl2br(e($invitation->quote->quote)) !!}
                        </div>
                        <div class="pt-5 font-semibold font-croissant text-[#879374]">
                            {{ $invitation->quote->author }}
                        </div>
                    </div>
                @endif
            </div>
            <!-- Tanggal -->
            <div class="absolute rounded-l-[230px] bg-white border-t-2 border-b-2 border-l-2 border-[#C3CEB1] shadow-lg top-52 right-0 h-[400px] px-4 py-6 flex items-center justify-center"
                data-aos="slide-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                <div class="font-cormorant text-2xl font-extrabold text-[#879374] whitespace-nowrap vertical-text">
                    <span>
                        @if ($tanggalAcara)
                            {{ \Carbon\Carbon::parse($tanggalAcara)->format('d') }}
                        @else
                            -
                        @endif
                    </span>
                    <span>
                        @if ($tanggalAcara)
                            {{ \Carbon\Carbon::parse($tanggalAcara)->format('F') }}
                        @else
                            -
                        @endif
                    </span>
                    <span>
                        @if ($tanggalAcara)
                            {{ \Carbon\Carbon::parse($tanggalAcara)->format('Y') }}
                        @else
                            -
                        @endif
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Mempelai -->
    <section>
        <div class="bg-[#879374] relative flex flex-col min-h-screen w-full mx-auto max-w-[500px]">
            <!-- Teks Pembuka -->
            <div class="bg-white p-5 border-b-4 border-t-4 border-[#C3CEB1] shadow-xl mt-10">
                <div class="text-3xl">
                    <div class="font-pinyon" data-aos="fade-right" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        We Are Getting
                    </div>
                    <div class="mt-1 font-cormorant font-semibold text-[#879374] uppercase" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Married!
                    </div>
                </div>
                <div class="text-sm mt-7" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="text-[#879374] font-croissant">
                        {{ $invitation->tekspembuka->salam ?? 'Assalamu’alaikum Wr. Wb.' }}
                    </div>
                    <div class="text-lg mt-2 font-cormorant">
                        {{ $invitation->tekspembuka->teks ?? 'Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, Insya Allah kami akan menyelenggarakan acara pernikahan :' }}
                    </div>
                </div>
            </div>
            <!-- Card Mempelai Pria -->
            <div class="mt-10 flex justify-end ml-auto relative">
                <!-- The Groom Mobile -->
                <div class="block md:hidden absolute -left-16 top-[35%] transform -translate-y-1/2" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <span
                        class="text-5xl font-cormorant font-bold text-white vertical-text rotate-[-0.50turn] text-shadow">
                        The Groom
                    </span>
                </div>
                <!-- The Groom Desktop -->
                <div class="hidden md:flex flex-col justify-center items-center gap-2 md:mr-[3.7rem] text-center"
                    data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <span class="text-5xl font-cormorant font-bold text-white text-shadow">
                        The
                    </span>
                    <span class="text-5xl font-cormorant font-bold text-white text-shadow">
                        Groom
                    </span>
                </div>
                <!-- Data Mempelai Pria -->
                <div class="flex flex-col items-end" data-aos="fade-left" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <div
                        class="bg-white font-cormorant border-t-4 border-b-4 border-l-4 border-[#C3CEB1] rounded-tl-[130px] rounded-l-xl w-64 p-2 pb-10 mt-10 shadow-xl">
                        @if ($invitation->mempelai)
                            <img src="{{ asset($invitation->mempelai->foto_pria) }}" alt=""
                                class="w-64 h-64 object-cover border-2 border-[#C3CEB1] rounded-tl-[130px] shadow-xl">
                            <h2 class="text-[#879374] text-3xl font-extrabold mt-10 flex justify-end">
                                {{ $invitation->mempelai->nama_pria }}
                            </h2>
                            <p class="text-lg mt-3 flex justify-end">
                                Putra ke-{{ $invitation->mempelai->anak_ke_pria }}
                            </p>
                            <p class="text-lg flex justify-end">
                                Bapak {{ $invitation->mempelai->ayah_pria }}
                            </p>
                            <p class="text-lg flex justify-end">
                                &
                            </p>
                            <p class="text-lg mb-3 flex justify-end">
                                Ibu {{ $invitation->mempelai->ibu_pria }}
                            </p>
                            <div class="flex justify-end mt-5">
                                <a href="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_pria ? $invitation->mempelai->instagram_link_pria : '#' }}"
                                    target="_blank"
                                    class="flex items-center gap-2 py-[0.35rem] px-6 bg-[#879374] border-2 border-[#C3CEB1] text-white font-cormorant font-bold shadow-xl focus:ring-2 focus:ring-[#C3CEB1] focus:ring-offset-1 transition ease-in-out duration-150 
                                    {{ !$invitation->mempelai || !$invitation->mempelai->instagram_link_pria ? 'pointer-events-none opacity-50' : '' }}">
                                    <i class="fab fa-instagram"></i>
                                    Instagram
                                </a>
                            </div>
                        @else
                            <p class="text-end mt-10 text-red-600 font-dmSerifDisplay">
                                Anda belum mengisi data mempelai
                            </p>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Card Mempelai Wanita -->
            <div class="mb-10 flex justify-end mr-auto relative">
                <!-- Data Mempelai Wanita -->
                <div class="flex justify-start mr-auto" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <div class="flex flex-col items-start">
                        <div
                            class="bg-white font-cormorant border-t-4 border-b-4 border-r-4 border-[#C3CEB1] rounded-tr-[130px] rounded-r-xl w-64 p-2 pb-10 mt-10 shadow-xl">
                            @if ($invitation->mempelai)
                                <img src="{{ asset($invitation->mempelai->foto_wanita) }}" alt=""
                                    class="w-64 h-64 object-cover rounded-tr-[130px] shadow-xl">

                                <h2 class="text-[#879374] text-3xl font-extrabold mt-10 flex justify-start">
                                    {{ $invitation->mempelai->nama_wanita }}
                                </h2>
                                <p class="text-lg mt-3 flex justify-start">
                                    Putri ke-{{ $invitation->mempelai->anak_ke_wanita }}
                                </p>
                                <p class="text-lg flex justify-start">
                                    Bapak {{ $invitation->mempelai->ayah_wanita }}
                                </p>
                                <p class="text-lg flex justify-start">
                                    &
                                </p>
                                <p class="text-lg mb-3 flex justify-start">
                                    Ibu {{ $invitation->mempelai->ibu_wanita }}
                                </p>
                                <div class="flex justify-start mt-5">
                                    <a href="{{ $invitation->mempelai && $invitation->mempelai->instagram_link_wanita ? $invitation->mempelai->instagram_link_wanita : '#' }}"
                                        target="_blank"
                                        class="flex items-center gap-2 py-[0.35rem] px-6 bg-[#879374] border-2 border-[#C3CEB1] text-white font-cormorant font-bold shadow-xl focus:ring-2 focus:ring-[#C3CEB1] focus:ring-offset-1 transition ease-in-out duration-150 
                                    {{ !$invitation->mempelai || !$invitation->mempelai->instagram_link_wanita ? 'pointer-events-none opacity-50' : '' }}">
                                        <i class="fab fa-instagram"></i>
                                        Instagram
                                    </a>
                                </div>
                            @else
                                <p class="text-end mt-10 text-red-600 font-dmSerifDisplay">
                                    Anda belum mengisi data mempelai
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- The Bride Mobile -->
                <div class="block md:hidden absolute -right-16 top-[35%] transform -translate-y-1/2"
                    data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <span class="text-5xl font-cormorant font-bold text-white vertical-text text-shadow">
                        The Bride
                    </span>
                </div>
                <!-- The Bride Dekstop -->
                <div class="hidden md:flex flex-col justify-center items-center gap-2 md:ml-[4rem] text-center"
                    data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <span class="text-5xl font-cormorant font-bold text-white text-shadow">
                        The
                    </span>
                    <span class="text-5xl font-cormorant font-bold text-white text-shadow">
                        Bride
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Acara -->
    <section>
        <div class="bg-white relative flex flex-col justify-center items-center min-h-screen max-w-[500px] mx-auto">
            <!-- Daftar Acara -->
            @if ($invitation->acara->isNotEmpty())
                <div
                    class="bg-[#879374] border-4 border-[#C3CEB1] text-white rounded-full shadow-xl p-5 mx-2 my-10 flex flex-col max-w-[350px]">
                    <div class="my-16">
                        @foreach ($invitation->acara as $acara)
                            <div class="my-10 text-center">
                                <div data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                                    <h3 class="text-3xl font-dmSerifDisplay">
                                        {{ $acara->nama_acara }}
                                    </h3>
                                    <hr class="border-white mt-3">
                                </div>
                                <div class="mt-7 font-cormorant" data-aos="fade-up" data-aos-easing="ease-in-sine"
                                    data-aos-duration="800">
                                    <p class="text-lg">Hari/Tanggal :</p>
                                    <p class="text-center text-lg mt-1">
                                        @php
                                            \Carbon\Carbon::setLocale('id');
                                            $tanggalAcara = \Carbon\Carbon::parse($acara->tanggal_acara);
                                        @endphp
                                        {{ $tanggalAcara->translatedFormat('l') }},
                                        {{ $tanggalAcara->translatedFormat('d') }}
                                        {{ $tanggalAcara->translatedFormat('F') }}
                                        {{ $tanggalAcara->translatedFormat('Y') }}
                                    </p>
                                    <p class="text-lg mt-5">Waktu :</p>
                                    <p class="text-center text-lg mt-1">
                                        {{ \Carbon\Carbon::parse($acara->jam_mulai)->format('H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($acara->jam_selesai)->format('H:i') }}
                                        {{ $acara->zona_waktu }}
                                    </p>
                                    <p class="text-lg mt-5">Tempat : {{ $acara->nama_tempat }}</p>
                                    <p class="text-center text-lg mt-1">
                                        {{ $acara->alamat_tempat }}
                                    </p>
                                    <div class="mt-7 flex justify-center">
                                        <a href="{{ $acara->link_google_maps }}" target="_blank"
                                            class="bg-white font-bold shadow-xl border-2 border-[#C3CEB1] text-[#879374] py-2 px-6 flex items-center justify-center space-x-2 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-1 transition ease-in-out duration-150">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <span>Google Maps</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Galeri -->
    @if ($invitation->galeri && ($invitation->galeri->video_galeri || $invitation->galeri->foto_galeri))
        <section>
            <div
                class="bg-[#879374] relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
                <div class="flex flex-col my-10">
                    <!-- Judul -->
                    <div class="pb-10 px-5 mx-auto text-center text-white">
                        <div class="text-3xl uppercase font-dmSerifDisplay" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="800" style="font-weight: 1000;">
                            Gallery
                        </div>
                        <div class="text-3xl font-cormorant text-shadow-2" data-aos="fade-right"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            OUR MOMENTS
                        </div>
                    </div>
                    <!-- Foto & Video -->
                    <div class="mx-5">
                        <!-- Video -->
                        @if ($invitation->galeri->first() && $invitation->galeri->first()->video_galeri)
                            <div class="shadow-xl" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                                data-aos-duration="800">
                                <iframe class="w-full h-56" src="{{ $invitation->galeri->first()->video_galeri }}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        @endif
                        <!-- Foto Galeri -->
                        <div>
                            @if (
                                $invitation->galeri &&
                                    is_array(json_decode($invitation->galeri->foto_galeri, true)) &&
                                    !empty(json_decode($invitation->galeri->foto_galeri, true)))
                                <div class="grid grid-cols-2 gap-4 py-5">
                                    @foreach (json_decode($invitation->galeri->foto_galeri) as $foto)
                                        <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}"
                                            alt=""
                                            class="w-full aspect-square object-cover cursor-pointer shadow-xl"
                                            onclick="openModal('{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}')"
                                            data-aos="zoom-in" data-aos-easing="ease-in-sine"
                                            data-aos-duration="800">
                                    @endforeach
                                </div>
                            @else
                                <p class="text-center font-cormorant text-lg font-bold text-red-600"
                                    data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                                    Anda belum mengupload foto galeri
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Cerita -->
    @if ($invitation->cerita->isNotEmpty())
        <section>
            <div
                class="bg-[#879374] relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
                <!-- Konten -->
                <div class="flex flex-col">
                    <div class="my-10">
                        <!-- Judul -->
                        <div class="text-4xl uppercase font-dmSerifDisplay text-white text-center mb-7"
                            data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Love Story
                        </div>
                        <!-- Divider -->
                        <div class="flex items-center justify-center text-center gap-4 mb-7" data-aos="zoom-in"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <div class="h-[1px] bg-white flex-1"></div>
                            <div class="text-3xl text-white mx-0 md:mx-2">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="h-[1px] bg-white flex-1"></div>
                        </div>
                        <!-- Cerita -->
                        @foreach ($invitation->cerita as $cerita)
                            <div class="mt-5 mx-5">
                                <div class="bg-white shadow-xl rounded-xl border-4 border-[#C3CEB1]"
                                    data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                                    <div class="text-xl text-[#879374] font-dmSerifDisplay p-4">
                                        {{ $cerita->judul_cerita }}
                                    </div>
                                    <div class="pb-4 px-4 text-lg font-cormorant">
                                        {{ $cerita->isi_cerita }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Wish & RSVP -->
    <section>
        <div class="bg-white relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
            <div class="bg-[#879374] w-full flex flex-col rounded-full border-4 border-[#C3CEB1] py-32 mx-2 my-10">
                <div class="my-10">
                    <!-- Wish -->
                    @if ($commentsEnabled)
                        <div class="text-center text-white">
                            <h2 class="text-3xl font-dmSerifDisplay mb-5 mx-5" data-aos="fade-down"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                                Wedding Wish
                            </h2>
                            <p class="mb-10 mx-5 font-cormorant text-lg" data-aos="fade-up"
                                data-aos-easing="ease-in-sine" data-aos-duration="800">
                                Berikan ucapan, harapan dan do'a kepada kedua mempelai
                            </p>
                        </div>
                        <!-- Form Wish -->
                        <form action="{{ route('comments.store', $invitation->id) }}" method="POST"
                            data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800"
                            class="mx-5 mb-5">
                            @csrf
                            <div class="mb-4 w-full">
                                <label for="name" class="block text-white font-medium font-dmSerifDisplay">
                                    Nama:
                                </label>
                                <input type="text" id="name" name="name"
                                    class="mt-1 block w-full border border-[#C3CEB1] py-2 px-3 text-sm font-poppins text-black"
                                    placeholder="Nama Anda" required
                                    onfocus="this.style.borderColor='#C3CEB1'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                    onblur="this.style.borderColor='#C3CEB1'; this.style.boxShadow='none';"
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')" style="border-color: #C3CEB1;">
                            </div>
                            <div class="mb-4 w-full">
                                <label for="message" class="block text-white font-medium font-dmSerifDisplay">
                                    Ucapan atau Doa:
                                </label>
                                <textarea id="message" name="message" rows="4"
                                    class="mt-1 block w-full border border-[#C3CEB1] py-2 px-3 text-sm font-poppins text-black"
                                    placeholder="Tulis ucapan atau doa Anda di sini..." required
                                    onfocus="this.style.borderColor='#C3CEB1'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                    onblur="this.style.borderColor='#C3CEB1'; this.style.boxShadow='none';"
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                            </div>
                            <div class="text-center text-sm">
                                <button type="submit"
                                    class="text-[#879374] shadow-xl py-2 px-6 border-2 border-[#C3CEB1] focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-1 transition ease-in-out duration-150 font-montserrat"
                                    style="background-color: #ffffff">
                                    <span>Kirim</span>
                                    <i class="fas fa-paper-plane ml-1"></i>
                                </button>
                            </div>
                        </form>
                        <!-- Their Wish -->
                        <div class="px-4 mb-10 mt-5 mx-2 text-black" style="max-height: 500px; overflow-y: auto;"
                            data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                            @foreach ($comments as $comment)
                                <div class="my-4 p-5 bg-white rounded-xl border-4 border-[#C3CEB1]">
                                    <h4 class="uppercase text-[#879374] font-dmSerifDisplay">
                                        {{ $comment->name }}
                                    </h4>
                                    <p class="font-cormorant text-lg pt-1">
                                        {{ $comment->message }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <!-- RSVP -->
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <!-- Judul RSVP -->
                        <h2 class="text-white text-center text-3xl font-dmSerifDisplay mt-10 mb-5 mx-5">
                            RSVP
                        </h2>
                        <!-- Form -->
                        <form action="{{ route('rsvp.store', $invitation->id) }}" method="POST" class="mx-5">
                            @csrf
                            <div class="mb-4 w-full">
                                <label for="name" class="block text-white font-medium font-dmSerifDisplay">
                                    Nama :
                                </label>
                                <input type="text" id="name" name="nama"
                                    class="mt-1 block w-full border border-[#C3CEB1] py-2 px-3 text-sm font-poppins text-black"
                                    placeholder="Nama Anda" required
                                    onfocus="this.style.borderColor='#C3CEB1'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                    onblur="this.style.borderColor='#C3CEB1'; this.style.boxShadow='none';"
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                    oninput="this.setCustomValidity('')" style="border-color: #C3CEB1;">

                            </div>
                            <div class="mb-4 w-full">
                                <label for="message" class="block text-white font-medium font-dmSerifDisplay">
                                    Pesan :
                                </label>
                                <textarea id="message" name="pesan" rows="4"
                                    class="mt-1 block w-full border border-[#C3CEB1] py-2 px-3 text-sm font-poppins text-black"
                                    placeholder="Tulis pesan Anda di sini..." required
                                    onfocus="this.style.borderColor='#C3CEB1'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                    onblur="this.style.borderColor='#C3CEB1'; this.style.boxShadow='none';"
                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                            </div>
                            <div class="mb-4">
                                <div class="relative inline-block w-full">
                                    <label for="message" class="block text-white font-medium font-dmSerifDisplay">
                                        Konfirmasi Kehadiran
                                    </label>
                                    <button id="dropdownButton"
                                        class="mt-1 block text-left bg-white text-black w-full border border-[#C3CEB1] shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                                        style="transition: 0.5s ease; outline: none;" onclick="toggleDropdown(event)">
                                        <span class="text-gray-600">. . .</span>
                                    </button>
                                    <ul id="dropdownMenu"
                                        class="hidden absolute z-10 w-full mt-[0.10rem] bg-white text-black border border-[#C3CEB1] shadow-lg font-montserrat">
                                        <li class="py-2 px-3 cursor-pointer hover:bg-[#C3CEB1] hover:text-white"
                                            onclick="selectOption('Ya, Saya akan datang')">
                                            Ya, Saya akan datang
                                        </li>
                                        <li class="py-2 px-3 cursor-pointer hover:bg-[#C3CEB1] hover:text-white"
                                            onclick="selectOption('Maaf, Saya tidak bisa datang')">
                                            Maaf, Saya tidak bisa datang
                                        </li>
                                        <li class="py-2 px-3 cursor-pointer hover:bg-[#C3CEB1] hover:text-white"
                                            onclick="selectOption('Saya belum tahu bisa datang atau tidak')">
                                            Saya belum tahu bisa datang atau tidak
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <input type="hidden" id="konfirmasi_kehadiran" name="konfirmasi_kehadiran">
                            <input type="hidden" name="invitation_id" value="{{ $invitation->id }}">
                            <div class="text-center text-sm">
                                <button type="submit"
                                    class="text-[#879374] shadow-xl py-2 px-6 border border-[#C3CEB1] focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-1 transition ease-in-out duration-150 font-montserrat"
                                    style="background-color: #ffffff">
                                    <span>Kirim</span>
                                    <i class="fas fa-paper-plane ml-1"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kado Digital -->
    @if ($invitation->kadodigital->isNotEmpty())
        <section>
            <div
                class="bg-[#879374] relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
                <div class="flex flex-col">
                    <div class="my-10 bg-white border-4 border-[#C3CEB1] rounded-xl py-10 mx-5 shadow-xl"
                        data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <!-- Judul -->
                        <div class="text-center mb-9">
                            <div class="text-3xl uppercase text-[#879374] font-dmSerifDisplay mb-5 mx-8">
                                Kado Digital
                            </div>
                            <div class="font-cormorant text-lg my-5 mx-8">
                                Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah
                                ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless
                            </div>
                        </div>
                        <!-- Divider -->
                        <div class="flex items-center justify-center text-center gap-4">
                            <div class="h-[1px] bg-[#879374] flex-1"></div>
                            <div class="text-2xl text-[#879374] mx-0 md:mx-2">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="h-[1px] bg-[#879374] flex-1"></div>
                        </div>
                        <!-- Rekening -->
                        @foreach ($invitation->kadodigital as $kado)
                            <div>
                                <div class="w-full text-center font-cormorant my-10">
                                    <p class="text-lg mt-4">Bank :</p>
                                    <p class="text-lg text-[#879374] font-dmSerifDisplay">{{ $kado->nama_bank }}</p>
                                    <p class="mt-4 text-lg">Atas Nama :</p>
                                    <p class="text-lg text-[#879374] font-dmSerifDisplay">{{ $kado->penerima }}</p>
                                    <p class="mt-4 text-lg">Nomor Rekening :</p>
                                    <p id="nomor_rekening_{{ $kado->id }}"
                                        class="text-lg text-[#879374] font-dmSerifDisplay mb-4">
                                        {{ $kado->no_rekening }}
                                    </p>
                                    <div class="mb-4 text-center">
                                        <button id="copyButton_{{ $kado->id }}" type="button"
                                            onclick="copyToClipboard({{ $kado->id }})"
                                            class="text-lg shadow-xl text-nowrap border-2 border-[#C3CEB1] text-white py-2 px-6 focus:outline-none focus:ring-2 focus:ring-[#C3CEB1] focus:ring-offset-2 transition ease-in-out duration-150"
                                            style="background-color: #879374;">
                                            <span>Salin Nomor Rekening</span>
                                            <i class="fas fa-copy text-lg ml-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Penutup -->
    <div class="bg-[#879374] relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
        <!-- Konten -->
        <div class="flex flex-col text-center bg-white border-4 border-[#C3CEB1] rounded-xl py-10 px-5 mx-5 shadow-xl">
            <div class="my-5">
                <!-- Teks Penutup -->
                <div data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="font-cormorant text-lg">
                        {{ $invitation->tekspenutup->teks ??
                            'Suatu kebahagiaan & kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do’a restu kepada kami' }}
                    </div>
                    <div class="text-[#879374] font-dmSerifDisplay mt-5">
                        {{ $invitation->tekspenutup->salam ?? ' Wassalamu’alaikum Wr. Wb.' }}
                    </div>
                </div>
                <br><br>
                <!-- Teks -->
                <div>
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="font-cormorant text-lg">
                            Kami yang berbahagia
                        </div>
                        <div class="text-[#879374] text-2xl font-bold mt-3 font-dmSerifDisplay">
                            @if ($invitation->mempelai)
                                {{ $invitation->mempelai->panggilan_pria ?? '-' }}
                                &
                                {{ $invitation->mempelai->panggilan_wanita ?? '-' }}
                            @else
                                - & -
                            @endif
                        </div>
                    </div>
                    <div class="mt-10 font-cormorant text-lg" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <div class="mt-5">
                            Created with
                            <i class="fa-solid fa-heart text-[#879374]" data-aos="zoom-in"
                                data-aos-easing="ease-in-sine" data-aos-duration="800"></i>
                            by
                            <a href="{{ route('home') }}" class="hover:underline" target="_blank">
                                WeInvite
                            </a>
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
            <div class="relative bg-white">
                <button type="button"
                    class="absolute top-2 right-2 text-white !bg-[#879374] !important text-sm w-7 h-7 inline-flex justify-center items-center"
                    onclick="closeModal()">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4">
                    <img id="modal-image" class="w-auto h-full mx-auto object-contain border-2 border-[#879374]"
                        src="" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Musik -->
    <button id="music-control"
        class="fixed top-4 right-4 z-30 text-[#879374] bg-white py-3 px-4 rounded-full shadow-lg">
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

        // Flash Message
        document.addEventListener("DOMContentLoaded", function() {
            const flashMessage = document.getElementById("flash-message");
            if (flashMessage) {
                flashMessage.style.visibility = "visible";

                gsap.fromTo(
                    flashMessage, {
                        opacity: 0,
                        y: -20,
                    }, {
                        opacity: 1,
                        y: 0,
                        duration: 0.5,
                        ease: "power1.out",
                    }
                );

                setTimeout(function() {
                    gsap.to(flashMessage, {
                        opacity: 0,
                        y: 20,
                        duration: 0.5,
                        ease: "power1.in",
                        onComplete: function() {
                            flashMessage.style.visibility = "hidden";
                        }
                    });
                }, 5000);
            }
        });

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
                    "<h2 style='color:#e02424; font-family: Montserrat, sans-serif;'>Anda belum mengisi data acara</h2>";
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
    </script>

</body>

</html>
