@extends('layouts.main-layout')

@section('title', 'Undangan Pernikahan Digital')

@section('content')
    <!-- Background -->
    <div class="bg-container absolute inset-0 z-0"></div>

    <!-- Konten -->
    <div class="container mx-auto px-2 pt-[6.8rem] pb-8 md:px-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-xl md:text-2xl font-semibold mb-4">Langkah-Langkah</h2>
            <br>
            <div class="space-y-6">
                <div class="flex items-center space-x-4">
                    <div
                        class="bg-gray-800 text-white rounded-full h-10 w-10 flex items-center justify-center text-lg font-bold flex-shrink-0">
                        1
                    </div>
                    <div>
                        <h3 class="text-xl font-medium mb-1">Membuat Akun</h3>
                        <p class="text-gray-800 leading-relaxed">
                            Langkah pertama adalah membuat akun pada halaman registrasi, <a href="{{ route('register') }}"
                                class="font-semibold leading-6 underline uppercase">Daftar di
                                sini</a>. Kemudian masuk (login) menggunakan akun
                            tersebut.
                        </p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div
                        class="bg-gray-800 text-white rounded-full h-10 w-10 flex items-center justify-center text-lg font-bold flex-shrink-0">
                        2
                    </div>
                    <div>
                        <h3 class="text-xl font-medium mb-1">Memilih Tema</h3>
                        <p class="text-gray-800 leading-relaxed">
                            Silakan memilih template undangan pernikahan yang sesuai dengan keinginan Anda.
                        </p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div
                        class="bg-gray-800 text-white rounded-full h-10 w-10 flex items-center justify-center text-lg font-bold flex-shrink-0">
                        3
                    </div>
                    <div>
                        <h3 class="text-xl font-medium mb-1">Mengedit Konten</h3>
                        <p class="text-gray-800 leading-relaxed">
                            Sesuaikan informasi seperti nama pasangan, tanggal acara, lokasi, serta detail lainnya sesuai
                            kebutuhan.
                        </p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div
                        class="bg-gray-800 text-white rounded-full h-10 w-10 flex items-center justify-center text-lg font-bold flex-shrink-0">
                        4
                    </div>
                    <div>
                        <h3 class="text-xl font-medium mb-1">Mengirim Undangan</h3>
                        <p class="text-gray-800 leading-relaxed">
                            Sebarkan tautan/link undangan melalui WhatsApp, email atau media sosial lainnya kepada tamu
                            undangan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
