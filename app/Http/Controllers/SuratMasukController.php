<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuks = SuratMasuk::latest()->get();

        return view('surat_masuk.index', compact('suratMasuks'));
    }

    public function create()
    {
        return view('surat_masuk.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required',
            'asal_surat' => 'required',
            'tanggal_surat' => 'required',
            'tanggal_diterima' => 'required',
            'perihal' => 'required',
            'file_surat' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('file_surat')) {
            $validated['file_surat'] = $request
                ->file('file_surat')
                ->store('surat_masuk', 'public');
        }

        SuratMasuk::create($validated);

        return redirect()
            ->route('surat-masuk.index')
            ->with('success', 'Surat berhasil ditambahkan.');
    }

    public function show(SuratMasuk $suratMasuk)
    {
        //
    }

    public function edit(SuratMasuk $suratMasuk)
    {
        return view('surat_masuk.edit', compact('suratMasuk'));
    }

    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        //
    }

    public function destroy(SuratMasuk $suratMasuk)
    {
        $suratMasuk->delete();

        return redirect()
            ->route('surat-masuk.index')
            ->with('success', 'Surat berhasil dihapus.');
    }
}