<?php

namespace App\Http\Controllers\Guru;

use App\Guru;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mapel;
use App\Materi;
use App\Kuis;
use App\Soal;
use App\Siswa;
use App\Jurusan;
use App\KelasJurusan;

class GuruController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Guru';
        $guru = Auth::guard('guru')->user();
        $mapel = Guru::find($guru->id)->mapel;
        $materi = Materi::where('id_mapel', $mapel->id)->get();
        $kuis = Kuis::where('id_mapel', $mapel->id)->get();
        $keljur = KelasJurusan::where('id', $mapel->id_kelas_jurusan)->first();
        $siswa = Siswa::where('id_kelas_jurusan', $keljur->id)->get();

        return view('guru.IndexGuru', compact('title', 'guru', 'mapel', 'materi', 'kuis', 'keljur', 'siswa'));
    }
}
