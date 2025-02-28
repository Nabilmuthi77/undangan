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
        <div class="w-full">
            <h1 class="text-3xl font-bold mb-10 text-center font-croissant">
                Feedback & Laporan Bug
            </h1>
            <!-- Feedback -->
            <div id="feedback" class="bg-white p-5 mt-10 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Feedback</h3>
                <div class="relative overflow-x-auto overflow-y-auto mx-auto max-h-80">
                    <table class="text-sm text-left rtl:text-right text-gray-500 text-nowrap w-full border">
                        <thead class="text-white bg-gray-800 rounded">
                            <tr>
                                <th scope="col" class="px-6 py-4">Username</th>
                                <th scope="col" class="px-6 py-4">Feedback</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @if ($feedback->isEmpty())
                                <tr>
                                    <td colspan="9" class="px-6 py-4 text-center text-gray-500">
                                        Tidak ada feedback yang tersedia
                                    </td>
                                </tr>
                            @else
                                @foreach ($feedback as $f)
                                    <tr class="bg-white border-b text-nowrap">
                                        <td class="px-6 py-4">{{ $f->username }}</td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-feedback-{{ $f->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-feedback-{{ $f->id }}"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fa-solid fa-eye mr-1"></i>
                                                Lihat
                                            </button>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-hapus-feedback-{{ $f->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-feedback-{{ $f->id }}"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150">
                                                <i class="fas fa-trash-alt mr-1"></i>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Lihat Feedback -->
                                    <div id="hs-scale-animation-modal-feedback-{{ $f->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-feedback-{{ $f->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-feedback-{{ $f->id }}"
                                                        class="font-bold text-gray-800">
                                                        Feedback
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-feedback-{{ $f->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4">
                                                    <p>{{ $f->feedback }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus Feedback -->
                                    <div id="hs-scale-animation-modal-hapus-feedback-{{ $f->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-hapus-feedback-{{ $f->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label"
                                                        class="font-bold text-gray-800">
                                                        Hapus Feedback
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-hapus-feedback-{{ $f->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <div class="p-4">
                                                        <p>
                                                            Apakah Anda yakin ingin menghapus feedback
                                                            <strong>{{ $f->username }}</strong>?
                                                        </p>
                                                    </div>
                                                    <div class="flex justify-end mt-4">
                                                        <form action="{{ route('admin.destroyFeedback', $f->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                                <i class="fas fa-trash-alt mr-2"></i>
                                                                <span class="mr-2">
                                                                    Hapus
                                                                </span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    @if ($feedback->hasPages())
                        <div class="p-3">
                            {{ $feedback->appends(request()->query())->fragment('feedback')->onEachSide(0)->links() }}
                        </div>
                    @endif
                </div>
            </div>
            <br>
            <!-- Laporan Bug -->
            <div id="bug" class="bg-white p-5 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Laporan Bug</h3>
                <div class="relative overflow-x-auto overflow-y-auto mx-auto max-h-80">
                    <table class="text-sm text-left rtl:text-right text-gray-500 text-nowrap w-full border">
                        <thead class="text-white bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4">Username</th>
                                <th scope="col" class="px-6 py-4">Deskripsi</th>
                                <th scope="col" class="px-6 py-4">Screenshot</th>
                                <th scope="col" class="px-6 py-4">Respon Admin</th>
                                <th scope="col" class="px-6 py-4">Tanggal Dikirim</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @if ($bug->isEmpty())
                                <tr>
                                    <td colspan="9" class="px-6 py-4 text-center text-gray-500">
                                        Tidak ada laporan bug yang tersedia
                                    </td>
                                </tr>
                            @else
                                @foreach ($bug as $b)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">{{ $b->username }}</td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-deskripsi-{{ $b->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-deskripsi-{{ $b->id }}"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fa-solid fa-eye mr-1"></i> Lihat
                                            </button>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-ss-{{ $b->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-ss-{{ $b->id }}"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fa-solid fa-eye mr-1"></i>
                                                Lihat
                                            </button>
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($b->admin_response)
                                                <button aria-haspopup="dialog" aria-expanded="false"
                                                    aria-controls="hs-scale-animation-modal-respon-{{ $b->id }}"
                                                    data-hs-overlay="#hs-scale-animation-modal-respon-{{ $b->id }}"
                                                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                    <i class="fa-solid fa-eye mr-1"></i>
                                                    Lihat
                                                </button>
                                            @else
                                                <button aria-haspopup="dialog" aria-expanded="false"
                                                    aria-controls="hs-scale-animation-modal-tambah-respon-{{ $b->id }}"
                                                    data-hs-overlay="#hs-scale-animation-modal-tambah-respon-{{ $b->id }}"
                                                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                    <i class="fa-solid fa-comment-dots mr-1"></i>
                                                    Beri Respon
                                                </button>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">{{ $b->created_at->format('d-m-Y') }}</td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-hapus-laporan-{{ $b->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-laporan-{{ $b->id }}"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150">
                                                <i class="fas fa-trash-alt mr-1"></i>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Deskripsi -->
                                    <div id="hs-scale-animation-modal-deskripsi-{{ $b->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-deskripsi-{{ $b->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-deskripsi-{{ $b->id }}"
                                                        class="font-bold text-gray-800">
                                                        Deskripsi Bug
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-deskripsi-{{ $b->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4">
                                                    {{ $b->username }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal SS -->
                                    <div id="hs-scale-animation-modal-ss-{{ $b->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-ss-{{ $b->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-ss-{{ $b->id }}"
                                                        class="font-bold text-gray-800">
                                                        Screenshot
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-ss-{{ $b->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4">
                                                    @if ($b->screenshot_path)
                                                        <img src="{{ asset('storage/' . $b->screenshot_path) }}"
                                                            alt="Screenshot" class="w-full h-[80vh] rounded-lg">
                                                    @else
                                                        <p>Tidak ada screenshot</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Respon -->
                                    <div id="hs-scale-animation-modal-respon-{{ $b->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-respon-{{ $b->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-respon-{{ $b->id }}"
                                                        class="font-bold text-gray-800">
                                                        Respon Admin
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-respon-{{ $b->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4">
                                                    <form action="{{ route('admin.updateBugResponse', $b->id) }}"
                                                        method="POST" enctype="multipart/form-data"
                                                        class="grid gap-1">
                                                        @csrf
                                                        @method('PUT')
                                                        <div>
                                                            <label for="admin_response"
                                                                class="block mb-2 text-sm font-medium text-gray-900">
                                                                Respon Admin
                                                            </label>
                                                            <textarea id="admin_response" name="admin_response" class="custom-input h-32" required
                                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">{{ old('admin_response', $b->admin_response) }}
                                                                    </textarea>
                                                        </div>
                                                        <div class="flex justify-end mt-5">
                                                            <button type="submit"
                                                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                                                <i class="fas fa-save mr-2"></i>
                                                                <span class="mr-2">Simpan</span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Beri Respon -->
                                    <div id="hs-scale-animation-modal-tambah-respon-{{ $b->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-tambah-respon-{{ $b->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label"
                                                        class="font-bold text-gray-800">
                                                        Beri Respon
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-tambah-respon-{{ $b->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <form action="{{ route('admin.updateBugResponse', $b->id) }}"
                                                        method="POST" enctype="multipart/form-data"
                                                        class="grid gap-1">
                                                        @csrf
                                                        @method('PUT')
                                                        <div>
                                                            <label for="admin_response"
                                                                class="block mb-2 text-sm font-medium text-gray-900">
                                                                Respon Admin
                                                            </label>
                                                            <textarea id="admin_response" name="admin_response" class="custom-input h-32" required
                                                                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">{{ $b->admin_response }}</textarea>
                                                        </div>
                                                        <div class="flex justify-end mt-5">
                                                            <button type="submit"
                                                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                                                <i class="fas fa-save mr-2"></i>
                                                                <span class="mr-2">
                                                                    Simpan
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus Laporan -->
                                    <div id="hs-scale-animation-modal-hapus-laporan-{{ $b->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-hapus-laporan-{{ $b->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label"
                                                        class="font-bold text-gray-800">
                                                        Hapus Laporan
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-hapus-laporan-{{ $b->id }}">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="shrink-0 size-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18"></path>
                                                            <path d="m6 6 12 12"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                    <div class="p-4">
                                                        <p>
                                                            Apakah Anda yakin ingin menghapus laporan
                                                            <strong>{{ $b->username }}</strong>
                                                            ?
                                                        </p>
                                                    </div>
                                                    <div class="flex justify-end mt-4">
                                                        <form action="{{ route('admin.destroyBug', $b->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                                <i class="fas fa-trash-alt mr-2"></i>
                                                                <span class="mr-2">Hapus</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    @if ($bug->hasPages())
                        <div class="p-3">
                            {{ $bug->appends(request()->query())->fragment('bug')->onEachSide(0)->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
