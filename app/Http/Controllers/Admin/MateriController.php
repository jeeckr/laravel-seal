<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Materi;
use App\Mapel;

class MateriController extends Controller
{
    // public function index()
    // {
    //     $materi = Materi::all();
    //     $mapel = Mapel::all();
    //     return view('admin.mapel.index_mapel', ['materi' => $materi, 'mapel' => $mapel]);
    // }

    public function create()
    {
        $materi = Materi::all();
        $mapel = Mapel::all();
        return view('admin.materi.tambah_materi', ['materi' => $materi, 'mapel' => $mapel]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'bab' => 'required',
            'isi_materi' => 'required',
            'id_mapel' => 'required',
        ]);

        Materi::create([
            'bab' => $request['bab'],
            'isi_materi' => $request['isi_materi'],
            'id_mapel' => $request['id_mapel'],
        ]);

        return redirect()->route('mapel');
    }
}
