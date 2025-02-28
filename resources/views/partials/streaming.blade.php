@if ($isPremium)
    <div id="streaming" class="py-10 px-5 mx-auto lg:px-8 lg:py-16 bg-white rounded-lg shadow-lg mt-10 max-w-3xl">
        <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
            Streaming
        </h2>
        <!-- Form Tambah Streaming -->
        <form action="{{ route('user.streaming.store', $invitation->id) }}" method="POST">
            @csrf
            <div class="grid gap-4 mb-6">
                <div>
                    <label for="link_streaming" class="block mb-2 text-sm font-medium text-gray-900">
                        Link Streaming
                    </label>
                    <input type="text" name="link_streaming" id="link_streaming" class="custom-input"
                        value="{{ old('link_streaming', $streaming->link_streaming ?? '') }}" required
                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')"="">
                </div>
            </div>
            <div class="flex justify-center mt-4">
                <button type="submit"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                    <i class="fas fa-save mr-2"></i>
                    <span class="mr-2">Simpan</span>
                </button>
            </div>
        </form>
        <!-- Button Hapus Streaming -->
        <div class="flex justify-center mt-2">
            @if (isset($streaming))
                <button aria-haspopup="dialog" aria-expanded="false"
                    aria-controls="hs-scale-animation-modal-hapus-streaming-{{ $streaming->id }}"
                    data-hs-overlay="#hs-scale-animation-modal-hapus-streaming-{{ $streaming->id }}"
                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    <i class="fas fa-trash-alt mr-2"></i>
                    <span class="mr-2">Hapus</span>
                </button>
                <!-- Modal Hapus Streaming -->
                <div id="hs-scale-animation-modal-hapus-streaming-{{ $streaming->id }}"
                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    role="dialog" tabindex="-1"
                    aria-labelledby="hs-scale-animation-modal-label-hapus-streaming-{{ $streaming->id }}">
                    <div
                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800">
                                    Hapus Streaming
                                </h3>
                                <button type="button"
                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-label="Close"
                                    data-hs-overlay="#hs-scale-animation-modal-hapus-streaming-{{ $streaming->id }}">
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
                                <p>Apakah Anda yakin ingin menghapus link streaming ini?</p>
                                <div class="flex justify-end mt-4">
                                    <form action="{{ route('user.streaming.destroy', $streaming->id) }}" method="POST">
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
@endif
