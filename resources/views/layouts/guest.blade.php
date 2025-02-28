<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WeInvite</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .bg-container {
            background-image: url('/images/5569176.jpg');
            background-size: cover;
            background-position: center;
            transform: rotate(180deg);
            width: 100%;
            height: 100%;
            position: absolute;
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
    </style>
</head>

<body class="font-average text-gray-900 antialiased">

    <div class="bg-container absolute inset-0 z-0"></div>

    <div class="min-h-screen flex items-center justify-center mx-5" data-aos="zoom-in" data-aos-easing="ease-in-sine"
        data-aos-duration="800">
        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-lg overflow-hidden sm:rounded-lg rounded-lg">
            {{ $slot }}
        </div>
    </div>

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
