<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Kepsek;

class KepsekController extends Controller
{
    public function index()
    {
        $kepsek = Kepsek::all();
        return view('admin.kepsek.index_kepsek', compact('kepsek'));
    }

    public function create()
    {
        return view('admin.kepsek.tambah_kepsek');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nip' => 'required|unique:kepsek',
            'nama_depan' => 'required', 'string', 'max:255',
            'nama_belakang' => 'required', 'string', 'max:255',
            'alamat' => 'required', 'string', 'max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:kepsek',
            'password' => 'required', 'string', 'min:8',
        ]);

        $path = null;

        if ($request->has('image')) {
            $path = $request->file('image')->store('image');
        }

        Kepsek::create([
            'nip' => $request['nip'],
            'nama_depan' => $request['nama_depan'],
            'nama_belakang' => $request['nama_belakang'],
            'alamat' => $request['alamat'],
            'jk' => $request['jk'],
            'image' => $path,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('kepsek')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kepsek = Kepsek::find($id);
        return view('admin.kepsek.edit_kepsek', ['kepsek' => $kepsek]);
    }

    public function update(Request $request, $id)
    {

        $data = Kepsek::find($id);

        if ($data->nip != $request->nip) {
            $request->validate([
                'nip' => 'required|unique:kepsek',
            ]);
        }

        if ($request->filled('password')) {
            $request->validate([
                'nama_depan' => 'required', 'string', 'max:255',
                'nama_belakang' => 'required', 'string', 'max:255',
                'alamat' => 'required', 'string', 'max:255',
                'email' => 'required', 'string', 'email', 'max:255', 'unique:kepsek',
                'password' => 'string', 'min:8',
            ]);

            $data->update($request->except('password') + ['password' => Hash::make($request['password'])]);
        } else {
            $request->validate([
                'nama_depan' => 'required', 'string', 'max:255',
                'nama_belakang' => 'required', 'string', 'max:255',
                'alamat' => 'required', 'string', 'max:255',
                'email' => 'required', 'string', 'email', 'max:255', 'unique:kepsek',
            ]);
            $data->update($request->except('password'));
        }


        return redirect()->route('kepsek')->with('success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
        Kepsek::destroy($id);
        return redirect()->route('kepsek')->with('success', 'Data berhasil dihapus!');
    }
}
