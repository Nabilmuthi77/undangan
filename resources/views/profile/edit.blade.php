<x-app-layout>
    <div class="mx-auto px-4 py-20">
        <h1 class="text-3xl font-bold mb-10 text-center font-croissant">Profile</h1>
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-6">
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
            <!-- Ubah Email -->
            <div class="p-8 md:p-4 bg-white shadow-lg rounded-lg">
                @include('profile.partials.update-profile-information-form')
            </div>
            <!-- Ubah Password -->
            <div class="p-8 md:p-4 bg-white shadow-lg rounded-lg">
                @include('profile.partials.update-password-form')
            </div>
        </div>
    </div>
</x-app-layout>
