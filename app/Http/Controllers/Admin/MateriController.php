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
            'bab' => 'required',
            'isi_materi' => 'required',
        ]);

        Materi::create([
            'id_mapel' => $request['id_mapel'],
            'bab' => $request['bab'],
            'isi_materi' => $request['isi_materi'],
        ]);

        return redirect()->route('mapel');
    }

    public function edit($id)
    {
        $materi = Materi::find($id);
        return view('admin.materi.edit_materi', compact('materi'));
    }

    public function update()
    {
    }

    public function destroy($id)
    {
        Materi::destroy($id);
        return redirect()->route('mapel');
    }
}
