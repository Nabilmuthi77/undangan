<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Premium-1</title>

    <!-- Resources -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:wght@400;600&display=swap" rel="stylesheet">

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

        .px-4::-webkit-scrollbar {
            width: 5px;
        }

        .px-4::-webkit-scrollbar-track {
            background: #ffffff;
            border-radius: 10px;
        }

        .px-4::-webkit-scrollbar-thumb {
            background-color: #6b7280;
            border-radius: 10px;
        }

        .px-4::-webkit-scrollbar-thumb:hover {
            background-color: #6b7280;
        }
    </style>
</head>

<body class="antialiased" style="background-color: #1d1a1a; overflow: hidden;">

    <!-- Sampul -->
    <section>
        <div id="cover-page"
            class="relative flex flex-col justify-between items-center min-h-screen mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/foto/cover.jpg') }}'); background-position: center; background-size: cover;">
            <!-- Filter -->
            <div class="absolute inset-0 bg-black/50"></div>
            <!-- Judul -->
            <div class="text-center mt-16 z-10 text-white text-3xl" data-aos="fade-right" data-aos-easing="ease-in-sine"
                data-aos-duration="800" data-aos-delay="500">
                <div class="font-pinyon">
                    The Wedding of
                </div>
                <div class="mt-1 font-cormorant font-semibold uppercase">
                    Rizky & Ana
                </div>
            </div>
            <!-- Nama Tamu -->
            <div class="text-center mb-16 z-10">
                <div class="text-white font-poppins">
                    <div class="text-sm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800"
                        data-aos-delay="500">
                        Kepada Yth :
                    </div>
                    <div class="text-sm mt-1" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="800" data-aos-delay="500">
                        Bapak/Ibu/Saudara/i
                    </div>
                    <div class="rounded text-lg font-croissant mt-5 mb-1" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="800" data-aos-delay="500">
                        Ikhsan
                    </div>
                    <hr class="border-white" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800"
                        data-aos-delay="500">
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800"
                        data-aos-delay="1000">
                        <button type="button" onclick="openInvitation()"
                            class="text-white border py-2 px-6 mt-5 font-cormorant text-lg focus:outline-none focus:ring-2 focus:ring-[#000000] focus:ring-offset-1 transition duration-150"
                            style="background-color: #000000;">
                            <i class="fa-solid fa-envelope mr-1"></i>
                            Buka Undangan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pembuka -->
    <section id="main-invitation">
        <div class="bg-black flex justify-center items-center min-h-screen max-w-[500px] mx-auto">
            <div class="text-white p-8 flex flex-col">
                <div class="grid md:grid-cols-[1fr_auto] gap-6 px-10 py-3 md:py-0 relative">
                    <!-- Foto -->
                    <div class="relative mx-auto my-5 md:my-10 max-w-[17rem] md:max-w-md lg:max-w-lg xl:max-w-xl">
                        <img src="{{ asset('tema/foto/pembuka.jpg') }}" alt="Foto Pembuka"
                            class="w-full h-auto object-cover shadow-lg"
                            style="box-shadow: -20px -20px 0px -1px rgba(255,255,255,1);" data-aos="fade-right"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <!-- Teks -->
                        <div class="absolute bottom-1 bg-black/75 p-3 text-white" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <div class="text-xl md:text-2xl font-pinyon leading-none">
                                The Wedding of
                            </div>
                            <div class="text-2xl md:text-3xl font-cormorant font-semibold uppercase mt-2 leading-none">
                                Rizky & Ana
                            </div>
                        </div>
                    </div>
                    <!-- Tanggal Acara -->
                    <div class="flex flex-col md:flex-col-reverse items-center justify-center text-center gap-2 md:gap-0"
                        data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="hidden md:block w-[3px] h-[7rem] bg-white"></div>
                        <div class="flex items-center gap-4 md:flex-col md:gap-0">
                            <div class="block md:hidden h-[3px] w-screen bg-white"></div>
                            <div class="text-3xl md:text-5xl font-croissant leading-none">
                                30
                            </div>
                            <div class="text-2xl md:text-xl font-cormorant font-semibold leading-none">
                                Desember
                            </div>
                            <div class="text-3xl md:text-lg font-croissant md:font-montserrat leading-none">
                                2024
                            </div>
                            <div class="block md:hidden h-[3px] w-screen bg-white"></div>
                        </div>
                        <div class="hidden md:block w-[3px] h-[7rem] bg-white"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mempelai -->
    <section>
        <div
            class="bg-white relative flex flex-col justify-center items-start min-h-screen w-full mx-auto max-w-[500px]">
            <!-- Teks Pembuka -->
            <div class="text-black pt-8 px-8">
                <div class="text-3xl" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="font-pinyon">
                        We Are Getting
                    </div>
                    <div class="mt-1 font-cormorant font-semibold uppercase">
                        Married!
                    </div>
                </div>
                <div class="text-sm mt-7" data-aos="fade-left" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <div class="font-croissant">
                        Assalamu’alaikum Wr. Wb.
                    </div>
                    <div class="font-poppins mt-2">
                        Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, Insya Allah kami akan
                        menyelenggarakan
                        acara pernikahan :
                    </div>
                </div>
            </div>
            <!-- Mempelai Pria -->
            <div class="mt-8 mb-10 relative" data-aos="fade-right" data-aos-easing="ease-in-sine"
                data-aos-duration="800">
                <div class="relative z-10">
                    <img src="{{ asset('tema/foto/mempelai-pria.jpg') }}" alt=""
                        class="w-64 h-64 object-cover" style="box-shadow: 20px 20px 0px -1px rgba(0,0,0,1);">
                </div>
                <div class="bg-gray-100 pt-5 pb-10 pl-5 mt-[-50px] w-[21rem] border-t border-b border-r border-black">
                    <h2 class="text-xl font-croissant font-semibold mt-20">
                        Rizky Syaputra
                    </h2>
                    <p class="text-sm font-poppins mt-3">
                        Putra ke-3
                    </p>
                    <p class="text-sm font-poppins">
                        Bapak Syahrial
                    </p>
                    <p class="text-sm font-poppins">
                        &
                    </p>
                    <p class="text-sm font-poppins mb-3">
                        Ibu Yuyun Rusmiati
                    </p>
                    <a href="https://www.instagram.com" target="_blank"
                        class="flex items-center justify-center gap-2 mt-5 py-[0.35rem] px-6 bg-black text-white font-cormorant focus:ring-2 focus:ring-black focus:ring-offset-1 transition ease-in-out duration-150 w-fit">
                        <i class="fab fa-instagram"></i>
                        Instagram
                    </a>
                </div>
            </div>
            <!-- Divider -->
            <div class="flex items-center justify-center text-center gap-4 w-full" data-aos="zoom-in"
                data-aos-easing="ease-in-sine" data-aos-duration="800">
                <div class="h-[1px] bg-black flex-1"></div>
                <div class="text-5xl font-cormorant font-semibold text-black mx-4">
                    &
                </div>
                <div class="h-[1px] bg-black flex-1"></div>
            </div>
            <!-- Mempelai Wanita -->
            <div class="mt-8 mb-10 flex justify-end ml-auto" data-aos="fade-left" data-aos-easing="ease-in-sine"
                data-aos-duration="800">
                <div class="flex flex-col items-end">
                    <div class="relative z-10">
                        <img src="{{ asset('tema/foto/mempelai-wanita.jpg') }}" alt=""
                            class="w-64 h-64 object-cover" style="box-shadow: -21px 20px 0px -1px rgba(0,0,0,1);">
                    </div>
                    <div
                        class="bg-gray-100 pt-5 pb-10 pr-5 mt-[-50px] w-[21rem] border-t border-b border-l border-black">
                        <h2 class="text-xl font-croissant font-semibold mt-20 flex justify-end">
                            Ana Lutfiani
                        </h2>
                        <p class="text-sm font-poppins mt-3 flex justify-end">
                            Putri ke-3
                        </p>
                        <p class="text-sm font-poppins flex justify-end">
                            Bapak Agus Sutrisno
                        </p>
                        <p class="text-sm font-poppins flex justify-end">
                            &
                        </p>
                        <p class="text-sm font-poppins mb-3 flex justify-end">
                            Ibu Rosy Meri
                        </p>
                        <div class="flex justify-end mt-5">
                            <a href="https://www.instagram.com" target="_blank"
                                class="flex items-center gap-2 py-[0.35rem] px-6 bg-black text-white font-cormorant focus:ring-2 focus:ring-black focus:ring-offset-1 transition ease-in-out duration-150">
                                <i class="fab fa-instagram"></i>
                                Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Acara -->
    <section>
        <div class="relative flex flex-col justify-center items-center min-h-screen max-w-[500px] mx-auto"
            style="background-image: url('{{ asset('tema/foto/cover.jpg') }}'); 
            background-position: center; 
            background-attachment: fixed;">
            <!-- Filter -->
            <div class="absolute inset-0 bg-black/50 z-0"></div>
            <!-- Foto -->
            <div class="relative mx-auto my-10 z-10" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                data-aos-duration="800">
                <img src="{{ asset('tema/foto/acara.jpg') }}" alt="Foto Acara"
                    class="max-w-xs md:max-w-sm lg:max-w-md xl:max-w-lg h-auto object-cover"
                    style="box-shadow: 0px 25px 0px -12.5px rgb(255, 255, 255);">
            </div>
            <!-- Countdown -->
            <div class="relative bg-black z-5 w-full px-10 pb-10 pt-40 mt-[-150px] font-cormorant" data-aos="fade-up"
                data-aos-easing="ease-in-sine" data-aos-duration="800">
                <div class="text-white text-3xl text-center mb-5 flex justify-center space-x-3">
                    <span>Save</span>
                    <span>The</span>
                    <span>Date</span>
                </div>
                <div id="countdown" class="text-center text-white flex justify-center space-x-10">
                    <div class="text-center">
                        <span class="text-xl p-3 w-12 h-12 flex items-center justify-center days">
                            00
                        </span>
                        <span>
                            Hari
                        </span>
                    </div>
                    <div class="text-center">
                        <span class="text-xl p-3 w-12 h-12 flex items-center justify-center hours">
                            00
                        </span>
                        <span>
                            Jam
                        </span>
                    </div>
                    <div class="text-center">
                        <span class="text-xl p-3 w-12 h-12 flex items-center justify-center minutes">
                            00
                        </span>
                        <span>
                            Menit
                        </span>
                    </div>
                    <div class="text-center">
                        <span class="text-xl p-3 w-12 h-12 flex items-center justify-center seconds">
                            00
                        </span>
                        <span>
                            Detik
                        </span>
                    </div>
                </div>
            </div>
            <!-- Daftar Acara -->
            <div class="relative w-full text-white flex">
                <div class="absolute inset-0 bg-black/50 z-0"></div>
                <div class="bg-black w-28 h-auto z-10" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="800"></div>
                <div class="mx-7 w-full z-10">
                    <div class="my-10" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <h3 class="text-5xl font-pinyon">Akad</h3>
                        <div class="mt-2 font-cormorant">
                            <p class="text-lg">Hari/Tanggal :</p>
                            <p class="font-poppins text-sm mt-1">Minggu, 31 Desember 2024</p>
                            <p class="text-lg mt-3">Waktu :</p>
                            <p class="font-poppins text-sm mt-1">08:00 WIB - 09:00 WIB</p>
                            <p class="text-lg mt-3">Tempat : Kediaman Mempelai Wanita</p>
                            <p class="font-poppins text-sm mt-1">Perum Regency, Jl. Harmoni Raya No. 123</p>
                            <div class="mt-5 w-44">
                                <a href="https://www.google.com/maps" target="_blank"
                                    class="bg-black border text-white mr-1 py-2 px-6 flex items-center justify-center space-x-2 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 transition ease-in-out duration-150">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Google Maps</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="my-10" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <h3 class="text-5xl font-pinyon">Resepsi</h3>
                        <div class="mt-2 font-cormorant">
                            <p class="text-lg">Hari/Tanggal :</p>
                            <p class="font-poppins text-sm mt-1">Minggu, 31 Desember 2024</p>
                            <p class="text-lg mt-3">Waktu :</p>
                            <p class="font-poppins text-sm mt-1">09:00 WIB - 10:00 WIB</p>
                            <p class="text-lg mt-3">Tempat : Kediaman Mempelai Wanita</p>
                            <p class="font-poppins text-sm mt-1">Perum Regency, Jl. Harmoni Raya No. 123</p>
                            <div class="mt-5 w-44">
                                <a href="https://www.google.com/maps" target="_blank"
                                    class="bg-black border text-white mr-1 py-2 px-6 flex items-center justify-center space-x-2 focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 transition ease-in-out duration-150">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Google Maps</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Streaming -->
            <div class="relative z-10 w-full p-10 text-white">
                <div class="bg-black/50 p-10 mx-auto flex flex-col justify-center items-center relative w-full h-auto max-w-[370px]"
                    data-aos="zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="mx-auto my-5">
                        <div class="grid grid-cols-1 gap-5 text-center items-center mx-auto max-w-lg lg:max-w-4xl">
                            <div class="text-2xl font-cormorant uppercase text-nowrap">
                                Live Streaming
                            </div>
                            <div class="text-sm font-poppins font-light mt-2">
                                Temui kami secara virtual untuk menyaksikan acara pernikahan kami melalui siaran
                                langsung
                            </div>
                            <div class="mt-5">
                                <a href="https://youtube.com" target="__blank"
                                    class="border py-2 px-6 bg-black focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 transition ease-in-out duration-150">
                                    Tonton Streaming
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section>
        <div
            class="bg-white text-black relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
            <div class="flex flex-col py-10">
                <!-- Judul -->
                <div class="pb-10 px-5">
                    <div class="text-3xl uppercase font-cormorant" data-aos="fade-down"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Our Gallery
                    </div>
                    <div class="text-3xl font-pinyon mt-2" data-aos="fade-up" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        Andi & Anggi
                    </div>
                </div>
                <!-- Foto & Video -->
                <div class="mx-5 bg-black" data-aos="zoom-in" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <!-- Video -->
                    <div class="w-full px-5 pt-5">
                        <iframe class="w-full h-56"
                            src="https://www.youtube.com/embed/imGaOIm5HOk?si=ljyrmX6DD6dG1YUF" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <!-- Foto Galeri -->
                    <div class="px-5">
                        <div class="grid grid-cols-2 gap-4 py-5">
                            <img src="{{ asset('tema/foto/foto-gallery-1.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-1.jpg') }}')">
                            <img src="{{ asset('tema/foto/foto-gallery-2.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-2.jpg') }}')">
                            <img src="{{ asset('tema/foto/foto-gallery-3.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-3.jpg') }}')">
                            <img src="{{ asset('tema/foto/foto-gallery-4.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-4.jpg') }}')">
                            <img src="{{ asset('tema/foto/foto-gallery-5.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-5.jpg') }}')">
                            <img src="{{ asset('tema/foto/foto-gallery-6.jpg') }}" alt=""
                                class="w-full aspect-square object-cover cursor-pointer"
                                onclick="openModal('{{ asset('tema/foto/foto-gallery-6.jpg') }}')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cerita & Quote -->
    <section>
        <div class="text-black relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
            style="background-image: url('{{ asset('tema/foto/cover.jpg') }}'); 
            background-position: center; 
            background-attachment: fixed;">
            <!-- Filter -->
            <div class="absolute inset-0 bg-black/50"></div>
            <!-- Konten -->
            <div class="flex flex-col">
                <div class="mx-5 my-10 bg-white border border-black z-10">
                    <!-- Judul -->
                    <div class="text-3xl uppercase font-cormorant text-center pt-10" data-aos="fade-down"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Love Story
                    </div>
                    <!-- Foto -->
                    <div class="flex justify-center my-10 mx-5" data-aos="fade-up" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        <img src="{{ asset('tema/foto/cerita.jpg') }}" alt=""
                            class="max-w-full h-auto  object-cover border border-black">
                    </div>
                    <!-- Quote -->
                    <div class="text-center">
                        <div class="text-sm px-5 font-poppins" data-aos="fade-right" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                            "Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari
                            jenismu sendiri, supaya kamu merasa tenang dan tentram kepadanya, dan dijadikan-Nya
                            diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar
                            terdapat
                            tanda-tanda bagi kaum yang berfikir."
                        </div>
                        <div class="pt-5 pb-10 font-semibold font-croissant text-[#000000]" data-aos="fade-left"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Ar Rum: 21
                        </div>
                    </div>
                    <!-- Divider -->
                    <div class="flex items-center justify-center text-center gap-4 mx-5" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="h-[1px] bg-black flex-1"></div>
                        <div class="text-3xl text-black mx-4">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="h-[1px] bg-black flex-1"></div>
                    </div>
                    <!-- Cerita -->
                    <div class="m-5">
                        <div class="bg-white border border-black" data-aos="fade-up" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                            <div class="text-xl font-cormorant p-4">
                                Pertemuan Pertama
                            </div>
                            <div class="pb-4 px-4 text-sm font-poppins">
                                Kami bertemu di sebuah kafe kecil.
                                Senyum pertama yang kami bagi membuat hati kami saling terhubung.
                                Percakapan ringan mengarah pada janji untuk bertemu lagi.
                                Itu adalah awal dari sebuah kisah cinta yang tak terduga.
                            </div>
                        </div>
                        <div class="bg-white border border-black mt-5 mb-10" data-aos="fade-up"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            <div class="text-xl font-cormorant p-4">
                                Lamaran
                            </div>
                            <div class="pb-4 px-4 text-sm font-poppins">
                                Setelah beberapa waktu bersama, aku melamar untuk membangun masa depan bersama.
                                Dengan restu orangtuanya, aku tahu ini adalah langkah yang tepat.
                                Kami siap memulai lembaran baru dalam hidup kami.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wish & RSVP -->
    <section>
        <div
            class="bg-black text-white relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
            <div class="flex flex-col my-24">
                <!-- Judul Wish -->
                <div class="text-center">
                    <h2 class="text-3xl uppercase font-cormorant mb-5 mx-8" data-aos="fade-down"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Wedding Wish
                    </h2>
                    <p class="mb-10 mx-8 font-cormorant text-xl md:text-lg" data-aos="fade-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Berikan ucapan, harapan dan do'a kepada kedua mempelai
                    </p>
                </div>
                <!-- Form Wish -->
                <form action="#" method="POST" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="800" class="mx-8 mb-5">
                    <div class="mb-4 w-full">
                        <label for="name" class="block text-sm font-medium text-white font-croissant">
                            Nama:
                        </label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full border border-gray-300 py-2 px-3 text-sm font-poppins text-black"
                            placeholder="Nama Anda" required
                            onfocus="this.style.borderColor='#6b7280'; this.style.boxShadow='0 0 0 1px #ffffff';"
                            onblur="this.style.borderColor='#6b7280'; this.style.boxShadow='none';"
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <div class="mb-4 w-full">
                        <label for="message" class="block text-sm font-medium text-white font-croissant">
                            Ucapan atau Doa:
                        </label>
                        <textarea id="message" name="message" rows="4"
                            class="mt-1 block w-full border border-gray-300 py-2 px-3 text-sm font-poppins text-black"
                            placeholder="Tulis ucapan atau doa Anda di sini..." required
                            onfocus="this.style.borderColor='#6b7280'; this.style.boxShadow='0 0 0 1px #ffffff';"
                            onblur="this.style.borderColor='#6b7280'; this.style.boxShadow='none';"
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                    </div>
                    <div class="text-center text-sm">
                        <button type="submit"
                            class="text-black bg-white py-2 px-6 border border-gray-500 focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-1 transition ease-in-out duration-150 font-montserrat">
                            <span>Kirim</span>
                            <i class="fas fa-paper-plane ml-1"></i>
                        </button>
                    </div>
                </form>
                <!-- Their Wish -->
                <div class="text-black px-4 mb-10 mt-5 mx-2" style="max-height: 500px; overflow-y: auto;"
                    data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="my-4 p-5 bg-white rounded-lg shadow-lg">
                        <h4 class="uppercase font-croissant">
                            Risa
                        </h4>
                        <p class="font-poppins text-sm pt-1">
                            Selamat ya, semoga dilancarkan sampai hari H. Amin.
                        </p>
                    </div>
                    <div class="mb-4 p-5 bg-white rounded-lg shadow-lg">
                        <h4 class="uppercase font-croissant">
                            Toni
                        </h4>
                        <p class="font-poppins text-sm pt-1">
                            Selamat, SaMaWa ya.
                        </p>
                    </div>
                    <div class="mb-4 p-5 bg-white rounded-lg shadow-lg">
                        <h4 class="uppercase font-croissant">
                            Lina
                        </h4>
                        <p class="font-poppins text-sm pt-1">
                            Semoga menjadi keluarga yang bahagia dan harmonis selamanya.
                        </p>
                    </div>
                    <div class="mb-4 p-5 bg-white rounded-lg shadow-lg">
                        <h4 class="uppercase font-croissant">
                            Dika
                        </h4>
                        <p class="font-poppins text-sm pt-1">
                            Selamat atas pernikahannya, semoga diberkahi dengan kebahagiaan dan cinta.
                        </p>
                    </div>
                    <div class="mb-4 p-5 bg-white rounded-lg shadow-lg">
                        <h4 class="uppercase font-croissant">
                            Siti
                        </h4>
                        <p class="font-poppins text-sm pt-1">
                            Barakallah! Semoga perjalanan hidup kalian selalu dilimpahi berkah.
                        </p>
                    </div>
                    <div class="mb-4 p-5 bg-white rounded-lg shadow-lg">
                        <h4 class="uppercase font-croissant">
                            Agus
                        </h4>
                        <p class="font-poppins text-sm pt-1">
                            Selamat! Semoga cinta dan kasih sayang selalu menyertai perjalanan hidup kalian.
                        </p>
                    </div>
                    <div class="mb-4 p-5 bg-white rounded-lg shadow-lg">
                        <h4 class="uppercase font-croissant">
                            Maya
                        </h4>
                        <p class="font-poppins text-sm pt-1">
                            Selamat menikah! Semoga menjadi keluarga yang sakinah, mawaddah, dan rahmah.
                        </p>
                    </div>
                </div>
                <!-- Divider -->
                <div class="flex items-center justify-center text-center gap-4 mx-8" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="h-[1px] bg-white flex-1"></div>
                    <div class="text-2xl text-white mx-4">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="h-[1px] bg-white flex-1"></div>
                </div>
                <!-- RSVP -->
                <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <!-- Judul RSVP -->
                    <h2 class="text-center text-3xl uppercase font-cormorant mt-10 mb-5 mx-8">
                        RSVP
                    </h2>
                    <!-- Form -->
                    <form action="#" method="#" class="mx-8">
                        <div class="mb-4 w-full">
                            <label for="name" class="block text-sm font-medium text-white font-croissant">
                                Nama :
                            </label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full border py-2 px-3 text-sm font-poppins text-black"
                                placeholder="Nama Anda" required
                                onfocus="this.style.borderColor='#6b7280'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                onblur="this.style.borderColor='#6b7280'; this.style.boxShadow='none';"
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                oninput="this.setCustomValidity('')">

                        </div>
                        <div class="mb-4 w-full">
                            <label for="message" class="block text-sm font-medium text-white font-croissant">
                                Pesan :
                            </label>
                            <textarea id="message" name="message" rows="4"
                                class="mt-1 block w-full border py-2 px-3 text-sm font-poppins text-black"
                                placeholder="Tulis pesan Anda di sini..." required
                                onfocus="this.style.borderColor='#6b7280'; this.style.boxShadow='0 0 0 1px #ffffff';"
                                onblur="this.style.borderColor='#6b7280'; this.style.boxShadow='none';"
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <div class="mb-4">
                            <div class="relative inline-block w-full">
                                <label for="message" class="block text-sm font-medium text-white font-croissant">
                                    Konfirmasi Kehadiran
                                </label>
                                <button id="dropdownButton"
                                    class="mt-1 block text-left bg-white text-black w-full border border-gray-500 shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                                    style="transition: 0.5s ease; outline: none;" onclick="toggleDropdown(event)">
                                    <span class="text-gray-500">. . .</span>
                                </button>
                                <ul id="dropdownMenu"
                                    class="hidden absolute z-10 w-full mt-[0.10rem] bg-white text-black border border-gray-500 shadow-lg font-montserrat">
                                    <li class="py-2 px-3 cursor-pointer hover:bg-black hover:text-white"
                                        onclick="selectOption('Ya, Saya akan datang')">
                                        Ya, Saya akan datang
                                    </li>
                                    <li class="py-2 px-3 cursor-pointer hover:bg-black hover:text-white"
                                        onclick="selectOption('Maaf, Saya tidak bisa datang')">
                                        Maaf, Saya tidak bisa datang
                                    </li>
                                    <li class="py-2 px-3 cursor-pointer hover:bg-black hover:text-white"
                                        onclick="selectOption('Saya belum tahu bisa datang atau tidak')">
                                        Saya belum tahu bisa datang atau tidak
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center text-sm">
                            <button type="submit"
                                class="text-black bg-white py-2 px-6 border border-gray-500 focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-1 transition ease-in-out duration-150 font-montserrat">
                                <span>Kirim</span>
                                <i class="fas fa-paper-plane ml-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Kado Digital -->
    <section>
        <div class="bg-white relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]">
            <div class="flex flex-col">
                <div class="my-20">
                    <!-- Judul -->
                    <div class="text-center mb-9">
                        <div class="text-3xl uppercase font-cormorant mb-5 mx-8" data-aos="fade-down"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Kado Digital
                        </div>
                        <div class="font-cormorant text-xl md:text-lg my-5 mx-8" data-aos="fade-up"
                            data-aos-easing="ease-in-sine" data-aos-duration="800">
                            Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah
                            ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.
                        </div>
                    </div>
                    <!-- Divider -->
                    <div class="flex items-center justify-center text-center gap-4" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="h-[1px] bg-black flex-1"></div>
                        <div class="text-2xl text-black mx-4">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div class="h-[1px] bg-black flex-1"></div>
                    </div>
                    <!-- Rekening -->
                    <div>
                        <div class="w-full text-center mt-10" data-aos="fade-up" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                            <p class="text-gray-1000 font-montserrat mt-4">Bank :</p>
                            <p class="text-[#000000] font-montserrat">BCA</p>
                            <p class="mt-4 text-gray-1000 font-montserrat">Atas Nama :</p>
                            <p class="text-[#000000] font-montserrat">Rizky Syaputra</p>
                            <p class="mt-4 text-gray-1000 font-montserrat">Nomor Rekening :</p>
                            <p id="nomor_rekening_1" class="text-[#000000] font-montserrat mb-4">
                                12345678910
                            </p>
                            <div class="mb-4 text-center">
                                <button id="copyButton_1" type="button" onclick="copyToClipboard(1)"
                                    class="text-sm text-nowrap text-white py-2 px-6 focus:outline-none focus:ring-2 focus:ring-[#000000] focus:ring-offset-2 transition ease-in-out duration-150 font-montserrat"
                                    style="background-color: #000000;">
                                    <span>Salin Nomor Rekening</span>
                                    <i class="fas fa-copy text-lg ml-1"></i>
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="w-full text-center" data-aos="fade-up" data-aos-easing="ease-in-sine"
                            data-aos-duration="800">
                            <p class="text-gray-1000 font-montserrat mt-4">Bank :</p>
                            <p class="text-[#000000] font-montserrat">BCA</p>
                            <p class="mt-4 text-gray-1000 font-montserrat">Atas Nama :</p>
                            <p class="text-[#000000] font-montserrat">Ana Lutfiani</p>
                            <p class="mt-4 text-gray-1000 font-montserrat">Nomor Rekening :</p>
                            <p id="nomor_rekening_2" class="text-[#000000] font-montserrat mb-4">
                                10987654321
                            </p>
                            <div class="mb-4 text-center">
                                <button id="copyButton_2" type="button" onclick="copyToClipboard(2)"
                                    class="text-sm text-nowrap text-white py-2 px-6 focus:outline-none focus:ring-2 focus:ring-[#000000] focus:ring-offset-2 transition ease-in-out duration-150 font-montserrat"
                                    style="background-color: #000000;">
                                    <span>Salin Nomor Rekening</span>
                                    <i class="fas fa-copy text-lg ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Penutup -->
    <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
        style="background-image: url('{{ asset('tema/foto/cover.jpg') }}'); 
            background-position: center; 
            background-attachment: fixed;">
        <!-- Filter -->
        <div class="absolute inset-0 bg-black/50 z-0"></div>
        <!-- Konten -->
        <div class="flex flex-col text-center text-white m-10">
            <div class="my-5">
                <!-- Teks Penutup -->
                <div>
                    <div class="font-cormorant text-xl md:text-lg" data-aos="fade-right"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Suatu kebahagiaan & kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan
                        memberikan do’a restu kepada kami
                    </div>
                    <div class="tet-sm font-croissant mt-5" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        Wassalamu’alaikum Wr. Wb.
                    </div>
                </div>
                <br><br>
                <!-- Teks -->
                <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="font-cormorant text-xl md:text-lg">
                        Kami yang berbahagia
                    </div>
                    <div class="text-2xl font-bold mt-3 font-croissant">
                        Rizky & Ana
                    </div>
                    <div class="mt-10 font-cormorant text-xl md:text-lg">
                        <div class="mt-5">
                            Created with
                            <i class="fa-solid fa-heart"></i>
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
                    class="absolute top-2 right-2 text-white !bg-[#000000] !important text-sm w-7 h-7 inline-flex justify-center items-center"
                    onclick="closeModal()">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4">
                    <img id="modal-image" class="w-auto h-full mx-auto object-contain border-2 border-black"
                        src="" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Musik -->
    <button id="music-control"
        class="fixed top-4 right-4 z-30 text-[#000000] bg-white py-3 px-4 rounded-full shadow-lg">
        <i id="music-icon" class="fas fa-music pr-[1px]"></i>
        <audio id="background-music" loop autoplay>
            <source src="{{ asset('tema/music/Yiruma, (이루마) - Kiss the Rain.mp3') }}" type="audio/mpeg">
        </audio>
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
        const targetDate = new Date("2025-12-31T08:00:00+01:00").getTime();

        const countdownInterval = setInterval(function() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                clearInterval(countdownInterval);
                document.getElementById("countdown").innerHTML = "Acara Telah Dimulai!";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.querySelector('.days').innerText = days < 10 ? '0' + days : days;
            document.querySelector('.hours').innerText = hours < 10 ? '0' + hours : hours;
            document.querySelector('.minutes').innerText = minutes < 10 ? '0' + minutes : minutes;
            document.querySelector('.seconds').innerText = seconds < 10 ? '0' + seconds : seconds;
        }, 1000);

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
        const backgroundMusic = document.getElementById('background-music');
        const musicIcon = document.getElementById('music-icon');
        let isPlaying = true;

        function toggleMusic() {
            if (isPlaying) {
                backgroundMusic.pause();
                musicIcon.classList.remove('fa-music');
                musicIcon.classList.add('fa-pause');
            } else {
                backgroundMusic.play();
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
