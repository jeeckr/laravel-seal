<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mapel;
use App\Siswa;
use App\Materi;

class MapelController extends Controller
{
    public function index($id)
    {
        $siswa = Siswa::first();
        $mapel = Mapel::find($id);
        $materi = Materi::where('id_mapel', $id)->get();
        return view('siswa.mapel.index_mapel', compact('siswa', 'mapel', 'materi'));
    }
}
