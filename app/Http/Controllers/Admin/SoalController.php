<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kuis;
use App\Soal;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $soal = Soal::where('id_kuis', $id)->get();
        return view('admin.soal.index_soal', compact('soal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kuis = Kuis::all();
        return view('admin.soal.tambah_soal', compact('kuis'));
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
            'id_kuis' => 'required',
            'soal' => 'required',
            'pilihan_a' => 'required',
            'pilihan_b' => 'required',
            'pilihan_c' => 'required',
            'pilihan_d' => 'required',
            'kunci' => 'required',
        ]);

        Soal::create([
            'id_kuis' => $request['id_kuis'],
            'soal' => $request['soal'],
            'pilihan_a' => $request['pilihan_a'],
            'pilihan_b' => $request['pilihan_b'],
            'pilihan_c' => $request['pilihan_c'],
            'pilihan_d' => $request['pilihan_d'],
            'kunci' => $request['kunci'],
        ]);

        return redirect()->route('kuis');
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
