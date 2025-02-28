<x-app-layout>
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
        <!-- Undangan -->
        <div class="w-full">
            <h1 class="text-3xl font-bold mb-10 text-center font-croissant">
                Undangan Anda
            </h1>
            @forelse ($invitations as $invitation)
                <div class="bg-white my-5 p-6 rounded-lg shadow-lg border">
                    <h2 class="font-semibold text-lg">{{ $invitation->title }}</h2>
                    <p class="text-gray-600 mt-5">Tema : <span class="font-medium">{{ $invitation->theme->name }}</span>
                    </p>
                    <hr class="my-2">
                    <div class="mt-4 flex gap-3">
                        <button aria-haspopup="dialog" aria-expanded="false"
                            aria-controls="hs-scale-animation-modal-kirim-{{ $invitation->id }}"
                            data-hs-overlay="#hs-scale-animation-modal-kirim-{{ $invitation->id }}"
                            class="bg-green-500 hover:bg-green-600 text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <i class="fas fa-paper-plane mr-1"></i>
                            <span class="mr-1">Kirim</span>
                        </button>
                        <a href="{{ route('user.invitation.edit', $invitation) }}"
                            class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150">
                            <i class="fas fa-cog mr-1"></i>
                            <span class="mr-1">Kelola</span>
                        </a>
                        <button aria-haspopup="dialog" aria-expanded="false"
                            aria-controls="hs-scale-animation-modal-hapus-undangan-{{ $invitation->id }}"
                            data-hs-overlay="#hs-scale-animation-modal-hapus-undangan-{{ $invitation->id }}"
                            class="bg-red-500 hover:bg-red-600 text-white shadow-lg font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <i class="fas fa-trash mr-1"></i>
                            <span class="mr-1">Hapus</span>
                        </button>
                    </div>
                </div>
                <!-- Modal Kirim Undangan -->
                <div id="hs-scale-animation-modal-kirim-{{ $invitation->id }}"
                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    role="dialog" tabindex="-1"
                    aria-labelledby="hs-scale-animation-modal-label-kirim-{{ $invitation->id }}">
                    <div
                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                <h3 id="hs-scale-animation-modal-label-kirim-{{ $invitation->id }}"
                                    class="font-bold text-gray-800">
                                    Daftar Tamu
                                </h3>
                                <button type="button"
                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-label="Close"
                                    data-hs-overlay="#hs-scale-animation-modal-kirim-{{ $invitation->id }}">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <table class="text-sm text-left rtl:text-right text-gray-500 m-4">
                                <tbody>
                                    @forelse ($invitation->tamu as $guest)
                                        @php
                                            $hashedUserId = md5($invitation->user_id);
                                        @endphp
                                        <tr class="bg-white border-b text-nowrap">
                                            <td class="px-6 py-4">{{ $guest->nama_tamu }}</td>
                                            <td class="px-6 py-4 flex justify-end gap-2">
                                                <button id="copyButton_{{ $guest->id }}"
                                                    onclick="copyLink('{{ route('invitation.show.guest', ['hashedUserId' => $hashedUserId, 'slug' => $invitation->slug, 'guestName' => Str::slug($guest->nama_tamu)]) }}', 'copyButton_{{ $guest->id }}')"
                                                    class="bg-gray-800 hover:bg-black text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150 flex items-center gap-2">
                                                    <i class="fas fa-copy"></i>
                                                    <span>Copy Link</span>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="px-6 py-4 text-center text-gray-500">
                                                Tidak ada tamu yang terdaftar
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Modal Hapus Undangan -->
                <div id="hs-scale-animation-modal-hapus-undangan-{{ $invitation->id }}"
                    class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                    role="dialog" tabindex="-1"
                    aria-labelledby="hs-scale-animation-modal-label-hapus-undangan-{{ $invitation->id }}">
                    <div
                        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b">
                                <h3 id="hs-scale-animation-modal-label-hapus-undangan-{{ $invitation->id }}"
                                    class="font-bold text-gray-800">
                                    Hapus Kado Digital
                                </h3>
                                <button type="button"
                                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-label="Close"
                                    data-hs-overlay="#hs-scale-animation-modal-hapus-undangan-{{ $invitation->id }}">
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
                                <div class="p-4">
                                    <p>Apakah Anda yakin ingin menghapus kado digital
                                        <strong>{{ $invitation->title }}</strong>?
                                    </p>
                                </div>
                                <div class="flex justify-end mt-4">
                                    <form action="{{ route('user.invitation.destroy', $invitation) }}" method="POST"
                                        class="inline">
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
            @empty
                <p class="text-center text-gray-500">Anda belum membuat undangan</p>
                <div class="flex items-center justify-center mt-10">
                    <a href="{{ route('home') }}#tema"
                        class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-3 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150">
                        <i class="fas fa-envelope mr-2"></i>
                        <span class="mr-1">Buat Undangan</span>
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>
