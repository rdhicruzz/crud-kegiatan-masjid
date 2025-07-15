<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $kegiatans = Kegiatan::when($search, function($query, $search) {
            return $query->where('nama_kegiatan', 'like', "%$search%");
        })->paginate(10);

        return view('kegiatan.index', compact('kegiatans', 'search'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'waktu' => 'required|date',
            'tempat' => 'required',
            'penanggung_jawab' => 'required',
        ]);

        Kegiatan::create($request->only([
            'nama_kegiatan',
            'waktu',
            'tempat',
            'deskripsi',
            'penanggung_jawab'
        ]));

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan ditambahkan');
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'waktu' => 'required|date',
            'tempat' => 'required',
            'penanggung_jawab' => 'required',
        ]);

        $kegiatan->update($request->only([
            'nama_kegiatan',
            'waktu',
            'tempat',
            'deskripsi',
            'penanggung_jawab'
        ]));

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan diperbarui');
    }
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan dihapus');
    }

    public function edit(Kegiatan $kegiatan)
{
    return view('kegiatan.edit', compact('kegiatan'));
}
public function create()
{
    return view('kegiatan.create');
}


}
