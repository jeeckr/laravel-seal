<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\JawabanSiswa;
use App\Kuis;
use App\KuisSiswa;
use App\Nilai;
use App\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Nilai';
        $siswa = Auth::guard('siswa')->user();
        $nilai = Nilai::where(['id_siswa' => $siswa->id])->where('id_kuis', $request['kuis'])->sum('nilai');
        $nilai2 = Nilai::where(['id_siswa' => $siswa->id])->where('id_kuis', $request['kuis'])->get();
        $soal = Soal::where('id_kuis', $request['kuis'])->get();
        $hasil = $nilai * 10;
        $jawaban = JawabanSiswa::where('id_siswa', $siswa->id)->get();
        return view('siswa.mapel.nilai.index_nilai', compact('title', 'siswa', 'nilai', 'jawaban', 'soal', 'hasil', 'nilai2'));
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
}
