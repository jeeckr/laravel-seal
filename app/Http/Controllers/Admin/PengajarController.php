<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mapel;
use App\Guru;


class PengajarController extends Controller
{
    public function index()
    {

        $mapel = Mapel::all();
        return view('admin.pengajar.index_pengajar', ['mapel' => $mapel]);
    }
}
