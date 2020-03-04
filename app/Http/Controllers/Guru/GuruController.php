<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mapel;
use App\Materi;

class GuruController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Guru';
        $guru = Auth::guard('guru')->user();
        $mapel = Mapel::where('id_guru', $guru->id)->first();
        $materi = Materi::where('id_mapel', $mapel->id)->get();
        return view('guru.IndexGuru', compact('title', 'guru', 'mapel', 'materi'));
    }
}
