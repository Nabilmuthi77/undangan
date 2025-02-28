<div id="musik" class="py-10 px-5 mx-auto lg:px-8 lg:py-16 bg-white rounded-lg shadow-lg mt-10 max-w-3xl">
    <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
        Musik
    </h2>
    <!-- Form Tambah Musik -->
    <form action="{{ route('user.music.store', $invitation->id) }}" method="POST">
        @csrf
        <div class="grid gap-4 mb-6">
            <div>
                <label for="music_link" class="block mb-2 text-sm font-medium text-gray-900">
                    Link Musik (Soundcloud)
                </label>
                <input type="url" name="music_link" id="music_link" class="custom-input"
                    value="{{ old('music', $music->file_path ?? '') }}" required
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
                <button type="button" aria-haspopup="dialog" aria-expanded="false"
                    aria-controls="hs-scale-animation-modal-musik-tutorial"
                    data-hs-overlay="#hs-scale-animation-modal-musik-tutorial"
                    class="mt-2 text-sm py-1 px-4 rounded text-white bg-gray-800 shadow-lg">
                    Tutorial
                </button>
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <button type="submit"
                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                <i class="fas fa-save mr-2"></i> <span class="mr-2">Simpan</span>
            </button>
        </div>
    </form>
    <!-- Modal Tutorial -->
    <div id="hs-scale-animation-modal-musik-tutorial"
        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label-musik-tutorial">
        <div
            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b">
                    <h3 id="hs-scale-animation-modal-label-musik-tutorial" class="font-bold text-gray-800">
                        Tutorial Mendapatkan Link Musik dari SoundCloud
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#hs-scale-animation-modal-musik-tutorial">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <p class="text-gray-700">
                        Ikuti langkah-langkah berikut untuk mendapatkan link musik biasa dari SoundCloud :
                    </p>
                    <ol class="list-decimal list-inside mt-4 space-y-2 text-gray-600">
                        <li>Buka halaman lagu atau playlist di <strong>SoundCloud</strong> yang ingin Anda bagikan.</li>
                        <li>Klik tombol <strong>"Bagikan" (Share)</strong> di bawah track atau playlist.</li>
                        <li>Pada tab pertama (Bagikan), salin URL yang muncul di kolom bagikan.</li>
                    </ol>
                    <div class="mt-3 p-3 bg-gray-100 text-sm rounded-md">
                        <code>https://soundcloud.com/artist-name/track-name</code>
                    </div>
                    <p class="text-gray-600 mt-3">
                        Gunakan URL tersebut di form untuk menambahkan musik ke udangan Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Button Hapus Musik -->
    <div class="flex justify-center mt-2">
        @if (isset($music))
            <button aria-haspopup="dialog" aria-expanded="false"
                aria-controls="hs-scale-animation-modal-hapus-music-{{ $music->id }}"
                data-hs-overlay="#hs-scale-animation-modal-hapus-music-{{ $music->id }}"
                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                <i class="fas fa-trash-alt mr-2"></i>
                <span class="mr-2">Hapus</span>
            </button>
            <!-- Modal Hapus Musik -->
            <div id="hs-scale-animation-modal-hapus-music-{{ $music->id }}"
                class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                role="dialog" tabindex="-1"
                aria-labelledby="hs-scale-animation-modal-label-hapus-music-{{ $music->id }}">
                <div
                    class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                    <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                        <div class="flex justify-between items-center py-3 px-4 border-b">
                            <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                Hapus Musik
                            </h3>
                            <button type="button"
                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                aria-label="Close"
                                data-hs-overlay="#hs-scale-animation-modal-hapus-music-{{ $music->id }}">
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
                            <p>Apakah Anda yakin ingin menghapus link musik ini?</p>
                            <div class="flex justify-end mt-4">
                                <form action="{{ route('user.music.destroy', $music->id) }}" method="POST">
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
</div>
