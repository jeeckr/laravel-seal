<?php

namespace App\Http\Controllers\Kepsek;

use App\Http\Controllers\Controller;
use App\Kepsek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Profl Kepala Sekolah';
        $kepsek = Auth::guard('kepsek')->user();
        return view('kepsek.profil.index_profil', compact('title', 'kepsek'));
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
        $data = Kepsek::find($id);

        // if ($data->nip != $request['nip']) {
        //     $request->validate([
        //         'nip' => 'required|unique:kepsek',
        //     ]);
        // }

        if ($request->filled('password')) {
            $request->validate([
                'nama_depan' => 'required', 'string', 'max:255',
                'nama_belakang' => 'required', 'string', 'max:255',
                'alamat' => 'required', 'string', 'max:255',
                'password' => 'string', 'min:8',
            ]);

            $data->update($request->except('password') + ['password' => Hash::make($request['password'])]);
        } else {
            $request->validate([
                'nama_depan' => 'required', 'string', 'max:255',
                'nama_belakang' => 'required', 'string', 'max:255',
                'alamat' => 'required', 'string', 'max:255',
            ]);
            $data->update($request->except('password'));
        }


        return redirect()->route('homeKepsek');
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
