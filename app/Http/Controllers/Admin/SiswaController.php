<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('admin.siswa.IndexSiswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.TambahSiswa');
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
            'nisn' => 'required|min:10|max:10|unique:siswas',
            'nama_depan' => 'required', 'string', 'max:255',
            'nama_belakang' => 'required', 'string', 'max:255',
            'alamat' => 'required', 'string', 'max:255',
            'telepon' => 'required|string|min:11|max:12',
            'tempat_lahir' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:siswas',
            'password' => 'required', 'string', 'min:8',
        ]);

        $path = null;

        if ($request->has('image')) {
            $path = $request->file('image')->store('image');
        }

        Siswa::create([
            'nisn' => $request['nisn'],
            'nama_depan' => $request['nama_depan'],
            'nama_belakang' => $request['nama_belakang'],
            'alamat' => $request['alamat'],
            'telepon' => $request['telepon'],
            'tempat_lahir' => $request['tempat_lahir'],
            'image' => $path,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);


        return redirect()->route('siswa')->with('success', 'Data berhasil ditambahkan!');
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
        $siswa = Siswa::find($id);
        return view('admin.siswa.EditSiswa', ['siswa' => $siswa]);
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
        $data = Siswa::find($id);

        if ($data->nisn != $request['nisn']) {
            $request->validate([
                'nisn' => 'required|min:10|max:10|unique:siswas',
            ]);
        }

        if ($request->filled('password')) {
            $request->validate([
                'nama_depan' => 'required', 'string', 'max:255',
                'nama_belakang' => 'required', 'string', 'max:255',
                'alamat' => 'required', 'string', 'max:255',
                'telepon' => 'required|string|min:11|max:12',
                'tempat_lahir' => 'required',
                'email' => 'required', 'string', 'email', 'max:255', 'unique:siswas',
                'password' => 'required', 'string', 'min:8',
            ]);
            $data->update($request->except('password') + ['password' => Hash::make($request['password'])]);
        } else {
            $request->validate([
                'nama_depan' => 'required', 'string', 'max:255',
                'nama_belakang' => 'required', 'string', 'max:255',
                'alamat' => 'required', 'string', 'max:255',
                'telepon' => 'required|string|min:11|max:12',
                'tempat_lahir' => 'required',
                'email' => 'required', 'string', 'email', 'max:255', 'unique:siswas',
            ]);
            $data->update($request->except('password'));
        }

        return redirect()->route('siswa')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::destroy($id);
        return redirect()->route('siswa')->with('success', 'Data berhasil dihapus!');
    }
}
