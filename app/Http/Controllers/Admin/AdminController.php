<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;
use App\Guru;
use App\Mapel;


class AdminController extends Controller
{
    public function index()
    {
        $count_siswa = Siswa::count();
        $count_guru = Guru::count();
        $count_mapel = Mapel::count();
        return view('admin.IndexAdmin', compact('count_siswa', 'count_guru', 'count_mapel'));
    }
}
