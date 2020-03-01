<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Materi;
use App\Mapel;

class MateriController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
        $mapel = Mapel::all();
        $materi = Materi::all();
        return view('admin.materi.tambah_materi', ['mapel' => $mapel, 'materi' => $materi]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_mapel' => 'required',
            'judul' => 'required',
            'bab' => 'required',
            'isi_materi' => 'required',
        ]);

        Materi::create([
            'id_mapel' => $request['id_mapel'],
            'judul' => $request['judul'],
            'bab' => $request['bab'],
            'isi_materi' => $request['isi_materi'],
        ]);

        return redirect()->route('mapel');
    }

    public function edit($id)
    {
        $mapel = Mapel::firstOrFail();
        $materi = Materi::find($id);
        return view('admin.materi.edit_materi', compact('materi', 'mapel'));
    }

    public function update(Request $request, $id)
    {
        $materi = $request->validate([
            'id_mapel' => 'required',
            'judul' => 'required',
            'bab' => 'required',
            'isi_materi' => 'required',
        ]);


        Materi::where('id', $id)->update($materi);
        return redirect()->route('mapel')->with('success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
        Materi::destroy($id);
        return redirect()->route('mapel');
    }
}
