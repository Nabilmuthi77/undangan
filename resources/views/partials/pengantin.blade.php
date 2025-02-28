<div id="pengantin" class="py-10 px-5 mx-auto lg:px-8 lg:py-16 bg-white rounded-lg shadow-lg">
    <h2 class="mb-10 text-2xl text-center font-bold font-croissant text-gray-900">
        Data Pengantin
    </h2>
    <form action="{{ route('user.mempelai.store', $invitation) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2">
            <!-- Pengantin Pria -->
            <div class="flex flex-col items-center">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">
                    Pengantin Pria
                </h3>
                <img src="{{ asset($mempelai->foto_pria ?? '\tema\foto\default.png') }}" alt="Foto Pengantin Pria"
                    class="w-64 h-72 rounded-lg mt-2 mb-10">
                <br>
                <div class="w-full mb-4">
                    <label for="foto_pria" class="block mb-2 text-sm font-medium text-gray-900">
                        Upload Foto
                    </label>
                    <input type="file" name="foto_pria" id="foto_pria" accept="image/*" class="custom-input">
                </div>
                <div class="w-full mb-4">
                    <label for="panggilan_pria" class="block mb-2 text-sm font-medium text-gray-900">
                        Nama Panggilan
                    </label>
                    <input type="text" name="panggilan_pria" id="panggilan_pria"
                        value="{{ old('panggilan_pria', $mempelai->panggilan_pria ?? '') }}" class="custom-input"
                        required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')">
                </div>
                <div class="w-full mb-4">
                    <label for="nama_pria" class="block mb-2 text-sm font-medium text-gray-900">
                        Nama Lengkap
                    </label>
                    <input type="text" name="nama_pria" id="nama_pria"
                        value="{{ old('nama_pria', $mempelai->nama_pria ?? '') }}" class="custom-input" required
                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')">
                </div>
                <div class="w-full mb-4">
                    <label for="ayah_pria" class="block mb-2 text-sm font-medium text-gray-900">
                        Nama Ayah
                    </label>
                    <input type="text" name="ayah_pria" id="ayah_pria"
                        value="{{ old('ayah_pria', $mempelai->ayah_pria ?? '') }}" class="custom-input" required
                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')">
                </div>
                <div class="w-full mb-4">
                    <label for="ibu_pria" class="block mb-2 text-sm font-medium text-gray-900">
                        Nama Ibu
                    </label>
                    <input type="text" name="ibu_pria" id="ibu_pria"
                        value="{{ old('ibu_pria', $mempelai->ibu_pria ?? '') }}" class="custom-input" required
                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')">
                </div>
                <div class="w-full mb-4">
                    <label for="anak_ke_pria" class="block mb-2 text-sm font-medium text-gray-900">
                        Anak Ke
                    </label>
                    <input type="text" name="anak_ke_pria" id="anak_ke_pria"
                        value="{{ old('anak_ke_pria', $mempelai->anak_ke_pria ?? '') }}" class="custom-input" required
                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')">
                </div>
                <div class="w-full mb-4">
                    <label for="instagram_link_pria" class="block mb-2 text-sm font-medium text-gray-900">
                        Link Instagram (Opsional)
                    </label>
                    <input type="text" name="instagram_link_pria" id="instagram_link_pria"
                        value="{{ old('instagram_link_pria', $mempelai->instagram_link_pria ?? '') }}"
                        class="custom-input">
                </div>
            </div>
            <!-- Pengantin Wanita -->
            <div class="flex flex-col items-center">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">
                    Pengantin Wanita
                </h3>
                <img src="{{ asset($mempelai->foto_wanita ?? '\tema\foto\default.png') }}" alt="Foto Pengantin Wanita"
                    class="w-64 h-72 rounded-lg mt-2 mb-10">
                <br>
                <div class="w-full mb-4">
                    <label for="foto_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                        Upload Foto
                    </label>
                    <input type="file" name="foto_wanita" id="foto_wanita" accept="image/*" class="custom-input">
                </div>
                <div class="w-full mb-4">
                    <label for="panggilan_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                        Nama Panggilan
                    </label>
                    <input type="text" name="panggilan_wanita" id="panggilan_wanita"
                        value="{{ old('panggilan_wanita', $mempelai->panggilan_wanita ?? '') }}" class="custom-input"
                        required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')">
                </div>
                <div class="w-full mb-4">
                    <label for="nama_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                        Nama Lengkap
                    </label>
                    <input type="text" name="nama_wanita" id="nama_wanita"
                        value="{{ old('nama_wanita', $mempelai->nama_wanita ?? '') }}" class="custom-input" required
                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')">
                </div>
                <div class="w-full mb-4">
                    <label for="ayah_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                        Nama Ayah
                    </label>
                    <input type="text" name="ayah_wanita" id="ayah_wanita"
                        value="{{ old('ayah_wanita', $mempelai->ayah_wanita ?? '') }}" class="custom-input" required
                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')">
                </div>
                <div class="w-full mb-4">
                    <label for="ibu_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                        Nama Ibu
                    </label>
                    <input type="text" name="ibu_wanita" id="ibu_wanita"
                        value="{{ old('ibu_wanita', $mempelai->ibu_wanita ?? '') }}" class="custom-input" required
                        oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')">
                </div>
                <div class="w-full mb-4">
                    <label for="anak_ke_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                        Anak Ke
                    </label>
                    <input type="text" name="anak_ke_wanita" id="anak_ke_wanita"
                        value="{{ old('anak_ke_wanita', $mempelai->anak_ke_wanita ?? '') }}" class="custom-input"
                        required oninvalid="this.setCustomValidity('Kolom ini harus diisi')"
                        oninput="this.setCustomValidity('')">
                </div>
                <div class="w-full mb-4">
                    <label for="instagram_link_wanita" class="block mb-2 text-sm font-medium text-gray-900">
                        Link Instagram (Opsional)
                    </label>
                    <input type="text" name="instagram_link_wanita" id="instagram_link_wanita"
                        value="{{ old('instagram_link_wanita', $mempelai->instagram_link_wanita ?? '') }}"
                        class="custom-input">
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-2">
            <button type="submit"
                class="bg-gray-800 hover:bg-black text-white shadow-lg font-bold py-2 px-6 rounded focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition ease-in-out duration-150 flex items-center">
                <i class="fas fa-save mr-2"></i>
                <span class="mr-2">Simpan</span>
            </button>
        </div>
    </form>
</div>
