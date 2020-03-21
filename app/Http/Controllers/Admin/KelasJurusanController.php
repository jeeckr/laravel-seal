<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jurusan;
use Illuminate\Http\Request;
use App\KelasJurusan;
use App\Kelas;
use App\Mapel;
use App\Siswa;

class KelasJurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keljur = KelasJurusan::all();
        return view('admin.kelas_jurusan.index_kelas_jurusan', compact('keljur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::get();
        $jurusan = Jurusan::get();
        return view('admin.kelas_jurusan.tambah_kelas_jurusan', compact('kelas', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
        ]);

        KelasJurusan::create([
            'id_kelas' => $request['id_kelas'],
            'id_jurusan' => $request['id_jurusan']
        ]);

        return redirect()->route('kelas_jurusan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function detailSiswa($id)
    {
        $siswa = Siswa::where('id_kelas_jurusan', $id)->get();
        return view('admin.kelas_jurusan.detail_siswa', compact('siswa'));
    }

    public function detailMapel($id)
    {
        $mapel = Mapel::where('id_kelas_jurusan', $id)->get();
        return view('admin.kelas_jurusan.detail_mapel', compact('mapel'));
    }
}
