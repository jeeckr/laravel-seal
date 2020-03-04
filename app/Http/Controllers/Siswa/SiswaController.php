<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Siswa;
use App\Mapel;
use App\Kuis;

class SiswaController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Siswa';
        $siswa = Auth::guard('siswa')->user();
        $mapel = Mapel::all();
        $kuis = Kuis::all();
        return view('siswa.IndexSiswa', compact('title', 'siswa', 'mapel', 'kuis'));
    }
}
