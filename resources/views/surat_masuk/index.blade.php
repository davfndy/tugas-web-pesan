<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4">

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">
                    📥 Data Surat Masuk
                </h2>

                <a href="{{ route('surat-masuk.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow inline-block">
                    + Tambah Surat
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow rounded overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3">No</th>
                            <th class="p-3">Nomor Surat</th>
                            <th class="p-3">Asal Surat</th>
                            <th class="p-3">Tanggal Surat</th>
                            <th class="p-3">Tanggal Diterima</th>
                            <th class="p-3">Perihal</th>
                            <th class="p-3">File</th>
                            <th class="p-3">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($suratMasuks as $surat)
                            <tr class="border-t">
                                <td class="p-3">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="p-3">
                                    {{ $surat->nomor_surat }}
                                </td>

                                <td class="p-3">
                                    {{ $surat->asal_surat }}
                                </td>

                                <td class="p-3">
                                    {{ $surat->tanggal_surat }}
                                </td>

                                <td class="p-3">
                                    {{ $surat->tanggal_diterima }}
                                </td>

                                <td class="p-3">
                                    {{ $surat->perihal }}
                                </td>

                                <td class="p-3">
                                    @if($surat->file_surat)
                                        <a href="{{ asset('storage/'.$surat->file_surat) }}"
                                           target="_blank"
                                           class="text-blue-600">
                                            Lihat PDF
                                        </a>
                                    @else
                                        -
                                    @endif
                                </td>

                                <td class="p-3 flex gap-2">

    <a href="{{ route('surat-masuk.edit', $surat->id) }}"
       class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
        Edit
    </a>

    <form action="{{ route('surat-masuk.destroy', $surat->id) }}"
          method="POST"
          onsubmit="return confirm('Yakin ingin menghapus?')">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
            Hapus
        </button>
    </form>

</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center p-6 text-gray-500">
                                    Belum ada data surat masuk.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>