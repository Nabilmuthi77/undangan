@if ($isPremium)
    <div id="kado-digital" class="py-10 px-5 mx-auto lg:px-8 lg:py-16 bg-white rounded-lg shadow-lg mt-10 max-w-3xl">
        <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
            Kado Digital
        </h2>
        <div class="relative overflow-x-auto overflow-y-auto shadow-lg mx-auto max-h-80">
            <table class="text-sm text-left rtl:text-right text-gray-500 w-full border">
                <thead class="text-nowrap text-white bg-gray-800">
                    <tr>
                        <th scope="col" class="px-6 py-4">Penerima</th>
                        <th scope="col" class="px-6 py-4">Nama Bank</th>
                        <th scope="col" class="px-6 py-4">Nomor Rekening</th>
                        <th scope="col" class="px-6 py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if ($kadodigital->isEmpty())
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                Tidak ada kado digital yang tersedia
                            </td>
                        </tr>
                    @else
                        @foreach ($kadodigital as $kd)
                            <tr class="bg-white border-b text-nowrap">
                                <td class="px-6 py-4">{{ $kd->penerima }}</td>
                                <td class="px-6 py-4">{{ $kd->nama_bank }}</td>
                                <td class="px-6 py-4">{{ $kd->no_rekening }}</td>
                                <td class="px-6 py-4">
                                    <button aria-haspopup="dialog" aria-expanded="false"
                                        aria-controls="hs-scale-animation-modal-edit-kado-digital-{{ $kd->id }}"
                                        data-hs-overlay="#hs-scale-animation-modal-edit-kado-digital-{{ $kd->id }}"
                                        class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-amber-400 focus:ring-offset-2 transition ease-in-out duration-150">
                                        <i class="fas fa-edit mr-1"></i>
                                        <span>Ubah</span>
                                    </button>
                                    <button aria-haspopup="dialog" aria-expanded="false"
                                        aria-controls="hs-scale-animation-modal-hapus-kado-digital-{{ $kd->id }}"
                                        data-hs-overlay="#hs-scale-animation-modal-hapus-kado-digital-{{ $kd->id }}"
                                        class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        <i class="fas fa-trash-alt mr-1"></i>
                                        <span>Hapus</span>
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal Ubah Kado Digital -->
                            <div id="hs-scale-animation-modal-edit-kado-digital-{{ $kd->id }}"
                                class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                role="dialog" tabindex="-1"
                                aria-labelledby="hs-scale-animation-modal-label-edit-kado-digital-{{ $kd->id }}">
                                <div
                                    class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                    <div
                                        class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                        <div class="flex justify-between items-center py-3 px-4 border-b">
                                            <h3 id="hs-scale-animation-modal-label-edit-kado-digital-{{ $kd->id }}"
                                                class="font-bold text-gray-800">
                                                Ubah Kado Digital
                                            </h3>
                                            <button type="button"
                                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-label="Close"
                                                data-hs-overlay="#hs-scale-animation-modal-edit-kado-digital-{{ $kd->id }}">
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
                                            <form action="{{ route('user.kadodigital.update', $kd->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-6">
                                                    <label for="penerima"
                                                        class="block mb-2 text-sm font-medium text-gray-900">
                                                        Penerima
                                                    </label>
                                                    <input type="text" id="penerima" name="penerima"
                                                        class="custom-input" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')"
                                                        value="{{ $kd->penerima }}">
                                                </div>
                                                <div class="mb-6">
                                                    <label for="nama_bank"
                                                        class="block mb-2 text-sm font-medium text-gray-900">
                                                        Nama Bank
                                                    </label>
                                                    <input type="text" id="nama_bank" name="nama_bank"
                                                        class="custom-input" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')"
                                                        value="{{ $kd->nama_bank }}">
                                                </div>
                                                <div class="mb-6">
                                                    <label for="no_rekening"
                                                        class="block mb-2 text-sm font-medium text-gray-900">
                                                        Nomor Rekening
                                                    </label>
                                                    <input type="text" id="no_rekening" name="no_rekening"
                                                        class="custom-input" required
                                                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                        oninput="this.setCustomValidity('')"
                                                        value="{{ $kd->no_rekening }}">
                                                </div>
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
                            <!-- Modal Hapus Kado Digital -->
                            <div id="hs-scale-animation-modal-hapus-kado-digital-{{ $kd->id }}"
                                class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                role="dialog" tabindex="-1"
                                aria-labelledby="hs-scale-animation-modal-label-hapus-kado-digital-{{ $kd->id }}">
                                <div
                                    class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                    <div
                                        class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                        <div class="flex justify-between items-center py-3 px-4 border-b">
                                            <h3 id="hs-scale-animation-modal-label-hapus-kado-digital-{{ $kd->id }}"
                                                class="font-bold text-gray-800">
                                                Hapus Kado Digital
                                            </h3>
                                            <button type="button"
                                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-label="Close"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-kado-digital-{{ $kd->id }}">
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
                                            <div class="p-4">
                                                <p>
                                                    Apakah Anda yakin ingin menghapus kado digital
                                                    <strong>{{ $kd->penerima }}</strong>?
                                                </p>
                                            </div>
                                            <div class="flex justify-end mt-4">
                                                <form action="{{ route('user.kadodigital.destroy', $kd->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-red-500 hover:bg-red-600 text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
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
            @if ($kadodigital->hasPages())
                <div class="p-3">
                    {{ $kadodigital->appends(request()->except('kadodigital_page'))->fragment('kado-digital')->links() }}
                </div>
            @endif
        </div>
        <!-- Tambah Kado Digital -->
        <h2 class="mt-20 text-xl text-center font-semibold text-gray-900">
            Tambah Kado Digital
        </h2>
        <hr class="my-5 mx-auto max-w-3xl border-t border-gray-800">
        <form action="{{ route('user.kadodigital.store', $invitation->id) }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="penerima" class="block mb-2 text-sm font-medium text-gray-900">
                    Penerima
                </label>
                <input type="text" id="penerima" name="penerima" class="custom-input" required
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
            </div>
            <div class="mb-6">
                <label for="nama_bank" class="block mb-2 text-sm font-medium text-gray-900">
                    Nama Bank
                </label>
                <input type="text" id="nama_bank" name="nama_bank" class="custom-input" required
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
            </div>
            <div class="mb-6">
                <label for="no_rekening" class="block mb-2 text-sm font-medium text-gray-900">
                    Nomor Rekening
                </label>
                <input type="text" id="no_rekening" name="no_rekening" class="custom-input" required
                    oninvalid="this.setCustomValidity('Kolom ini harus diisi')" oninput="this.setCustomValidity('')">
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
@endif
