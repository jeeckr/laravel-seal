<?php

namespace App\Http\Controllers\Kepsek;

use App\Guru;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KepsekController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Kepala Sekolah';
        $kepsek = Auth::guard('kepsek')->user();
        $guru = Guru::all();
        return view('kepsek.index_kepsek', compact('title', 'kepsek', 'guru'));
    }
}
