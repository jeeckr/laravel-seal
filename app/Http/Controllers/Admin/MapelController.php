<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mapel;
use App\Materi;

class MapelController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        $mapel = Mapel::all();
        return view('admin.mapel.index_mapel', compact('materi', 'mapel'));
    }

    public function show($id)
    {
        $mapel = Mapel::find($id);
        $materi = Materi::where('id_mapel', $id)->paginate(5);
        return view('admin.mapel.detail_mapel', compact('mapel', 'materi'));
    }

    // public function show($id)
    // {
    //     $materi = Materi::find($id);
    //     return view('admin.mapel.detail_mapel', compact('materi'));
    // }
}
