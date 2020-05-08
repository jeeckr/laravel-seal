<?php

namespace App\Http\Controllers\Kepsek;

use App\Guru;
use App\Http\Controllers\Controller;
use App\KelasJurusan;
use App\Mapel;
use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KepsekController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Kepala Sekolah';
        $kepsek = Auth::guard('kepsek')->user();
        $mapel = Mapel::all();
        $guru = Guru::all();
        // $siswa = Siswa::all();
        $keljur = KelasJurusan::all();
        return view('kepsek.index_kepsek', compact('title', 'kepsek', 'mapel', 'guru', 'keljur'));
    }
}
