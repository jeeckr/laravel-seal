<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mapel;
use App\Materi;
use App\Guru;
use Datatable;

class MapelController extends Controller
{
    public function index()
    {

        $materi = Materi::all();
        $mapel = Mapel::all();
        return view('admin.mapel.index_mapel', compact('materi', 'mapel'));
    }

    public function create()
    {
        $guru = Guru::all();
        return view('admin.mapel.tambah_mapel', compact('guru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_guru' => 'required',
            'nama_mapel' => 'required',
        ]);

        Mapel::create([
            'id_guru' => $request['id_guru'],
            'nama_mapel' => $request['nama_mapel'],
        ]);

        return redirect()->route('mapel')->with('success', 'Data berhasil ditambah!');
    }

    public function show($id)
    {
        $mapel = Mapel::find($id);
        $materi = Materi::where('id_mapel', $id)->paginate(5);
        return view('admin.mapel.detail_materi', compact('mapel', 'materi'));
    }

    public function edit($id)
    {
        $mapel = Mapel::find($id);
        $guru = Guru::get();
        return view('admin.mapel.edit_mapel', compact('mapel', 'guru'));
    }

    public function update(Request $request, $id)
    {
        $mapel = $request->validate([
            'id_guru' => 'required',
            'nama_mapel' => 'required',
        ]);

        Mapel::where('id', $id)->update($mapel);
        return redirect()->route('mapel')->with('success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
        Mapel::destroy($id);
        Materi::destroy('id_mapel', $id);
        return redirect()->route('mapel');
    }
}
