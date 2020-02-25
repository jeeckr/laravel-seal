<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kelas;
use App\Jurusan;
use App\Siswa;
use App\Mapel;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::get();
        $siswa = Siswa::get();
        $kelas = Kelas::get();
        return view('admin.kelas.index_kelas', compact('jurusan', 'siswa', 'kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    public function detailSiswa($id)
    {
        $kelas = Kelas::find($id);
        $siswa = Siswa::where('id_kelas', $id)->get();
        return view('admin.kelas.detail_siswa', compact('kelas', 'siswa'));
    }

    public function detailMapel($id)
    {
        $kelas = Kelas::find($id);
        $mapel = Mapel::where('id_kelas', $id)->get();
        return view('admin.kelas.detail_mapel', compact('kelas', 'mapel'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
