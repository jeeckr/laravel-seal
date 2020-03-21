<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mapel;
use App\Materi;
use App\Guru;
use App\Kuis;
use App\Jurusan;
use App\KelasJurusan;

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
        $keljur = KelasJurusan::all();
        return view('admin.mapel.tambah_mapel', compact('guru', 'keljur'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_guru' => 'required',
            'id_kelas_jurusan' => 'required',
            'nama_mapel' => 'required',
            'deskripsi' => 'required',
        ]);

        Mapel::create([
            'id_guru' => $request['id_guru'],
            'id_kelas_jurusan' => $request['id_kelas_jurusan'],
            'nama_mapel' => $request['nama_mapel'],
            'deskripsi' => $request['deskripsi'],
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
        $gurmap = Guru::where('id', $mapel->id_guru)->first();
        $guru = Guru::all();
        $kelmap = KelasJurusan::where('id', $mapel->id_kelas_jurusan)->first();
        $keljur = KelasJurusan::all();
        return view('admin.mapel.edit_mapel', compact('mapel', 'gurmap', 'guru', 'kelmap', 'keljur'));
    }

    public function update(Request $request, $id)
    {
        $mapel = $request->validate([
            'id_guru' => 'required',
            'id_kelas_jurusan' => 'required',
            'nama_mapel' => 'required',
            'deskripsi' => 'required',
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

    public function showKuis($id)
    {
        $mapel = Mapel::find($id);
        $kuis = Kuis::where('id_mapel', $id)->get();
        return view('admin.mapel.detail_kuis', compact('mapel', 'kuis'));
    }
}
