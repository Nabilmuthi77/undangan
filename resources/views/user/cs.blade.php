<x-app-layout>
    <!-- Tombol Navigasi Up & Down -->
    <div class="fixed bottom-5 right-2 z-30 flex flex-col space-y-2">
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
    <div class="mx-auto px-4 lg:px-8 py-20">
        <!-- Flash Message -->
        <div>
            @if (session('success'))
                <div id="successModal" tabindex="-1" aria-hidden="true"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 hidden">
                    <div class="relative p-4 w-full max-w-md h-auto md:h-auto opacity-0 scale-50">
                        <div class="relative p-4 text-center bg-white rounded-lg shadow sm:p-5">
                            <button type="button"
                                class="text-gray-900 absolute top-2.5 right-2.5 bg-white hover:bg-gray-200 hover:text-green-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
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
                                class="text-gray-900 absolute top-2.5 right-2.5 bg-white hover:bg-gray-200 hover:text-red-500 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
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
        <div class="w-full">
            <h1 class="text-3xl font-bold mb-10 text-center font-croissant">
                Customer Service
            </h1>
            <div class="bg-white p-6 md:p-10 rounded-lg shadow-lg">
                <!-- Kontak CS -->
                <div class="mb-5">
                    <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">
                        Hubungi Kami
                    </h2>
                    <p class="md:text-lg text-gray-700 mb-4">
                        Ada beberapa cara untuk menghubungi customer service kami. Pilih metode yang paling
                        sesuai dengan kebutuhan Anda :
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold text-blue-700 mb-3 flex items-center">
                                <i class="fa-solid fa-envelope mr-2 pt-[0.1875rem]"></i>
                                Email
                            </h3>
                            <p class="text-gray-700 mb-3">
                                Untuk pertanyaan umum, dukungan teknis, atau masalah lainnya, Anda dapat mengirimkan
                                email ke alamat berikut :
                            </p>
                            <a class="text-blue-600">
                                ikhsanpermana302@gmail.com
                            </a>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                            <h3 class="text-xl font-semibold text-green-700 mb-3 flex items-center">
                                <i class="fa-brands fa-whatsapp mr-2 pt-[0.19rem]"></i>
                                WhatsApp
                            </h3>
                            <p class="text-gray-700 mb-3">
                                Butuh bantuan segera? Hubungi kami melalui WhatsApp untuk respon cepat
                            </p>
                            <a class="text-green-600">
                                08558359732
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Waktu Operasional  -->
                <div>
                    <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">
                        Jam Operasional
                    </h2>
                    <p class="md:text-lg text-gray-700 mb-4">
                        Kami siap melayani Anda pada jam-jam berikut :
                    </p>
                    <div class="space-y-3">
                        <p class="md:text-lg font-medium text-gray-800">
                            Senin - Jumat :
                            <span class="text-gray-600">
                                08:00 - 16:00 WIB
                            </span>
                        </p>
                        <p class="md:text-lg font-medium text-gray-800">
                            Sabtu :
                            <span class="text-gray-600">
                                08:00 - 14:00 WIB
                            </span>
                        </p>
                        <p class="md:text-lg font-medium text-gray-800">
                            Minggu dan Hari Libur :
                            <span class="text-gray-600">
                                Tutup
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <hr class="mt-6 mb-5 border-t border-gray-800">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Feedback -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-700 mb-3 flex items-center">
                        <i class="fa-solid fa-comment mr-2 pt-[0.1875rem]"></i>
                        Feedback
                    </h3>
                    <p class="text-gray-700 mb-6">
                        Kami menghargai masukan dan saran Anda untuk meningkatkan kualitas layanan kami. Jika
                        Anda memiliki umpan balik terkait pengalaman Anda menggunakan layanan kami, silakan
                        berikan komentar
                        atau saran Anda melalui formulir di bawah ini. Kami akan senang mendengar pendapat Anda!
                    </p>
                    <form action="{{ route('feedback.store') }}" method="POST" class="grid gap-1">
                        @csrf
                        <div>
                            <label for="feedback" class="block mb-2 text-sm font-medium text-gray-900">
                                Tulis umpan balik Anda di sini
                            </label>
                            <textarea id="feedback" name="feedback" class="custom-input h-32" required
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                <i class="fas fa-paper-plane mr-2"></i>
                                <span class="mr-2">Kirim</span>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- Bug -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-green-700 mb-3 flex items-center">
                        <i class="fa-solid fa-bug mr-2 pt-[0.19rem]"></i>
                        Lapor Bug
                    </h3>
                    <p class="text-gray-700 mb-6">
                        Apakah Anda menemui masalah atau bug saat menggunakan aplikasi kami? Kami mohon untuk
                        melaporkan masalah yang Anda temui agar kami dapat segera menanganinya. Mohon berikan
                        detail tentang bug
                        yang terjadi melalui formulir di bawah ini.
                    </p>
                    <form action="{{ route('bug-reports.store') }}" method="POST" enctype="multipart/form-data"
                        class="grid gap-1">
                        @csrf
                        <div>
                            <label for="bug" class="block mb-2 text-sm font-medium text-gray-900">
                                Deskripsikan bug yang Anda temui
                            </label>
                            <textarea id="bug" name="bug_description" class="custom-input h-32" required
                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
                        </div>
                        <div>
                            <label for="screenshot" class="block mb-2 text-sm font-medium text-gray-900">
                                Screenshot (Opsional)
                            </label>
                            <input type="file" id="screenshot" name="screenshot" accept="image/*"
                                class="custom-input">
                        </div>
                        <div class="flex justify-end mt-5">
                            <button type="submit"
                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                <i class="fas fa-paper-plane mr-2"></i>
                                <span class="mr-2">Kirim</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-6 border-t border-gray-800">
            <div class="text-center">
                <p class="text-gray-700">
                    Jika Anda memiliki pertanyaan lainnya atau membutuhkan bantuan lebih lanjut, jangan ragu
                    untuk menghubungi kami. Kami akan senang hati membantu Anda!
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
