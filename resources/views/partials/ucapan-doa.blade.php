@if ($isPremium)
    <div id="ucapan-doa" class="py-10 px-5 mx-auto lg:px-8 lg:py-16 bg-white rounded-lg shadow-lg mt-10 max-w-3xl">
        <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
            Ucapan & Doa
        </h2>
        <form action="{{ route('comments.toggleStatus', $invitation->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" id="comments_enabled" name="comments_enabled"
                        class="form-checkbox h-5 w-5 text-gray-800 focus:ring-0 border-2 border-gray-300 focus:border-gray-800"
                        value="1" {{ $invitation->comments_enabled ? 'checked' : '' }}>
                    <span class="ml-2 text-gray-700">Aktifkan Ucapan & Doa</span>
                </label>
            </div>
            <p class="mb-6 block text-sm font-medium text-red-500">
                Orang lain yang memiliki link undanganmu akan bisa berkomentar.
                Mohon dipertimbangkan, bisa saja orang tak diundang dapat berkomentar tidak baik.
            </p>
            <div class="flex justify-center mt-4">
                <button type="submit"
                    class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endif
