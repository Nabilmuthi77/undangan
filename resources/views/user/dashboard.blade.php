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
        <!-- Dashboard -->
        <div class="w-full">
            <h1 class="text-3xl font-bold mb-10 text-center font-croissant">
                Dashboard
            </h1>
            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="bg-gray-800 text-white rounded-lg p-6 shadow-lg relative overflow-hidden">
                    <h3 class="text-xl font-bold mb-2 relative z-10">Tipe Akun</h3>
                    <p class="text-lg relative z-10">{{ $user->tipe_akun }}</p>
                    <i
                        class="fas fa-id-badge absolute inset-0 m-auto opacity-10 text-6xl flex items-center justify-end right-5"></i>
                </div>
                <div class="bg-gray-800 text-white rounded-lg p-6 shadow-lg relative overflow-hidden">
                    <h3 class="text-xl font-bold mb-2 relative z-10">Ucapan & Doa</h3>
                    <p class="text-lg relative z-10">{{ $commentcount }}</p>
                    <i
                        class="fa-solid fa-comment-dots absolute inset-0 m-auto opacity-10 text-6xl flex items-center justify-end right-5"></i>
                </div>
                <div class="bg-gray-800 text-white rounded-lg p-6 shadow-lg relative overflow-hidden">
                    <h3 class="text-xl font-bold mb-2 relative z-10">RSVP</h3>
                    <p class="text-lg relative z-10">{{ $rsvpcount }}</p>
                    <i
                        class="fas fa-calendar-check absolute inset-0 m-auto opacity-10 text-6xl flex items-center justify-end right-5"></i>
                </div>
            </div>
            <br>
            <hr class="border-t border-gray-800">
            <!-- Ucapan & Doa -->
            <div id="ucapan-doa" class="bg-white p-5 mt-10 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Ucapan & Doa</h3>
                <div class="relative overflow-x-auto overflow-y-auto mx-auto max-h-80">
                    <table class="text-sm text-left rtl:text-right text-gray-500 w-full border">
                        <thead class="text-white bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4">Nama</th>
                                <th scope="col" class="px-6 py-4">Ucapan & Doa</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @if ($comment->isEmpty())
                                <tr>
                                    <td colspan="9" class="px-6 py-4 text-center text-gray-500">
                                        Tidak ada ucapan & doa yang tersedia
                                    </td>
                                </tr>
                            @else
                                @foreach ($comment as $c)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">{{ $c->name }}</td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-ucapan-{{ $c->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-ucapan-{{ $c->id }}"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fa-solid fa-comment-dots mr-1"></i> Lihat
                                            </button>
                                        </td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-hapus-ucapan-{{ $c->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-ucapan-{{ $c->id }}"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150">
                                                <i class="fas fa-trash-alt mr-1"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Lihat Ucapan & Doa -->
                                    <div id="hs-scale-animation-modal-ucapan-{{ $c->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-ucapan-{{ $c->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-ucapan-{{ $c->id }}"
                                                        class="font-bold text-gray-800">
                                                        Ucapan & Doa
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-ucapan-{{ $c->id }}">
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
                                                    <p>{{ $c->message }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus Ucapan & Doa -->
                                    <div id="hs-scale-animation-modal-hapus-ucapan-{{ $c->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-hapus-ucapan-{{ $c->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label"
                                                        class="font-bold text-gray-800">
                                                        Hapus RSVP
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-hapus-ucapan-{{ $c->id }}">
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
                                                            Apakah Anda yakin ingin menghapus ucapan & doa
                                                            <strong>{{ $c->name }}</strong>?
                                                        </p>
                                                    </div>
                                                    <div class="flex justify-end mt-4">
                                                        <form action="{{ route('comments.destroy', $c->id) }}"
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
                    @if ($comment->hasPages())
                        <div class="p-3">
                            {{ $comment->appends(request()->except('comment_page'))->fragment('ucapan-doa')->links() }}
                        </div>
                    @endif
                </div>
            </div>
            <br>
            <!-- RSVP -->
            <div id="rsvp" class="bg-white p-5 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">RSVP</h3>
                <div class="relative overflow-x-auto overflow-y-auto mx-auto max-h-80">
                    <table class="text-sm text-left rtl:text-right text-gray-500 w-full border">
                        <thead class="text-white bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4">Nama</th>
                                <th scope="col" class="px-6 py-4">Pesan</th>
                                <th scope="col" class="px-6 py-4">Konfirmasi Kehadiran</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @if ($rsvp->isEmpty())
                                <tr>
                                    <td colspan="9" class="px-6 py-4 text-center text-gray-500">
                                        Tidak ada RSVP yang tersedia
                                    </td>
                                </tr>
                            @else
                                @foreach ($rsvp as $r)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4">{{ $r->nama }}</td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-rsvp-{{ $r->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-rsvp-{{ $r->id }}"
                                                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                <i class="fa-solid fa-comment-dots mr-1"></i> Lihat
                                            </button>
                                        </td>
                                        <td class="px-6 py-4">{{ $r->konfirmasi_kehadiran }}</td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-hapus-rsvp-{{ $r->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-rsvp-{{ $r->id }}"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150">
                                                <i class="fas fa-trash-alt mr-1"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Lihat Pesan RSVP -->
                                    <div id="hs-scale-animation-modal-rsvp-{{ $r->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-rsvp-{{ $r->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-rsvp-{{ $r->id }}"
                                                        class="font-bold text-gray-800">
                                                        Pesan
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-rsvp-{{ $r->id }}">
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
                                                    <p>{{ $r->pesan }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus RSVP -->
                                    <div id="hs-scale-animation-modal-hapus-rsvp-{{ $r->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-hapus-rsvp-{{ $r->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label"
                                                        class="font-bold text-gray-800">
                                                        Hapus RSVP
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-hapus-rsvp-{{ $r->id }}">
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
                                                            Apakah Anda yakin ingin menghapus rsvp
                                                            <strong>{{ $r->nama }}</strong>
                                                            ?
                                                        </p>
                                                    </div>
                                                    <div class="flex justify-end mt-4">
                                                        <form action="{{ route('rsvp.destroy', $r->id) }}"
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
                    @if ($rsvp->hasPages())
                        <div class="p-3">
                            {{ $rsvp->appends(request()->except('rsvp_page'))->fragment('rsvp')->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
