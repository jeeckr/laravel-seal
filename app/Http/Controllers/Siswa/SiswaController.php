<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;
use App\Mapel;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::first();
        $mapel = Mapel::all();
        return view('siswa.IndexSiswa', compact('siswa', 'mapel'));
    }
}
