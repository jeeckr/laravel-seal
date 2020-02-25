<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index()
    {
        return view('siswa.kelasku.modul.index_modul');
    }
}
