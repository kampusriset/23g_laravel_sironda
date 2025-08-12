<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Anggota::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan');
    }

   public function edit($id)
{
    $anggota = Anggota::findOrFail($id); // ambil data anggota sesuai ID
    return view('anggota.edit', compact('anggota'));
}


    public function update(Request $request, $id)
{
    $anggota = Anggota::findOrFail($id);
    $anggota->nama = $request->nama;
    $anggota->save();

    return redirect()->route('anggota.index')->with('success', 'Data berhasil diupdate');
}


    public function destroy($id)
{
    $anggota = Anggota::findOrFail($id);
    $anggota->delete();

    return redirect()->route('anggota.index')->with('success', 'Data berhasil dihapus');
}

}
