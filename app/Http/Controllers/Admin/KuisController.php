<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kuis;
use App\Soal;
use App\Mapel;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kuis = Kuis::all();
        return view('admin.kuis.index_kuis', compact('kuis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = Mapel::all();
        return view('admin.kuis.tambah_kuis', compact('mapel'));
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
            'id_mapel' => 'required',
            'judul' => 'required',
            'jumlah_soal' => 'required',
            'waktu' => 'required',
        ]);

        Kuis::create([
            'id_mapel' => $request['id_mapel'],
            'judul' => $request['judul'],
            'jumlah_soal' => $request['jumlah_soal'],
            'waktu' => $request['waktu'],
        ]);

        return redirect()->route('mapel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soal = Soal::where('id_kuis', $id)->get();
        return view('admin.kuis.detail_soal', compact('soal'));
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
        Kuis::destroy($id);
        return redirect()->route('mapel')->with('success', 'Data berhasil dihapus!');
    }
}
