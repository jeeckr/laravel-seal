<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Kuis;
use App\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Kuis';
        $guru = Auth::guard('guru')->user();
        $mapel = Mapel::where('id_guru', $guru->id)->first();
        return view('guru.kuis.tambah_kuis', compact('title', 'guru', 'mapel'));
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
        return redirect()->route('homeGuru');
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
