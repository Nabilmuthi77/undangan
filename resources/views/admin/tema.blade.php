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
        <!-- Tema -->
        <div class="w-full">
            <h1 class="text-3xl font-bold mb-10 text-center font-croissant">
                Tema
            </h1>
            <!-- Search Tema -->
            <div>
                @if (request('query') && $themes->isEmpty())
                    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-500 p-4 my-4" role="alert">
                        <p class="font-bold">Tidak ada hasil</p>
                        <p class="pt-2">Tidak ada tema yang cocok dengan pencarian "{{ request('query') }}"</p>
                    </div>
                @endif
                <form action="{{ route('admin.tema') }}#tema" method="GET" id="searchForm">
                    <div class="mt-5 flex items-center mx-auto max-w-screen-sm">
                        <div class="relative w-full">
                            <label for="query" class="hidden mb-2 text-sm font-medium text-black">Cari</label>
                            <input class="custom-input" style="border-color: #1f2937; border-radius: 0.5rem 0 0 0.5rem;"
                                placeholder="Cari Tema" id="query" name="query" value="{{ request('query') }}"
                                autocomplete="off">
                        </div>
                        <button type="submit"
                            class="py-3 px-5 text-sm font-medium text-white bg-gray-800 rounded-r-lg border border-gray-800 hover:bg-black">
                            Cari
                        </button>
                    </div>
                </form>
            </div>
            <!-- Button Tambah Tema -->
            <div class="flex justify-center my-10">
                <button aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal-tambah"
                    data-hs-overlay="#hs-scale-animation-modal-tambah"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    <span class="mr-2">Tambah Tema</span>
                </button>
            </div>
            <hr id="tema" class="border-t border-gray-800">
            <!-- Daftar Tema -->
            <div class="container mx-auto mt-7">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @if ($themes->isEmpty())
                        <div class="col-span-full text-center text-lg font-semibold my-10">
                            Coming Soon
                        </div>
                    @else
                        @foreach ($themes as $theme)
                            <div class="flex flex-col items-center">
                                <div
                                    class="rounded-lg overflow-hidden shadow-lg border bg-white w-[255px] h-auto mx-auto mb-16 relative">
                                    @if ($theme->tipe === 'Premium')
                                        <div
                                            class="absolute top-4 left-4 bg-gradient-to-r from-[#dbac34] via-[#ffe75f] to-[#dbac34] text-white font-bold px-2 py-1">
                                            <i class="fas fa-crown"></i>
                                        </div>
                                    @endif
                                    <img src="{{ asset($theme->path . '/' . $theme->thumbnail) }}"
                                        alt="{{ $theme->name }}"
                                        class="w-[240px] h-[400px] mx-auto pt-2 px-[0.10rem]">
                                    <div class="px-4 py-3">
                                        <div class="font-bold font-croissant text-lg text-center">
                                            {{ $theme->name }}
                                        </div>
                                    </div>
                                    <div class="w-full border-t border-gray-300"></div>
                                    <!-- Dropdown -->
                                    <div class="hs-dropdown relative my-3 flex justify-center items-center">
                                        <!-- Dropdown Button -->
                                        <button id="hs-dropdown-with-icons-{{ $theme->id }}" type="button"
                                            class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-gray-800 text-white hover:bg-black focus:outline-none"
                                            aria-haspopup="menu" aria-expanded="false">
                                            <span class="ml-2">Actions</span>
                                            <svg class="hs-dropdown-open:rotate-180 size-4"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </button>
                                        <!-- Dropdown Menu -->
                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-48 bg-white shadow-lg rounded-lg border divide-y divide-gray-200 z-10"
                                            role="menu" aria-orientation="vertical"
                                            aria-labelledby="hs-dropdown-with-icons-{{ $theme->id }}">
                                            <div class="p-1 space-y-0.5">
                                                <button aria-haspopup="dialog" aria-expanded="false"
                                                    aria-controls="hs-scale-animation-modal-edit-{{ $theme->id }}"
                                                    data-hs-overlay="#hs-scale-animation-modal-edit-{{ $theme->id }}"
                                                    class="w-full flex items-center gap-x-2 py-2 px-3 rounded-lg text-gray-800 hover:bg-gray-100">
                                                    <svg class="shrink-0 size-5 text-amber-500"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M12 20h9" />
                                                        <path
                                                            d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z" />
                                                    </svg>
                                                    Ubah
                                                </button>
                                                <button aria-haspopup="dialog" aria-expanded="false"
                                                    aria-controls="hs-scale-animation-modal-hapus-{{ $theme->id }}"
                                                    data-hs-overlay="#hs-scale-animation-modal-hapus-{{ $theme->id }}"
                                                    class="w-full flex items-center gap-x-2 py-2 px-3 rounded-lg text-gray-800 hover:bg-gray-100">
                                                    <svg class="shrink-0 size-5 text-red-500"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M3 6h18" />
                                                        <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                        <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6" />
                                                        <path d="M10 11v6" />
                                                        <path d="M14 11v6" />
                                                    </svg>
                                                    Hapus
                                                </button>
                                                <a href="{{ route('demo.theme', ['slug' => $theme->slug]) }}"
                                                    target="_blank"
                                                    class="w-full flex items-center gap-x-2 py-2 px-3 rounded-lg text-gray-800 hover:bg-gray-100">
                                                    <svg class="shrink-0 size-5 text-green-500"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                                        <circle cx="12" cy="12" r="3" />
                                                    </svg>
                                                    Demo
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Edit Modal -->
                            <div id="hs-scale-animation-modal-edit-{{ $theme->id }}"
                                class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                role="dialog" tabindex="-1"
                                aria-labelledby="hs-scale-animation-modal-label-edit-{{ $theme->id }}">
                                <div
                                    class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                    <div
                                        class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                        <div class="flex justify-between items-center py-3 px-4 border-b">
                                            <h3 id="hs-scale-animation-modal-label-edit-{{ $theme->id }}"
                                                class="font-bold text-gray-800">
                                                Ubah Tema
                                            </h3>
                                            <button type="button"
                                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-label="Close"
                                                data-hs-overlay="#hs-scale-animation-modal-edit-{{ $theme->id }}">
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
                                        <form action="{{ route('themes.update', $theme->id) }}" method="POST"
                                            class="p-4 md:p-5">
                                            @csrf
                                            @method('PUT')
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="id" class="block mb-2">
                                                        ID Tema
                                                    </label>
                                                    <input type="text" name="id" id="id"
                                                        class="custom-input" value="{{ $theme->id }}" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="name" class="block mb-2">
                                                        Nama Tema
                                                    </label>
                                                    <input type="text" name="name" id="name"
                                                        class="custom-input" value="{{ $theme->name }}" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="view_file" class="block mb-2">
                                                        Nama File
                                                    </label>
                                                    <input type="text" name="view_file" id="view_file"
                                                        class="custom-input" value="{{ $theme->view_file }}" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="thumbnail" class="block mb-2">
                                                        Thumbnail
                                                    </label>
                                                    <input type="text" name="thumbnail" id="thumbnail"
                                                        class="custom-input" value="{{ $theme->thumbnail }}" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>
                                                <div class="dropdown col-span-2">
                                                    <label for="tipe" class="block mb-2">
                                                        Tipe
                                                    </label>
                                                    <div id="dropdownButtonEdit-{{ $theme->id }}"
                                                        class="custom-input cursor-pointer relative">
                                                        <span>{{ $theme->tipe }}</span>
                                                        <i class="fas fa-chevron-down icon"></i>
                                                    </div>
                                                    <div id="dropdownMenuEdit-{{ $theme->id }}"
                                                        class="dropdown-menu" style="display: none;">
                                                        <div class="rounded-t-lg dropdown-item"
                                                            onclick="selectOption('Basic', 'dropdownButtonEdit-{{ $theme->id }}', 'tipe-{{ $theme->id }}')">
                                                            Basic
                                                        </div>
                                                        <div class="dropdown-item"
                                                            onclick="selectOption('Premium', 'dropdownButtonEdit-{{ $theme->id }}', 'tipe-{{ $theme->id }}')">
                                                            Premium
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="tipe"
                                                        id="tipe-{{ $theme->id }}" value="{{ $theme->tipe }}">
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="path" class="block mb-2">
                                                        Path Tema
                                                    </label>
                                                    <input type="text" name="path" id="path"
                                                        class="custom-input" value="{{ $theme->path }}" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')">
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                                <i class="fas fa-save mr-2"></i>
                                                <span class="mr-2">Simpan</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Hapus Modal -->
                            <div id="hs-scale-animation-modal-hapus-{{ $theme->id }}"
                                class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                role="dialog" tabindex="-1"
                                aria-labelledby="hs-scale-animation-modal-label-hapus-{{ $theme->id }}">
                                <div
                                    class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                    <div
                                        class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                        <div class="flex justify-between items-center py-3 px-4 border-b">
                                            <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                                Hapus Tema
                                            </h3>
                                            <button type="button"
                                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-label="Close"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-{{ $theme->id }}">
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
                                                Apakah Anda yakin ingin menghapus tema
                                                <strong class="font-bold">{{ $theme->name }}</strong>?
                                            </p>
                                            <div class="flex justify-end mt-4">
                                                <form action="{{ route('themes.destroy', $theme->id) }}"
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
                </div>
            </div>
            <!-- Tambah Modal -->
            <div id="hs-scale-animation-modal-tambah"
                class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label-tambah">
                <div
                    class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                    <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                        <div class="flex justify-between items-center py-3 px-4 border-b">
                            <h3 id="hs-scale-animation-modal-label-tambah" class="font-bold text-gray-800">
                                Tambah Tema
                            </h3>
                            <button type="button"
                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                aria-label="Close" data-hs-overlay="#hs-scale-animation-modal-tambah">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <form action="{{ route('themes.store') }}" method="POST" class="p-4 md:p-5">
                            @csrf
                            @method('POST')
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2">
                                        Nama Tema
                                    </label>
                                    <input type="text" name="name" id="name" class="custom-input"
                                        required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                        oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-span-2">
                                    <label for="view_file" class="block mb-2">
                                        Nama File
                                    </label>
                                    <input type="text" name="view_file" id="view_file" class="custom-input"
                                        required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                        oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-span-2">
                                    <label for="thumbnail" class="block mb-2">
                                        Thumbnail
                                    </label>
                                    <input type="text" name="thumbnail" id="thumbnail" class="custom-input"
                                        required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                        oninput="this.setCustomValidity('')">
                                </div>
                                <div class="dropdown col-span-2">
                                    <label for="tipe" class="block mb-2 text-sm font-medium text-gray-900">
                                        Tipe
                                    </label>
                                    <div id="dropdownButtonTambah" class="custom-input cursor-pointer relative">
                                        <span>. . .</span>
                                        <i class="fas fa-chevron-down icon"></i>
                                    </div>
                                    <div id="dropdownMenuTambah" class="dropdown-menu" style="display: none;">
                                        <div class="rounded-t-lg dropdown-item"
                                            onclick="selectOption('Basic', 'dropdownButtonTambah', 'tipe')">
                                            Basic
                                        </div>
                                        <div class="dropdown-item"
                                            onclick="selectOption('Premium', 'dropdownButtonTambah', 'tipe')">
                                            Premium
                                        </div>
                                    </div>
                                    <input type="hidden" name="tipe" id="tipe" value="">
                                </div>
                                <div class="col-span-2">
                                    <label for="path" class="block mb-2">
                                        Path Tema
                                    </label>
                                    <input type="text" name="path" id="path" class="custom-input"
                                        placeholder="tema/(nama tema)" required
                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                        oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <button type="submit"
                                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                                <i class="fas fa-save mr-2"></i>
                                <span class="mr-2">Simpan</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
