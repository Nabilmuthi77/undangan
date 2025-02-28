<div id="foto-video" class="py-10 px-5 mx-auto lg:px-8 lg:py-16 bg-white rounded-lg shadow-lg mt-10 max-w-3xl">
    <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
        Foto & Video
    </h2>
    <div class="grid grid-cols-1 gap-10 py-10">
        <!-- Foto Sampul -->
        <h2 id="foto-sampul" class="text-xl text-center font-semibold text-gray-900">
            Foto Sampul
        </h2>
        @if ($galeri && $galeri->foto_sampul)
            <div class="flex flex-col items-center">
                <img src="{{ asset($galeri->foto_sampul) }}" alt=""
                    class="w-full max-h-96 object-cover rounded-lg shadow-md mx-auto cursor-pointer"
                    onclick="openModal('{{ asset($galeri->foto_sampul) }}')">
                <button aria-haspopup="dialog" aria-expanded="false"
                    aria-controls="hs-scale-animation-modal-hapus-foto-sampul-{{ $galeri->id }}"
                    data-hs-overlay="#hs-scale-animation-modal-hapus-foto-sampul-{{ $galeri->id }}"
                    class="mt-[1.05rem] bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    <i class="fas fa-trash-alt mr-2"></i>
                    <span>Hapus</span>
                </button>
            </div>
            <!-- Modal Hapus -->
            <div id="hs-scale-animation-modal-hapus-foto-sampul-{{ $galeri->id }}"
                class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                role="dialog" tabindex="-1"
                aria-labelledby="hs-scale-animation-modal-label-hapus-foto-sampul-{{ $galeri->id }}">
                <div
                    class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                    <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                        <div class="flex justify-between items-center py-3 px-4 border-b">
                            <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                Hapus Foto Sampul
                            </h3>
                            <button type="button"
                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                aria-label="Close"
                                data-hs-overlay="#hs-scale-animation-modal-hapus-foto-sampul-{{ $galeri->id }}">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 overflow-y-auto">
                            <p>Apakah Anda yakin ingin menghapus foto sampul ini?</p>
                            <div class="flex justify-end mt-4">
                                <form action="{{ route('user.galeri.destroyCoverPhoto', $galeri->id) }}" method="POST">
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
        @else
            <p class="text-center text-gray-500 my-10">Tidak ada foto sampul yang tersedia</p>
        @endif
        <br>
        <!-- Foto Tambahan Untuk Tema Tertentu -->
        @if ($invitation->theme_id == 6)
            <!-- Foto Pembuka -->
            <h2 id="foto-pembuka" class="text-xl text-center font-semibold text-gray-900">
                Foto Pembuka
            </h2>
            @if ($galeri && $galeri->foto_pembuka)
                <div class="flex flex-col items-center">
                    <img src="{{ asset($galeri->foto_pembuka) }}" alt=""
                        class="max-w-96 max-h-96 object-cover rounded-lg shadow-md mx-auto cursor-pointer"
                        onclick="openModal('{{ asset($galeri->foto_pembuka) }}')">
                    <button aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="hs-scale-animation-modal-hapus-foto-pembuka-{{ $galeri->id }}"
                        data-hs-overlay="#hs-scale-animation-modal-hapus-foto-pembuka-{{ $galeri->id }}"
                        class="mt-[1.05rem] bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        <i class="fas fa-trash-alt mr-2"></i>
                        <span>Hapus</span>
                    </button>
                </div>
                <!-- Modal Hapus Sampul -->
                <div id="hs-scale-animation-modal-hapus-foto-pembuka-{{ $galeri->id }}"
                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    role="dialog" tabindex="-1"
                    aria-labelledby="hs-scale-animation-modal-label-hapus-foto-pembuka-{{ $galeri->id }}">
                    <div
                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                    Hapus Foto Pembuka
                                </h3>
                                <button type="button"
                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-label="Close"
                                    data-hs-overlay="#hs-scale-animation-modal-hapus-foto-pembuka-{{ $galeri->id }}">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <p>Apakah Anda yakin ingin menghapus foto pembuka ini?</p>
                                <div class="flex justify-end mt-4">
                                    <form action="{{ route('user.galeri.destroyFotoPembuka', $galeri->id) }}"
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
            @else
                <p class="text-center text-gray-500 my-10">Tidak ada foto pembuka yang tersedia</p>
            @endif
            <br>
            <!-- Foto Acara -->
            <h2 id="foto-acara" class="text-xl text-center font-semibold text-gray-900">
                Foto Acara
            </h2>
            @if ($galeri && $galeri->foto_acara)
                <div class="flex flex-col items-center">
                    <img src="{{ asset($galeri->foto_acara) }}" alt=""
                        class="max-w-96 max-h-96 object-cover rounded-lg shadow-md mx-auto cursor-pointer"
                        onclick="openModal('{{ asset($galeri->foto_acara) }}')">
                    <button aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="hs-scale-animation-modal-hapus-foto-acara-{{ $galeri->id }}"
                        data-hs-overlay="#hs-scale-animation-modal-hapus-foto-acara-{{ $galeri->id }}"
                        class="mt-[1.05rem] bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        <i class="fas fa-trash-alt mr-2"></i>
                        <span>Hapus</span>
                    </button>
                </div>
                <!-- Modal Hapus -->
                <div id="hs-scale-animation-modal-hapus-foto-acara-{{ $galeri->id }}"
                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    role="dialog" tabindex="-1"
                    aria-labelledby="hs-scale-animation-modal-label-hapus-foto-acara-{{ $galeri->id }}">
                    <div
                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                    Hapus Foto Acara
                                </h3>
                                <button type="button"
                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-label="Close"
                                    data-hs-overlay="#hs-scale-animation-modal-hapus-foto-acara-{{ $galeri->id }}">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <p>Apakah Anda yakin ingin menghapus foto acara ini?</p>
                                <div class="flex justify-end mt-4">
                                    <form action="{{ route('user.galeri.destroyFotoAcara', $galeri->id) }}"
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
            @else
                <p class="text-center text-gray-500 my-10">Tidak ada foto acara yang tersedia</p>
            @endif
            <br>
            <!-- Foto Cerita -->
            <h2 id="foto-cerita" class="text-xl text-center font-semibold text-gray-900">
                Foto Cerita
            </h2>
            @if ($galeri && $galeri->foto_cerita)
                <div class="flex flex-col items-center">
                    <img src="{{ asset($galeri->foto_cerita) }}" alt=""
                        class="max-w-96 max-h-96 object-cover rounded-lg shadow-md mx-auto cursor-pointer"
                        onclick="openModal('{{ asset($galeri->foto_cerita) }}')">
                    <button aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="hs-scale-animation-modal-hapus-foto-cerita-{{ $galeri->id }}"
                        data-hs-overlay="#hs-scale-animation-modal-hapus-foto-cerita-{{ $galeri->id }}"
                        class="mt-[1.05rem] bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        <i class="fas fa-trash-alt mr-2"></i>
                        <span>Hapus</span>
                    </button>
                </div>
                <!-- Modal Hapus -->
                <div id="hs-scale-animation-modal-hapus-foto-cerita-{{ $galeri->id }}"
                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    role="dialog" tabindex="-1"
                    aria-labelledby="hs-scale-animation-modal-label-hapus-foto-cerita-{{ $galeri->id }}">
                    <div
                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                    Hapus Foto Cerita
                                </h3>
                                <button type="button"
                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-label="Close"
                                    data-hs-overlay="#hs-scale-animation-modal-hapus-foto-cerita-{{ $galeri->id }}">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <p>Apakah Anda yakin ingin menghapus foto cerita ini?</p>
                                <div class="flex justify-end mt-4">
                                    <form action="{{ route('user.galeri.destroyFotoCerita', $galeri->id) }}"
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
            @else
                <p class="text-center text-gray-500 my-10">Tidak ada foto cerita yang tersedia</p>
            @endif
            <br>
        @endif
        @if ($invitation->theme_id == 7)
            <!-- Foto Acara -->
            <h2 id="foto-acara" class="text-xl text-center font-semibold text-gray-900">
                Foto Acara
            </h2>
            @if ($galeri && $galeri->foto_acara)
                <div class="flex flex-col items-center">
                    <img src="{{ asset($galeri->foto_acara) }}" alt=""
                        class="max-w-96 max-h-96 object-cover rounded-lg shadow-md mx-auto cursor-pointer"
                        onclick="openModal('{{ asset($galeri->foto_acara) }}')">
                    <button aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="hs-scale-animation-modal-hapus-foto-acara-{{ $galeri->id }}"
                        data-hs-overlay="#hs-scale-animation-modal-hapus-foto-acara-{{ $galeri->id }}"
                        class="mt-[1.05rem] bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        <i class="fas fa-trash-alt mr-2"></i>
                        <span>Hapus</span>
                    </button>
                </div>
                <!-- Modal Hapus -->
                <div id="hs-scale-animation-modal-hapus-foto-acara-{{ $galeri->id }}"
                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    role="dialog" tabindex="-1"
                    aria-labelledby="hs-scale-animation-modal-label-hapus-foto-acara-{{ $galeri->id }}">
                    <div
                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                    Hapus Foto Acara
                                </h3>
                                <button type="button"
                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-label="Close"
                                    data-hs-overlay="#hs-scale-animation-modal-hapus-foto-acara-{{ $galeri->id }}">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <p>Apakah Anda yakin ingin menghapus foto acara ini?</p>
                                <div class="flex justify-end mt-4">
                                    <form action="{{ route('user.galeri.destroyFotoAcara', $galeri->id) }}"
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
            @else
                <p class="text-center text-gray-500 my-10">Tidak ada foto acara yang tersedia</p>
            @endif
            <br>
        @endif
        @if ($invitation->theme_id == 9)
            <!-- Foto Pembuka -->
            <h2 id="foto-pembuka" class="text-xl text-center font-semibold text-gray-900">
                Foto Pembuka
            </h2>
            @if ($galeri && $galeri->foto_pembuka)
                <div class="flex flex-col items-center">
                    <img src="{{ asset($galeri->foto_pembuka) }}" alt=""
                        class="max-w-96 max-h-96 object-cover rounded-lg shadow-md mx-auto cursor-pointer"
                        onclick="openModal('{{ asset($galeri->foto_pembuka) }}')">
                    <button aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="hs-scale-animation-modal-hapus-foto-pembuka-{{ $galeri->id }}"
                        data-hs-overlay="#hs-scale-animation-modal-hapus-foto-pembuka-{{ $galeri->id }}"
                        class="mt-[1.05rem] bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        <i class="fas fa-trash-alt mr-2"></i>
                        <span>Hapus</span>
                    </button>
                </div>
                <!-- Modal Hapus Sampul -->
                <div id="hs-scale-animation-modal-hapus-foto-pembuka-{{ $galeri->id }}"
                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    role="dialog" tabindex="-1"
                    aria-labelledby="hs-scale-animation-modal-label-hapus-foto-pembuka-{{ $galeri->id }}">
                    <div
                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                    Hapus Foto Pembuka
                                </h3>
                                <button type="button"
                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-label="Close"
                                    data-hs-overlay="#hs-scale-animation-modal-hapus-foto-pembuka-{{ $galeri->id }}">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <p>Apakah Anda yakin ingin menghapus foto pembuka ini?</p>
                                <div class="flex justify-end mt-4">
                                    <form action="{{ route('user.galeri.destroyFotoPembuka', $galeri->id) }}"
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
            @else
                <p class="text-center text-gray-500 my-10">Tidak ada foto pembuka yang tersedia</p>
            @endif
            <br>
        @endif
        <!-- Foto Galeri -->
        <h2 id="foto-galeri" class="text-xl text-center font-semibold text-gray-900">
            Foto Galeri
        </h2>
        @if ($galeri && $galeri->foto_galeri && !empty(json_decode($galeri->foto_galeri)))
            <div class="grid grid-cols-2 gap-6">
                @foreach (json_decode($galeri->foto_galeri) as $index => $foto)
                    <div class="flex flex-col items-center">
                        <img src="{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}" alt="Foto Galeri"
                            class="w-full h-64 object-cover rounded-lg shadow-md cursor-pointer"
                            onclick="openModal('{{ asset(str_replace('D:/Herd/undangan/public/', '', $foto)) }}')">
                        <button aria-haspopup="dialog" aria-expanded="false"
                            aria-controls="hs-scale-animation-modal-hapus-foto-galeri-{{ $galeri->id }}-{{ $index }}"
                            data-hs-overlay="#hs-scale-animation-modal-hapus-foto-galeri-{{ $galeri->id }}-{{ $index }}"
                            class="mt-4 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <i class="fas fa-trash-alt mr-2"></i>
                            <span>Hapus</span>
                        </button>
                    </div>
                    <!-- Modal Hapus Galeri -->
                    <div id="hs-scale-animation-modal-hapus-foto-galeri-{{ $galeri->id }}-{{ $index }}"
                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                        role="dialog" tabindex="-1"
                        aria-labelledby="hs-scale-animation-modal-label-hapus-foto-galeri-{{ $galeri->id }}-{{ $index }}">
                        <div
                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                            <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                    <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                        Hapus Foto
                                    </h3>
                                    <button type="button"
                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                        aria-label="Close"
                                        data-hs-overlay="#hs-scale-animation-modal-hapus-foto-galeri-{{ $galeri->id }}-{{ $index }}">
                                        <span class="sr-only">Close</span>
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-4 overflow-y-auto">
                                    <p>
                                        Apakah Anda yakin ingin menghapus foto ini?
                                    </p>
                                    <div class="flex justify-end mt-4">
                                        <form action="{{ route('user.galeri.destroyGalleryPhoto', $galeri->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="index" value="{{ $index }}">
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
            </div>
        @else
            <p class="text-center text-gray-500 my-10">
                Tidak ada foto galeri yang tersedia
            </p>
        @endif
        <!-- Modal Foto -->
        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class="hidden fixed inset-0 z-50 flex items-center justify-center">
            <div class="bg-black/80 absolute inset-0"></div>
            <div class="relative p-1 w-full max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <div class="flex items-center justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">Foto</h3>
                        <button type="button"
                            class="text-gray-900 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            onclick="closeModalFoto()">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <div class="px-4 py-2">
                        <img id="modal-image" class="w-full h-[80vh] object-contain" src=""
                            alt="Modal Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambah Foto & Video -->
    <h2 class="mt-14 text-xl text-center font-semibold text-gray-900">
        Tambah Foto & Video
    </h2>
    <hr class="my-5 mx-auto max-w-3xl border-t border-gray-800">
    <!-- Form Upload Foto Sampul -->
    <form action="{{ route('user.galeri.store', $invitation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="foto_sampul" class="block mb-2 text-sm font-medium text-gray-900">
                Foto Sampul
            </label>
            <input type="file" id="foto_sampul" name="foto_sampul" accept="image/*" class="custom-input"
                required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                oninput="this.setCustomValidity('')">
        </div>
        <div class="flex justify-center mt-4">
            <button type="submit"
                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                <i class="fas fa-save mr-2"></i>
                <span class="mr-2">Simpan</span>
            </button>
        </div>
    </form>
    <!-- Form Upload Foto Tambahan Untuk Tema Tertentu -->
    @if ($invitation->theme_id == 6)
        <!-- Form Upload Foto Pembuka -->
        <br><br>
        <form action="{{ route('user.galeri.storeFotoPembuka', $invitation->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="foto_pembuka" class="block mb-2 text-sm font-medium text-gray-900">
                    Foto Pembuka
                </label>
                <input type="file" id="foto_pembuka" name="foto_pembuka" accept="image/*" class="custom-input"
                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="flex justify-center mt-4">
                <button type="submit"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                    <i class="fas fa-save mr-2"></i>
                    <span class="mr-2">Simpan</span>
                </button>
            </div>
        </form>
        <!-- Form Upload Foto Acara -->
        <br><br>
        <form action="{{ route('user.galeri.storeFotoAcara', $invitation->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="foto_acara" class="block mb-2 text-sm font-medium text-gray-900">
                    Foto Acara
                </label>
                <input type="file" id="foto_acara" name="foto_acara" accept="image/*" class="custom-input"
                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="flex justify-center mt-4">
                <button type="submit"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                    <i class="fas fa-save mr-2"></i>
                    <span class="mr-2">Simpan</span>
                </button>
            </div>
        </form>
        <!-- Form Upload Foto Cerita -->
        <br><br>
        <form action="{{ route('user.galeri.storeFotoCerita', $invitation->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="foto_cerita" class="block mb-2 text-sm font-medium text-gray-900">
                    Foto Cerita
                </label>
                <input type="file" id="foto_cerita" name="foto_cerita" accept="image/*" class="custom-input"
                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="flex justify-center mt-4">
                <button type="submit"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                    <i class="fas fa-save mr-2"></i>
                    <span class="mr-2">Simpan</span>
                </button>
            </div>
        </form>
    @endif
    @if ($invitation->theme_id == 7)
        <!-- Form Upload Foto Acara -->
        <br><br>
        <form action="{{ route('user.galeri.storeFotoAcara', $invitation->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="foto_acara" class="block mb-2 text-sm font-medium text-gray-900">
                    Foto Acara
                </label>
                <input type="file" id="foto_acara" name="foto_acara" accept="image/*" class="custom-input"
                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="flex justify-center mt-4">
                <button type="submit"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                    <i class="fas fa-save mr-2"></i>
                    <span class="mr-2">Simpan</span>
                </button>
            </div>
        </form>
    @endif
    @if ($invitation->theme_id == 9)
        <!-- Form Upload Foto Pembuka -->
        <br><br>
        <form action="{{ route('user.galeri.storeFotoPembuka', $invitation->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="foto_pembuka" class="block mb-2 text-sm font-medium text-gray-900">
                    Foto Pembuka
                </label>
                <input type="file" id="foto_pembuka" name="foto_pembuka" accept="image/*" class="custom-input"
                    required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                    oninput="this.setCustomValidity('')">
            </div>
            <div class="flex justify-center mt-4">
                <button type="submit"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                    <i class="fas fa-save mr-2"></i>
                    <span class="mr-2">Simpan</span>
                </button>
            </div>
        </form>
    @endif
    <!-- Form Upload Foto Galeri -->
    <br><br>
    <form action="{{ route('user.galeri.storeMultiple', $invitation->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="foto_galeri" class="block mb-2 text-sm font-medium text-gray-900">
                Foto Galeri
            </label>
            <input type="file" id="foto_galeri" name="foto_galeri[]" accept="image/*" multiple
                class="custom-input" required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                oninput="this.setCustomValidity('')">
            <p class="mt-1 text-sm text-gray-500">
                Pilih beberapa foto untuk galeri (max. 6)
            </p>
        </div>
        <div class="flex justify-center mt-4">
            <button type="submit"
                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                <i class="fas fa-save mr-2"></i>
                <span class="mr-2">Simpan</span>
            </button>
        </div>
    </form>
    <!-- Form Input URL Video Galeri -->
    <br><br>
    <form id="video" action="{{ route('user.galeri.storeVideo', $invitation->id) }}" method="POST">
        @csrf
        <div class="mb-6">
            <label for="video_galeri" class="block mb-2 text-sm font-medium text-gray-900">
                Video Galeri (Embed Youtube)
            </label>
            <input type="url" id="video_galeri" name="video_galeri"
                placeholder="Masukkan link video (contoh : https://www.youtube.com/embed/example)"
                class="custom-input" value="{{ old('video_galeri', $galeri->video_galeri ?? '') }}" required
                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
            <button type="button" aria-haspopup="dialog" aria-expanded="false"
                aria-controls="hs-scale-animation-modal-video-tutorial"
                data-hs-overlay="#hs-scale-animation-modal-video-tutorial"
                class="mt-2 text-sm py-1 px-4 rounded text-white bg-gray-800 shadow-lg">
                Tutorial
            </button>
        </div>
        <div class="flex justify-center mt-4">
            <button type="submit"
                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                <i class="fas fa-save mr-2"></i>
                <span class="mr-2">Simpan</span>
            </button>
        </div>
    </form>
    <!-- Modal Tutorial -->
    <div id="hs-scale-animation-modal-video-tutorial"
        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label-video-tutorial">
        <div
            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="hs-scale-animation-modal-label-tutorial" class="font-bold text-gray-800">
                        Tutorial
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#hs-scale-animation-modal-video-tutorial">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <p class="text-gray-700">
                        Ikuti langkah-langkah berikut untuk mendapatkan link video embed dari YouTube :
                    </p>
                    <ol class="list-decimal list-inside mt-4 space-y-2 text-gray-600">
                        <li>Buka video YouTube yang ingin Anda tambahkan.</li>
                        <li>Klik tombol <strong>"Bagikan" (Share)</strong> di bawah video.</li>
                        <li>Pilih opsi <strong>"Sematkan" (Embed)</strong>.</li>
                        <li>Di jendela pop-up, temukan URL di dalam tag berikut :</li>
                    </ol>
                    <div class="mt-3 p-3 bg-gray-100 text-sm rounded-md">
                        <code>&lt;iframe src="https://www.youtube.com/embed/example" frameborder="0"
                            allowfullscreen&gt;&lt;/iframe&gt;</code>
                    </div>
                    <p class="text-gray-600 mt-3">Salin hanya bagian URL dari atribut <code>src</code>, seperti :</p>
                    <div class="mt-3 p-3 bg-gray-100 text-sm rounded-md">
                        <code>https://www.youtube.com/embed/example</code>
                    </div>
                    <p class="text-gray-600 mt-3">
                        Gunakan URL tersebut di form "Video Galeri".
                    </p>
                </div>
            </div>
        </div>
    </div>
    @if (!empty($galeri->video_galeri))
        <div class="flex justify-center mt-2">
            <button aria-haspopup="dialog" aria-expanded="false"
                aria-controls="hs-scale-animation-modal-hapus-video-{{ $galeri->id }}"
                data-hs-overlay="#hs-scale-animation-modal-hapus-video-{{ $galeri->id }}"
                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                <i class="fas fa-trash-alt mr-2"></i>
                <span>Hapus</span>
            </button>
        </div>
        <!-- Modal Hapus Video -->
        <div id="hs-scale-animation-modal-hapus-video-{{ $galeri->id }}"
            class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
            role="dialog" tabindex="-1"
            aria-labelledby="hs-scale-animation-modal-label-hapus-video-{{ $galeri->id }}">
            <div
                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                    <div class="flex justify-between items-center py-3 px-4 border-b">
                        <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                            Hapus Foto Sampul
                        </h3>
                        <button type="button"
                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                            aria-label="Close"
                            data-hs-overlay="#hs-scale-animation-modal-hapus-video-{{ $galeri->id }}">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-4 overflow-y-auto">
                        <p>Apakah Anda yakin ingin menghapus video ini?</p>
                        <div class="flex justify-end mt-4">
                            <form action="{{ route('user.galeri.destroyVideo', $galeri->id) }}" method="POST">
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
    @endif
</div>
