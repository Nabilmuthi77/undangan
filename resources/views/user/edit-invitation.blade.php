<x-app-layout>
    <!-- Bottom Navbar -->
    <div class="fixed bottom-0 left-0 right-0 z-30 bg-white border-t border-gray-200">
        <div id="bottom-navbar" class="flex overflow-x-auto whitespace-nowrap justify-around items-center py-2">
            <a href="#pengantin" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fa-solid fa-heart text-lg"></i>
                <span class="text-xs">Pengantin</span>
            </a>
            <a href="#acara" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fa-solid fa-clock text-lg"></i>
                <span class="text-xs">Acara</span>
            </a>
            @if ($isPremium)
                <a href="#streaming"
                    class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                    <i class="fas fa-broadcast-tower text-lg"></i>
                    <span class="text-xs">Streaming</span>
                </a>
            @endif
            <a href="#foto-video"
                class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fa-solid fa-photo-film text-lg"></i>
                <span class="text-xs">Foto & Video</span>
            </a>
            <a href="#cerita" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-book-open text-lg"></i>
                <span class="text-xs">Cerita</span>
            </a>
            <a href="#quote" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-quote-right text-lg"></i>
                <span class="text-xs">Quote</span>
            </a>
            @if ($isPremium)
                <a href="#kado-digital"
                    class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                    <i class="fas fa-gift text-lg"></i>
                    <span class="text-xs">Kado Digital</span>
                </a>
            @endif
            <a href="#musik" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-music text-lg"></i>
                <span class="text-xs">Musik</span>
            </a>
            <a href="#tamu" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-user-friends text-lg"></i>
                <span class="text-xs">Tamu</span>
            </a>
            @if ($isPremium)
                <a href="#ucapan-doa"
                    class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                    <i class="fa-solid fa-comment-dots text-lg"></i>
                    <span class="text-xs">Ucapan & Doa</span>
                </a>
            @endif
            <a href="#teks" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fa-solid fa-file-lines text-lg"></i>
                <span class="text-xs">Teks</span>
            </a>
            <a href="#tema" class="flex flex-col items-center text-gray-500 hover:text-gray-800 min-w-[64px] mx-4">
                <i class="fas fa-palette text-lg"></i>
                <span class="text-xs">Tema</span>
            </a>
        </div>
    </div>
    <!-- Tombol Navigasi Up & Down -->
    <div class="fixed bottom-24 md:bottom-20 right-2 z-30 flex flex-col space-y-2">
        <!-- Tombol ke Atas -->
        <a href="#" onclick="window.scrollTo({ top: 0, behavior: 'smooth' }); return false;"
            class="bg-gray-800 text-white rounded-full p-3 shadow-lg hover:bg-black transition-colors">
            <i class="fas fa-arrow-up text-lg"></i>
        </a>
        <!-- Tombol ke Bawah -->
        <a href="#"
            onclick="window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' }); return false;"
            class="bg-gray-800 text-white rounded-full p-3 shadow-lg hover:bg-black transition-colors">
            <i class="fas fa-arrow-down text-lg"></i>
        </a>
    </div>
    <!-- Konten -->
    <div class="mx-auto px-2 md:px-4 pb-24 pt-[1rem] md:pt-10">
        <!-- Flash Message -->
        <div>
            @if (session('success'))
                <div id="successModal" tabindex="-1" aria-hidden="true"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 hidden">
                    <div class="relative p-4 w-full max-w-md h-auto md:h-auto opacity-0 scale-50">
                        <div class="relative p-4 text-center bg-white rounded-lg shadow sm:p-5">
                            <button type="button"
                                class="text-gray-900 absolute top-2.5 right-2.5 bg-gray-100 hover:bg-gray-200 hover:text-green-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                onclick="closeModal('successModal')">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <br>
                            <div
                                class="w-20 h-20 rounded-full bg-green-100 p-2 flex items-center justify-center mx-auto mb-3.5 mt-3.5">
                                <svg aria-hidden="true" class="w-8 h-8 text-green-500" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h2 class="mb-4 text-gray-900 text-lg font-bold">
                                BERHASIL
                            </h2>
                            <p class="mb-4 text-gray-900">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                </div>
            @elseif (session('error'))
                <div id="errorModal" tabindex="-1" aria-hidden="true"
                    class="flex justify-center items-center fixed inset-0 z-50 bg-black/80 hidden">
                    <div class="relative p-4 w-full max-w-md h-auto md:h-auto opacity-0 scale-50">
                        <div class="relative p-4 text-center bg-white rounded-lg shadow sm:p-5">
                            <button type="button"
                                class="text-gray-900 absolute top-2.5 right-2.5 bg-gray-100 hover:bg-gray-200 hover:text-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                onclick="closeModal('errorModal')">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">
                                    Close modal
                                </span>
                            </button>
                            <br>
                            <div
                                class="w-20 h-20 rounded-full bg-red-100 p-2 flex items-center justify-center mx-auto mb-3.5 mt-3.5">
                                <svg aria-hidden="true" class="w-8 h-8 text-red-500" fill="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 18L18 6M6 6l12 12" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <h2 class="mb-4 text-gray-900 text-lg font-bold">
                                ERROR
                            </h2>
                            <p class="mb-4 text-gray-900">
                                {{ session('error') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- Data Undangan -->
        <section class="py-8 antialiased mx-auto md:py-16">
            <!-- Pengantin -->
            @include('partials.pengantin')
            <!-- Acara -->
            @include('partials.acara')
            <!-- Streaming -->
            @include('partials.streaming')
            <!-- Galeri -->
            @include('partials.galeri')
            <!-- Cerita -->
            @include('partials.cerita')
            <!-- Quotes -->
            @include('partials.quote')
            <!-- Kado Digital -->
            @include('partials.kado-digital')
            <!-- Musik -->
            @include('partials.musik')
            <!-- Tamu -->
            @include('partials.tamu')
            <!-- Ucapan & Doa -->
            @include('partials.ucapan-doa')
            <!-- Teks -->
            @include('partials.teks')
            <!-- Tema -->
            @include('partials.tema')
            <hr class="border-t border-gray-800 my-5">
            <!-- Tombol Preview -->
            <div class="flex justify-center">
                <a href="{{ route('user.invitation.show', $invitation->slug) }}" target="_blank"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150">
                    <i class="fa-solid fa-envelope-open mr-2"></i>
                    <span class="mr-2">Preview</span>
                </a>
            </div>
        </section>
        <div class="my-8 px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border">
                    <div class="p-6">
                        <p class="text-gray-700 text-center mb-6">
                            Sibuk? Tidak mau repot isi data-datanya? Cukup chat Admin! Kirimkan data yang
                            diperlukan,
                            dan Admin akan mengurusnya untuk Anda.
                            Namun, layanan ini tidak gratis ya, hehe <i class="fa-solid fa-face-grin"></i>. Dengan
                            donasi
                            <span class="font-semibold">Rp30.000</span>, Anda tinggal terima beres!
                        </p>
                        <div class="flex justify-center">
                            <a href="https://wa.me/628558359732" target="_blank"
                                class="flex items-center bg-gray-800 hover:bg-black text-white font-bold py-2 px-6 rounded shadow-md transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2">
                                <i class="fa-brands fa-whatsapp mr-2 text-xl"></i>
                                <span>Chat Sekarang</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
