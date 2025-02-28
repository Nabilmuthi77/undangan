<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Basic-2</title>

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

<body class="antialiased" style="background-color: #75dac9; overflow: hidden;">

    <!-- Sampul -->
    <div id="cover-page" class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px]"
        style="background-image: url('{{ asset('tema/basic-2/images/bg.jpg') }}'); background-position: center; background-size: cover;">
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center text-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto my-5">
                <img src="
                {{ asset('tema/foto/cover.jpg') }}" alt=""
                    class="rounded-full w-48 h-48 mx-auto object-cover mb-5" data-aos="fade-up"
                    data-aos-easing="ease-in-sine" data-aos-duration="800" />
                <div class="text-2xl font-bold mt-3 font-croissant text-[#359484]" data-aos="fade-right"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    Rizky & Ana
                </div>
                <div class="mt-10 font-montserrat text-gray-700">
                    <div class="text-sm" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Kepada Yth :
                    </div>
                    <div class="text-sm mt-1" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                        Bapak/Ibu/Saudara/i
                    </div>
                    <div class="rounded text-lg font-croissant mt-5 mb-1 text-[#359484]" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Ikhsan
                    </div>
                    <hr style="border-color: #359484;" data-aos="fade-left" data-aos-easing="ease-in-sine"
                        data-aos-duration="800">
                    <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <button type="button" onclick="openInvitation()"
                            class="text-white py-2 px-6 rounded mt-5 font-croissant focus:outline-none focus:ring-2 focus:ring-[#359484] focus:ring-offset-2 transition ease-in-out duration-150"
                            style="background-color: #359484;">
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
        style="background-image: url('{{ asset('tema/basic-2/images/bg.jpg') }}'); background-position: center; background-size: cover;">
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto my-5">
                <div class="text-center" data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="text-[#359484] font-croissant">
                        Assalamu’alaikum Wr. Wb.
                    </div>
                    <div class="font-montserrat text-sm mt-2 px-2 text-gray-700">
                        Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala,
                        Insya Allah kami akan menyelenggarakan acara pernikahan :
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-4 mb-5 mt-10">
                    <!-- Mempelai Pria -->
                    <div class="flex flex-col items-center justify-center text-center" data-aos="fade-right"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="w-40 h-40">
                            <img src="{{ asset('tema/foto/mempelai-pria.jpg') }}" alt="Foto Mempelai Pria"
                                class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="mt-5">
                            <div class="font-bold font-croissant text-[#359484] text-lg pb-3">
                                Rizky Syaputra
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                Putra ke-3
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                Bapak Syahrial
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                &amp;
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1 pb-3">
                                Ibu Yuyun Rusmiati
                            </div>
                            <a href="https://instagram.com/teddy_profile" target="_blank" class="text-[#359484]">
                                <i class="fab fa-instagram text-3xl"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Divider -->
                    <div class="flex items-center justify-center text-center gap-4 w-full" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="h-[1px] bg-[#359484] flex-1"></div>
                        <i class="fa-solid fa-heart text-3xl text-[#359484] py-5" data-aos="zoom-in"
                            data-aos-easing="ease-in-sine" data-aos-duration="800"></i>
                        <div class="h-[1px] bg-[#359484] flex-1"></div>
                    </div>
                    <!-- Mempelai Wanita -->
                    <div class="flex flex-col items-center justify-center text-center" data-aos="fade-left"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="w-40 h-40">
                            <img src="{{ asset('tema/foto/mempelai-wanita.jpg') }}" alt="Foto Mempelai Pria"
                                class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="mt-5">
                            <div class="font-bold font-croissant text-[#359484] text-lg">
                                Ana Lutfiani
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                Putri ke-3
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                Bapak Agus Sutrisno
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1">
                                &amp;
                            </div>
                            <div class="font-montserrat text-sm text-gray-700 my-1 pb-3">
                                Ibu Rosy Meri
                            </div>
                            <a href="https://instagram.com/teddy_profile" target="_blank" class="text-[#359484]">
                                <i class="fab fa-instagram text-3xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center mt-10 font-montserrat text-[#359484]" data-aos="fade-up"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div id="formattedDate" class="text-lg font-semibold">
                        Waktu Menuju Acara
                    </div>
                    <div id="countdown" class="text-center mt-5 flex justify-center space-x-5">
                        <div class="text-center">
                            <span style="background-color: #359484;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center days">00</span>
                            <br>
                            <small>
                                Hari
                            </small>
                        </div>
                        <div class="text-center">
                            <span style="background-color: #359484;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center hours">00</span>
                            <br>
                            <small>
                                Jam
                            </small>
                        </div>
                        <div class="text-center">
                            <span style="background-color: #359484;"
                                class="text-white rounded-full p-3 w-12 h-12 flex items-center justify-center minutes">00</span>
                            <br>
                            <small>
                                Menit
                            </small>
                        </div>
                        <div class="text-center">
                            <span style="background-color: #359484;"
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
    <div class="relative flex flex-col justify-center items-center min-h-screen w-full mx-auto max-w-[500px] py-10"
        style="background-image: url('{{ asset('tema/basic-2/images/bg.jpg') }}'); background-position: center; background-size: cover;">
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-full shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto my-28">
                <div
                    class="grid grid-cols-1 gap-6 text-center items-center mx-auto max-w-lg lg:max-w-4xl font-montserrat">
                    <div class="text-[#359484] text-2xl font-bold mb-5 font-croissant" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Akad
                    </div>
                    <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="text-lg font-medium">
                            <div class="bg-[#359484] text-white py-2 px-4 rounded-lg">
                                Selasa
                            </div>
                        </div>
                        <div class="text-gray-700 my-5">
                            <div class="text-5xl font-extrabold">
                                31
                            </div>
                            <div class="text-sm font-light mt-5">
                                Desember
                            </div>
                        </div>
                        <div class="text-lg font-medium">
                            <div class="bg-[#359484] text-white py-2 px-4 rounded-lg">
                                2024
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="text-sm mt-5">
                            <div class="text-gray-700">
                                Pukul
                            </div>
                            <div class="text-gray-700">
                                8:00 AM - 10:00 PM WIB
                            </div>
                            <br>
                            <div class="text-gray-700 pb-1 font-bold">
                                Nama Tempat
                            </div>
                            <div class="text-gray-700">
                                Alamat Akad
                            </div>
                        </div>
                        <br>
                        <div class="flex justify-center text-center items-center text-sm ">
                            <a class="bg-[#359484] text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#359484] focus:ring-offset-2 transition ease-in-out duration-150"
                                href="https://maps.app.goo.gl/Dhym5MrmAGv1h7Ms5" target="_blank">
                                <i class="fas fa-map-marker-alt mb-2"></i>
                                <br>
                                Google Map
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 gap-6 text-center items-center mt-10 mx-auto max-w-lg lg:max-w-4xl font-montserrat">
                    <div class="text-[#359484] text-2xl font-bold mt-10 mb-5 font-croissant" data-aos="zoom-in"
                        data-aos-easing="ease-in-sine" data-aos-duration="800">
                        Resepsi
                    </div>
                    <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="text-lg font-medium">
                            <div class="bg-[#359484] text-white py-2 px-4 rounded-lg">
                                Selasa
                            </div>
                        </div>
                        <div class="text-gray-700 my-5">
                            <div class="text-5xl font-extrabold">
                                31
                            </div>
                            <div class="text-sm font-light mt-5">
                                Desember
                            </div>
                        </div>
                        <div class="text-lg font-medium">
                            <div class="bg-[#359484] text-white py-2 px-4 rounded-lg">
                                2024
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                        <div class="text-sm mt-5">
                            <div class="text-gray-700">
                                Pukul
                            </div>
                            <div class="text-gray-700">
                                8:00 AM - 10:00 PM WIB
                            </div>
                            <br>
                            <div class="text-gray-700 pb-1 font-bold">
                                Alamat
                            </div>
                            <div class="text-gray-700">
                                Alamat Resepsi
                            </div>
                        </div>
                        <br>
                        <div class="flex justify-center text-center items-center text-sm">
                            <a class="bg-[#359484] text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#359484] focus:ring-offset-2 transition ease-in-out duration-150"
                                href="https://maps.app.goo.gl/Dhym5MrmAGv1h7Ms5" target="_blank">
                                <i class="fas fa-map-marker-alt mb-2"></i>
                                <br>
                                Google Map
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Galeri -->
    <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px] py-10"
        style="background-image: url('{{ asset('tema/basic-2/images/bg.jpg') }}'); background-position: center; background-size: cover;">
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-full shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto my-28">
                <div class="text-[#359484] text-2xl font-bold mb-10 font-croissant text-center" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    Galeri
                </div>
                <div class="w-full rounded" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <iframe class="w-full h-56 rounded"
                        src="https://www.youtube.com/embed/imGaOIm5HOk?si=ljyrmX6DD6dG1YUF" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="grid grid-cols-2 gap-4 pt-5" data-aos="fade-left" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <img src="{{ asset('tema/foto/foto-gallery-1.jpg') }}" alt=""
                        class="w-full aspect-square object-cover rounded cursor-pointer"
                        onclick="openModal('{{ asset('tema/foto/foto-gallery-1.jpg') }}')">
                    <img src="{{ asset('tema/foto/foto-gallery-2.jpg') }}" alt=""
                        class="w-full aspect-square object-cover rounded cursor-pointer"
                        onclick="openModal('{{ asset('tema/foto/foto-gallery-2.jpg') }}')">
                    <img src="{{ asset('tema/foto/foto-gallery-3.jpg') }}" alt=""
                        class="w-full aspect-square object-cover rounded cursor-pointer"
                        onclick="openModal('{{ asset('tema/foto/foto-gallery-3.jpg') }}')">
                    <img src="{{ asset('tema/foto/foto-gallery-4.jpg') }}" alt=""
                        class="w-full aspect-square object-cover rounded cursor-pointer"
                        onclick="openModal('{{ asset('tema/foto/foto-gallery-4.jpg') }}')">
                    <img src="{{ asset('tema/foto/foto-gallery-5.jpg') }}" alt=""
                        class="w-full aspect-square object-cover rounded cursor-pointer"
                        onclick="openModal('{{ asset('tema/foto/foto-gallery-5.jpg') }}')">
                    <img src="{{ asset('tema/foto/foto-gallery-6.jpg') }}" alt=""
                        class="w-full aspect-square object-cover rounded cursor-pointer"
                        onclick="openModal('{{ asset('tema/foto/foto-gallery-6.jpg') }}')">
                </div>
            </div>
        </div>
    </div>

    <!-- Cerita -->
    <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px] py-10"
        style="background-image: url('{{ asset('tema/basic-2/images/bg.jpg') }}'); background-position: center; background-size: cover;">
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto my-5">
                <div class="text-[#359484] text-2xl font-bold font-croissant mb-10 text-center" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">Cerita</div>
                <div class="text-center text-sm pb-5 font-montserrat text-gray-700" data-aos="fade-right"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari
                    jenismu sendiri, supaya kamu merasa tenang dan tentram kepadanya, dan dijadikan-Nya
                    diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                    tanda-tanda bagi kaum yang berfikir.
                </div>
                <div class="text-center pb-5 text-lg font-semibold font-croissant text-[#359484]" data-aos="fade-left"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    Ar Rum: 21
                </div>
                <br>
                <div class="mt-5" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="bg-white rounded-lg shadow-md text-center border">
                        <div class="bg-[#359484] text-white font-bold font-montserrat p-4 rounded-t-lg">
                            Pertemuan Pertama
                        </div>
                        <div class="p-4 text-sm font-montserrat text-gray-700">
                            Kami bertemu di sebuah kafe kecil.
                            Senyum pertama yang kami bagi membuat hati kami saling terhubung.
                            Percakapan ringan mengarah pada janji untuk bertemu lagi.
                            Itu adalah awal dari sebuah kisah cinta yang tak terduga.
                        </div>
                    </div>
                </div>
                <div class="mt-5" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="bg-white rounded-lg shadow-md text-center border">
                        <div class="bg-[#359484] text-white font-bold font-montserrat p-4 rounded-t-lg">
                            Lamaran
                        </div>
                        <div class="p-4 text-sm font-montserrat text-gray-700">
                            Setelah beberapa waktu bersama, aku melamar untuk membangun masa depan bersama.
                            Dengan restu orangtuanya, aku tahu ini adalah langkah yang tepat.
                            Kami siap memulai lembaran baru dalam hidup kami.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RSVP -->
    <div class="relative flex justify-center items-center min-h-screen w-full mx-auto max-w-[500px] py-10"
        style="background-image: url('{{ asset('tema/basic-2/images/bg.jpg') }}'); background-position: center; background-size: cover;">
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-3xl shadow-lg p-8 m-5 flex flex-col justify-center items-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto my-5 w-full">
                <h2 class="text-center text-[#359484] text-2xl font-bold mb-10 font-croissant" data-aos="zoom-in"
                    data-aos-easing="ease-in-sine" data-aos-duration="800">
                    RSVP
                </h2>
                <form action="#" method="#" data-aos="fade-up" data-aos-easing="ease-in-sine"
                    data-aos-duration="800">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 font-croissant">
                            Nama :
                        </label>
                        <input type="text" id="name" name="name"
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                            placeholder="Nama Anda" required
                            style="border-color: #d1d5db; transition: border-color 0.3s ease; outline: none;"
                            onfocus="this.style.borderColor='#359484'; this.style.boxShadow='0 0 0 1px #359484';"
                            onblur="this.style.borderColor='#d1d5db'; this.style.boxShadow='none';"
                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                            oninput="this.setCustomValidity('')">

                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700 font-croissant">
                            Pesan :
                        </label>
                        <textarea id="message" name="message" rows="4"
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 sm:text-sm font-montserrat"
                            placeholder="Tulis pesan Anda di sini..." required style="outline: none;"
                            onfocus="this.style.borderColor='#359484'; this.style.boxShadow='0 0 0 1px #359484';"
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
                                <li class="rounded-t-lg py-2 px-3 cursor-pointer hover:bg-[#359484] hover:text-white"
                                    onclick="selectOption('Ya, Saya akan datang')">
                                    Ya, Saya akan datang
                                </li>
                                <li class="py-2 px-3 cursor-pointer hover:bg-[#359484] hover:text-white"
                                    onclick="selectOption('Maaf, Saya tidak bisa datang')">
                                    Maaf, Saya tidak bisa datang
                                </li>
                                <li class="rounded-b-lg py-2 px-3 cursor-pointer hover:bg-[#359484] hover:text-white"
                                    onclick="selectOption('Saya belum tahu bisa datang atau tidak')">
                                    Saya belum tahu bisa datang atau tidak
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="text-white py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-[#359484] focus:ring-offset-2 transition ease-in-out duration-150 font-montserrat"
                            style="background-color: #359484;">
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
        style="background-image: url('{{ asset('tema/basic-2/images/bg.jpg') }}'); background-position: center; background-size: cover;">
        <div class="absolute top-0 right-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-1.png') }}" alt="Corner 1"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div class="absolute bottom-0 left-0 z-10">
            <img src="{{ asset('tema/basic-2/images/corner-2.png') }}" alt="Corner 2"
                class="w-[200px] h-auto md:w-[250px]">
        </div>
        <div
            class="bg-trans rounded-3xl shadow-lg p-10 m-5 flex flex-col justify-center items-center text-center relative z-10 w-full h-auto max-w-[370px]">
            <div class="mx-auto">
                <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="text-sm font-montserrat text-gray-700">
                        Suatu kebahagiaan & kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan
                        memberikan do’a restu kepada kami
                    </div>
                    <div class="tet-sm text-[#359484] font-croissant mt-5">
                        Wassalamu’alaikum Wr. Wb.
                    </div>
                </div>
                <br><br>
                <div data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="800">
                    <div class="text-sm font-montserrat text-gray-700">
                        Kami yang berbahagia
                    </div>
                    <div class="text-2xl font-bold mt-3 font-croissant text-[#359484]">
                        Rizky & Ana
                    </div>
                    <div class="mt-10 font-montserrat text-gray-700">
                        <div class="text-sm mt-5 text-[#359484;] font-montserrat">
                            Created with
                            <i class="fa-solid fa-heart text-[#359484;]"></i>
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
                <div class="flex items-center justify-between p-4 md:p-5 border-b">
                    <h3 class="text-xl font-semibold text-[#359484]">
                        Galeri Foto
                    </h3>
                    <button type="button"
                        class="text-[#359484] bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
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
                <div class="p-4 md:p-10">
                    <img id="modal-image" class="w-full h-full object-contain rounded" src=""
                        alt="Modal Image">
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Musik -->
    <button id="music-control"
        class="fixed top-4 right-4 z-30 text-[#359484] bg-white py-3 px-4 rounded-full shadow-lg">
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

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.querySelector('.days').innerText = days < 10 ? '0' + days : days;
            document.querySelector('.hours').innerText = hours < 10 ? '0' + hours : hours;
            document.querySelector('.minutes').innerText = minutes < 10 ? '0' + minutes : minutes;
            document.querySelector('.seconds').innerText = seconds < 10 ? '0' + seconds : seconds;

            if (distance < 0) {
                clearInterval(countdownInterval);
                document.getElementById("countdown").innerHTML = "Acara Telah Dimulai!";
            }
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
