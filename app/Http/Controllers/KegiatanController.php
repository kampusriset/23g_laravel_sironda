<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;


class KegiatanController extends Controller
{
    public function index()
{
    $kegiatan = Kegiatan::all();
    return view('kegiatan.index', compact('kegiatan'));
}
public function create()
    {
        return view('kegiatan.create');
    }

    //public function store(Request $request)
        //{
            //$request->validate([
                //'nama_kegiatan' => 'required',
                //'tanggal' => 'required|date'
            //]);

            //Kegiatan::create($request->all());

            //return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan');
       //}

public function store(Request $request)
{
    $request->validate([
        'nama_kegiatan' => 'required'
    ]);

    Kegiatan::create([
        'nama_kegiatan' => $request->nama_kegiatan,
        'deskripsi' => $request->deskripsi ?? '', // kosongkan kalau tidak diisi
        'tanggal' => $request->tanggal ?? now() // otomatis tanggal hari ini
    ]);

    return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan');
}


public function edit($id)
{
    $kegiatan = Kegiatan::findOrFail($id); // ambil data anggota sesuai ID
    return view('kegiatan.edit', compact('kegiatan'));
}


public function update(Request $request, $id)
{
    // Validasi supaya nama_kegiatan wajib diisi
    $request->validate([
        'nama_kegiatan' => 'required|string|max:255',
        'deskripsi'     => 'nullable|string',
    ]);

    $kegiatan = Kegiatan::findOrFail($id);
    $kegiatan->nama_kegiatan = $request->nama_kegiatan;
    $kegiatan->deskripsi = $request->deskripsi;
    $kegiatan->tanggal = now(); // otomatis tanggal sekarang
    $kegiatan->save();

    return redirect()->route('kegiatan.index')->with('success', 'Data berhasil diupdate');
}


public function destroy($id)
{
    $kegiatan = Kegiatan::findOrFail($id);
    $kegiatan->delete();

    return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus');
}

}
