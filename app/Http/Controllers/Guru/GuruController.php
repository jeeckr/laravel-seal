<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Guru';
        $guru = Auth::guard('guru')->user();
        return view('guru.IndexGuru', compact('title', 'guru'));
    }
}
