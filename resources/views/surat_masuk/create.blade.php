<x-app-layout>
    <div class="py-6">
        <div class="max-w-4xl mx-auto px-4">

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">
                    ➕ Tambah Surat Masuk
                </h2>

                <a href="{{ route('surat-masuk.index') }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    ← Kembali
                </a>
            </div>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    <ul class="list-disc ml-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white shadow rounded p-6">

                <form action="{{ route('surat-masuk.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Nomor Surat
                        </label>

                        <input type="text"
                               name="nomor_surat"
                               value="{{ old('nomor_surat') }}"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Asal Surat
                        </label>

                        <input type="text"
                               name="asal_surat"
                               value="{{ old('asal_surat') }}"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Tanggal Surat
                        </label>

                        <input type="date"
                               name="tanggal_surat"
                               value="{{ old('tanggal_surat') }}"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Tanggal Diterima
                        </label>

                        <input type="date"
                               name="tanggal_diterima"
                               value="{{ old('tanggal_diterima') }}"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Perihal
                        </label>

                        <textarea name="perihal"
                                  rows="4"
                                  class="w-full border rounded px-3 py-2"
                                  required>{{ old('perihal') }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block font-semibold mb-2">
                            Upload File Surat (PDF)
                        </label>

                        <input type="file"
                               name="file_surat"
                               accept=".pdf"
                               class="w-full border rounded px-3 py-2">
                    </div>

                    <button type="submit"
                            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                        💾 Simpan Surat
                    </button>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>