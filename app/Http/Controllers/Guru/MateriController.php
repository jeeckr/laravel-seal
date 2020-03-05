<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Materi;
use App\Mapel;
use Illuminate\Support\Facades\Auth;

class MateriController extends Controller
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
        $title = 'Detail Materi';
        $guru = Auth::guard('guru')->user();
        $mapel = Mapel::where('id_guru', $guru->id)->first();
        $materi = Materi::find($id);
        return view('guru.materi.detail_materi', compact('title', 'guru', 'mapel', 'materi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Materi';
        $guru = Auth::guard('guru')->user();
        $mapel = Mapel::where('id_guru', $guru->id)->first();
        $materi = Materi::find($id);
        return view('guru.materi.edit_materi', compact('title', 'guru', 'mapel', 'materi'));
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
        $materi = $request->validate([
            'bab' => 'required',
            'judul' => 'required',
            'isi_materi' => 'required',
        ]);

        Materi::where('id', $id)->update($materi);
        return redirect()->route('homeGuru')->with('success', 'Data materi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Materi::destroy($id);
        return redirect()->route('homeGuru')->with('success', 'Materi berhasil dihapus!');
    }
}
