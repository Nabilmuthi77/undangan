<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeInvite | @yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Average+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        .bg-container {
            background-image: url('/images/5569176.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            transform: rotate(180deg);
            width: 100%;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0.7;
        }


        .custom-input {
            background-color: #F9FAFB;
            border: 1px solid #D1D5DB;
            color: #000;
            border-radius: 0.5rem;
            padding: 0.625rem;
            width: 100%;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-input:focus {
            border-color: #1F2937;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.5);
            outline: none;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        .animate-bounce {
            animation: bounce 1s infinite;
        }

        .animate-bounce.delay-1 {
            animation-delay: 0.2s;
        }

        .animate-bounce.delay-2 {
            animation-delay: 0.3s;
        }

        [x-cloak] {
            display: none;
        }

        .swiper-button-next,
        .swiper-button-prev {
            top: 40%;
            background-color: rgba(31, 41, 55, 0.7);
            color: #ffffff;
            width: 35px;
            height: 50px;
            border-radius: 5px;
        }


        .swiper-button-next {
            right: 0px;
        }

        .swiper-button-prev {
            left: 0px;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 20px;
            font-weight: bold;
        }

        .swiper-pagination {
            font-family: 'Average Sans', sans-serif;
            font-size: 16px;
            color: #1f2937;
            padding: 6px 12px;
            display: inline-block;
            text-align: center;
        }

        .swiper-pagination-fraction {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .swiper-pagination-current {
            font-weight: bold;
            color: #1f2937;
        }

        .swiper-pagination-total {
            font-weight: normal;
            color: #6b7280;
        }
    </style>

</head>

<body class="font-average antialiased">

    <x-custom-navbar></x-custom-navbar>

    <div class="min-h-full">
        <main>
            @yield('content')
        </main>
    </div>

    <x-footer></x-footer>

    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());

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

        AOS.init();

        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 16,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    type: "fraction",
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                },
            });

            new Splide('#carousel', {
                type: 'loop',
                arrows: false,
                pagination: false,
                autoplay: true,
                interval: 3000,
                pauseOnHover: false,
            }).mount();

            const selectThemeButtons = document.querySelectorAll('.select-theme');

            selectThemeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const themeId = this.getAttribute('aria-controls').split('-').pop();
                    const modal = document.querySelector(`#hs-scale-animation-modal-${themeId}`);
                    const themeInput = modal.querySelector('#theme_id');
                    themeInput.value = themeId;
                });
            });

            const berandaLink = document.getElementById('beranda-link');

            if (window.location.pathname.includes('tutorial')) {
                berandaLink.setAttribute('href', '{{ route('home') }}');
            } else {
                berandaLink.setAttribute('href', '#beranda');
            }
        });
    </script>

</body>

</html>
