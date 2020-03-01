<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mapel;
use App\Siswa;
use App\Materi;
use Illuminate\Support\Facades\Auth;

class MapelController extends Controller
{
    public function index($id)
    {
        $title = 'Mata Pelajaran';
        $siswa = Auth::guard('siswa')->user();
        $mapel = Mapel::find($id);
        $materi = Materi::where('id_mapel', $id)->get();
        return view('siswa.mapel.index_mapel', compact('title', 'siswa', 'mapel', 'materi'));
    }
}
