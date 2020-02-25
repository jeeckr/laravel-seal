<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;

class ProfilController extends Controller
{
    public function index()
    {
        $siswa = Siswa::first();
        return view('siswa.profil.index_profil', compact('siswa'));
    }
}
