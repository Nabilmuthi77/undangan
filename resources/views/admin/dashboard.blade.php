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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div class="bg-gray-800 text-white rounded-lg p-6 shadow-lg relative overflow-hidden">
                    <h3 class="text-xl font-bold mb-5 relative z-10">Undangan Dibuat</h3>
                    <p class="text-lg relative z-10">{{ $invitationcount }}</p>
                    <i
                        class="fas fa-envelope absolute inset-0 m-auto opacity-10 text-6xl flex items-center justify-end right-5"></i>
                </div>
                <div class="bg-gray-800 text-white rounded-lg p-6 shadow-lg relative overflow-hidden">
                    <h3 class="text-xl font-bold mb-5 relative z-10">Pengguna</h3>
                    <p class="text-lg relative z-10">{{ $usercount }}</p>
                    <i
                        class="fas fa-user-group absolute inset-0 m-auto opacity-10 text-6xl flex items-center justify-end right-5"></i>
                </div>
            </div>
            <br>
            <hr class="border-t border-gray-800">
            <!-- Pengguna -->
            <div id="pengguna" class="bg-white p-5 mt-10 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold">Data Pengguna</h2>
                @if ($noUserResults)
                    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 my-4" role="alert">
                        <p class="font-bold">Tidak ada hasil</p>
                        <p>Tidak ada pengguna yang cocok dengan pencarian "{{ request('query-pengguna') }}"</p>
                    </div>
                @endif
                <form action="{{ route('admin.dashboard') }}" method="GET" class="mb-4 mt-6" id="searchFormPengguna"
                    onsubmit="return setTargetHash('query-pengguna', 'pengguna', 'searchFormPengguna')">
                    <div class="mt-5 flex items-center mx-auto max-w-screen-sm">
                        <div class="relative w-full">
                            <label for="query-pengguna" class="hidden mb-2 text-sm font-medium text-black">Cari</label>
                            <input class="custom-input" style="border-color: #1f2937; border-radius: 0.5rem 0 0 0.5rem;"
                                placeholder="Cari Pengguna" id="query-pengguna" name="query-pengguna"
                                autocomplete="off">
                        </div>
                        <button type="submit"
                            class="py-3 px-5 text-sm font-medium text-white bg-gray-800 rounded-r-lg border border-gray-800 hover:bg-black">
                            Cari
                        </button>
                    </div>
                </form>
                <div class="relative overflow-x-auto overflow-y-auto mx-auto mt-5">
                    <table class="text-sm text-left rtl:text-right text-gray-500 w-full border">
                        <thead class="text-white bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4">Username</th>
                                <th scope="col" class="px-6 py-4">Tipe Akun</th>
                                <th scope="col" class="px-6 py-4">Tanggal Bergabung</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @if ($users->isEmpty())
                                <tr>
                                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                        Tidak ada pengguna yang tersedia
                                    </td>
                                </tr>
                            @else
                                @foreach ($users as $user)
                                    <tr class="bg-white border-b text-nowrap">
                                        <td class="px-6 py-4">{{ $user->username }}</td>
                                        <td class="px-6 py-4">{{ $user->tipe_akun }}</td>
                                        <td class="px-6 py-4">{{ $user->created_at->format('d/m/Y') }}</td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-edit-user-{{ $user->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-edit-user-{{ $user->id }}"
                                                class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150">
                                                <i class="fas fa-edit mr-1"></i><span>Ubah</span>
                                            </button>
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-hapus-user-{{ $user->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-user-{{ $user->id }}"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150">
                                                <i class="fas fa-trash-alt mr-1"></i><span>Hapus</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Ubah User -->
                                    <div id="hs-scale-animation-modal-edit-user-{{ $user->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-edit-user-{{ $user->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label-edit-user-{{ $user->id }}"
                                                        class="font-bold text-gray-800">
                                                        Ubah Data Pengguna
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-edit-user-{{ $user->id }}">
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
                                                <form action="{{ route('admin.update.user', $user->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="p-4">
                                                        <label for="username_{{ $user->username }}"
                                                            class="block mb-2">
                                                            Username
                                                        </label>
                                                        <input type="text" id="username_{{ $user->username }}"
                                                            name="username" class="custom-input"
                                                            value="{{ $user->username }}"
                                                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                            oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="p-4">
                                                        <label for="tipe_akun_{{ $user->id }}"
                                                            class="block mb-2">Tipe Akun</label>
                                                        <input type="text" id="tipe_akun_{{ $user->id }}"
                                                            name="tipe_akun" class="custom-input"
                                                            value="{{ old('tipe_akun', $user->tipe_akun) }}" required
                                                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                            oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="p-4">
                                                        <label for="password_{{ $user->password }}"
                                                            class="block mb-2">
                                                            Password
                                                        </label>
                                                        <input type="password" id="password_{{ $user->password }}"
                                                            name="password" class="custom-input" value=""
                                                            oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                                                            oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="flex justify-end p-4 border-t">
                                                        <button type="submit"
                                                            class="bg-gray-800 hover:bg-black text-white font-bold py-2 px-4 rounded">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus User -->
                                    <div id="hs-scale-animation-modal-hapus-user-{{ $user->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-hapus-user-{{ $user->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label"
                                                        class="font-bold text-gray-800">
                                                        Hapus Pengguna
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-hapus-user-{{ $user->id }}">
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
                                                            Apakah Anda yakin ingin menghapus user
                                                            <strong>{{ $user->username }}</strong>?
                                                        </p>
                                                    </div>
                                                    <div class="flex justify-end mt-4">
                                                        <form action="{{ route('admin.user.delete', $user->id) }}"
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
                    @if ($users->hasPages())
                        <div class="p-3">
                            {{ $users->appends(request()->query())->fragment('pengguna')->onEachSide(0)->links() }}
                        </div>
                    @endif
                </div>
            </div>
            <br>
            <!-- Undangan -->
            <div id="undangan" class="bg-white p-5 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold">Data Undangan</h2>
                @if ($noInvitationResults)
                    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 my-4" role="alert">
                        <p class="font-bold">Tidak ada hasil</p>
                        <p>Tidak ada undangan yang cocok dengan pencarian "{{ request('query-undangan') }}"</p>
                    </div>
                @endif
                <form action="{{ route('admin.dashboard') }}" method="GET" class="mb-4 mt-6"
                    id="searchFormUndangan"
                    onsubmit="return setTargetHash('query-undangan', 'undangan', 'searchFormUndangan')">
                    <div class="mt-5 flex items-center mx-auto max-w-screen-sm">
                        <div class="relative w-full">
                            <label for="query-undangan"
                                class="hidden mb-2 text-sm font-medium text-black">Cari</label>
                            <input class="custom-input"
                                style="border-color: #1f2937; border-radius: 0.5rem 0 0 0.5rem;"
                                placeholder="Cari Undangan" id="query-undangan" name="query-undangan"
                                autocomplete="off">
                        </div>
                        <button type="submit"
                            class="py-3 px-5 text-sm font-medium text-white bg-gray-800 rounded-r-lg border border-gray-800 hover:bg-black">
                            Cari
                        </button>
                    </div>
                </form>
                <div class="relative overflow-x-auto overflow-y-auto mx-auto mt-5">
                    <table class="text-sm text-left rtl:text-right text-gray-500 w-full border">
                        <thead class="text-white bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4">Username</th>
                                <th scope="col" class="px-6 py-4">Tema</th>
                                <th scope="col" class="px-6 py-4">Judul Undangan</th>
                                <th scope="col" class="px-6 py-4">Tanggal Dibuat</th>
                                <th scope="col" class="px-6 py-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @if ($invitations->isEmpty())
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                        Tidak ada undangan yang tersedia
                                    </td>
                                </tr>
                            @else
                                @foreach ($invitations as $invitation)
                                    <tr class="bg-white border-b text-nowrap">
                                        <td class="px-6 py-4">{{ $invitation->user->username }}</td>
                                        <td class="px-6 py-4">{{ $invitation->theme->name }}</td>
                                        <td class="px-6 py-4">{{ $invitation->title }}</td>
                                        <td class="px-6 py-4">{{ $invitation->created_at->format('d/m/Y') }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <button aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-scale-animation-modal-hapus-undangan-{{ $invitation->id }}"
                                                data-hs-overlay="#hs-scale-animation-modal-hapus-undangan-{{ $invitation->id }}"
                                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-150">
                                                <i class="fas fa-trash-alt mr-1"></i><span>Hapus</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Hapus Undangan -->
                                    <div id="hs-scale-animation-modal-hapus-undangan-{{ $invitation->id }}"
                                        class="hs-overlay hs-overlay-backdrop-open:bg-black/80 hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                        role="dialog" tabindex="-1"
                                        aria-labelledby="hs-scale-animation-modal-label-hapus-undangan-{{ $invitation->id }}">
                                        <div
                                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                            <div
                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b">
                                                    <h3 id="hs-scale-animation-modal-label"
                                                        class="font-bold text-gray-800">
                                                        Hapus Undangan
                                                    </h3>
                                                    <button type="button"
                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                                                        aria-label="Close"
                                                        data-hs-overlay="#hs-scale-animation-modal-hapus-undangan-{{ $invitation->id }}">
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
                                                            Apakah Anda yakin ingin menghapus undangan
                                                            <strong>{{ $invitation->title }}</strong>?
                                                        </p>
                                                    </div>
                                                    <div class="flex justify-end mt-4">
                                                        <form
                                                            action="{{ route('admin.deleteInvitation', $invitation->id) }}"
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
                    @if ($invitations->hasPages())
                        <div class="p-3">
                            {{ $invitations->appends(request()->query())->fragment('undangan')->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
