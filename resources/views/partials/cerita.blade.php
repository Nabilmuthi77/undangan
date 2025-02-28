<div id="cerita" class="py-10 px-5 mx-auto lg:px-8 lg:py-16 bg-white rounded-lg shadow-lg mt-10 max-w-3xl">
    <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
        Cerita
    </h2>
    <div class="relative overflow-x-auto overflow-y-auto max-w-3xl shadow-lg mx-auto max-h-80">
        <table class="text-sm text-left rtl:text-right text-gray-500 w-full border">
            <thead class="text-nowrap text-white bg-gray-800">
                <tr>
                    <th scope="col" class="px-6 py-4">Judul Cerita</th>
                    <th scope="col" class="px-6 py-4">Isi Cerita</th>
                    <th scope="col" class="px-6 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @if ($cerita->isEmpty())
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">
                            Tidak ada cerita yang tersedia
                        </td>
                    </tr>
                @else
                    @foreach ($cerita as $data)
                        <tr class="bg-white border-b text-nowrap">
                            <td class="px-6 py-4">
                                {{ $data->judul_cerita }}
                            </td>
                            <td class="px-6 py-4">
                                <button aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-scale-animation-modal-detail-{{ $data->id }}"
                                    data-hs-overlay="#hs-scale-animation-modal-detail-{{ $data->id }}"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    <i class="fa-solid fa-book-open mr-1"></i>
                                    <span>Lihat</span>
                                </button>
                            </td>
                            <td class="px-6 py-4">
                                <button aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-scale-animation-modal-edit-cerita{{ $data->id }}"
                                    data-hs-overlay="#hs-scale-animation-modal-edit-cerita{{ $data->id }}"
                                    class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 transition ease-in-out duration-150">
                                    <i class="fas fa-edit mr-1"></i>
                                    <span>Ubah</span>
                                </button>
                                <button aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="hs-scale-animation-modal-hapus-cerita-{{ $data->id }}"
                                    data-hs-overlay="#hs-scale-animation-modal-hapus-cerita-{{ $data->id }}"
                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    <i class="fas fa-trash-alt mr-1"></i>
                                    <span>Hapus</span>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal Detail Cerita -->
                        <div id="hs-scale-animation-modal-detail-{{ $data->id }}"
                            class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                            role="dialog" tabindex="-1"
                            aria-labelledby="hs-scale-animation-modal-label-detail-{{ $data->id }}">
                            <div
                                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                <div
                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                    <div class="flex justify-between items-center py-3 px-4 border-b">
                                        <h3 id="hs-scale-animation-modal-label-detail-{{ $data->id }}"
                                            class="font-bold text-gray-800">
                                            Isi Cerita
                                        </h3>
                                        <button type="button"
                                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-label="Close"
                                            data-hs-overlay="#hs-scale-animation-modal-detail-{{ $data->id }}">
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
                                    <div class="p-4">
                                        <p>{{ $data->isi_cerita }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Ubah Cerita -->
                        <div id="hs-scale-animation-modal-edit-cerita{{ $data->id }}"
                            class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                            role="dialog" tabindex="-1"
                            aria-labelledby="hs-scale-animation-modal-label-edit-{{ $data->id }}">
                            <div
                                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                <div
                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                    <div class="flex justify-between items-center py-3 px-4 border-b">
                                        <h3 id="hs-scale-animation-modal-label-edit-cerita{{ $data->id }}"
                                            class="font-bold text-gray-800">
                                            Ubah Cerita
                                        </h3>
                                        <button type="button"
                                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-label="Close"
                                            data-hs-overlay="#hs-scale-animation-modal-edit-cerita{{ $data->id }}">
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
                                        <form action="{{ route('user.cerita.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="mb-4">
                                                <label for="edit_judul_cerita" class="block mb-2">Judul
                                                    Cerita</label>
                                                <input type="text" name="judul_cerita" id="edit_judul_cerita"
                                                    class="custom-input" value="{{ $data->judul_cerita }}" required
                                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                    oninput="this.setCustomValidity('')">
                                            </div>
                                            <div class="mb-4">
                                                <label for="edit_isi_cerita" class="block mb-2">Isi
                                                    Cerita</label>
                                                <input type="text" name="isi_cerita" id="edit_isi_cerita"
                                                    class="custom-input" value="{{ $data->isi_cerita }}" required
                                                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                    oninput="this.setCustomValidity('')">
                                            </div>
                                            <hr>
                                            <div class="flex justify-end mt-4">
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
                        <!-- Modal Hapus Cerita -->
                        <div id="hs-scale-animation-modal-hapus-cerita-{{ $data->id }}"
                            class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                            role="dialog" tabindex="-1"
                            aria-labelledby="hs-scale-animation-modal-label-hapus-cerita-{{ $data->id }}">
                            <div
                                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                <div
                                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                    <div class="flex justify-between items-center py-3 px-4 border-b">
                                        <h3 id="hs-scale-animation-modal-label-hapus-cerita-{{ $data->id }}"
                                            class="font-bold text-gray-800">
                                            Hapus Cerita
                                        </h3>
                                        <button type="button"
                                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                            aria-label="Close"
                                            data-hs-overlay="#hs-scale-animation-modal-hapus-cerita-{{ $data->id }}">
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
                                            Apakah Anda yakin ingin menghapus cerita
                                            <strong class="font-bold">{{ $data->judul_cerita }}</strong>?
                                        </p>
                                    </div>
                                    <div class="flex justify-end p-4 border-t">
                                        <form action="{{ route('user.cerita.destroy', $data->id) }}" method="POST">
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
                    @endforeach
                @endif
            </tbody>
        </table>
        @if ($cerita->hasPages())
            <div class="p-3">
                {{ $cerita->appends(request()->except('cerita_page'))->fragment('cerita')->links() }}
            </div>
        @endif
    </div>
    <!-- Tambah Cerita -->
    <h2 class="mt-20 text-xl text-center font-semibold text-gray-900">
        Tambah Cerita
    </h2>
    <hr class="my-5 mx-auto max-w-3xl border-t border-gray-800">
    <form action="{{ route('cerita.store', $invitation) }}" method="POST">
        @csrf
        <div class="mb-6">
            <label for="judul_cerita" class="block mb-2 text-sm font-medium text-gray-900">
                Judul Cerita
            </label>
            <input type="text" id="judul_cerita" name="judul_cerita" class="custom-input" required
                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
        </div>
        <div class="mb-6">
            <label for="isi_cerita" class="block mb-2 text-sm font-medium text-gray-900">
                Isi Cerita
            </label>
            <textarea id="isi_cerita" name="isi_cerita" class="custom-input h-32" required
                oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')"></textarea>
        </div>
        <div class="flex justify-center mt-4">
            <button type="submit"
                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                <i class="fas fa-save mr-2"></i>
                <span class="mr-2">Simpan</span>
            </button>
        </div>
    </form>
</div>
