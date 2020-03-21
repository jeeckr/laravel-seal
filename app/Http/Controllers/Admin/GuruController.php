<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru.IndexGuru', compact('guru'));
    }

    public function create()
    {
        return view('admin.guru.TambahGuru');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required', 'unique:guru',
            'nama_depan' => 'required', 'string', 'max:255',
            'nama_belakang' => 'required', 'string', 'max:255',
            'alamat' => 'required', 'string', 'max:255',
            'telepon' => 'required', 'string', 'max:12',
            'tempat_lahir' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:guru',
            'password' => 'required', 'string', 'min:8',
        ]);

        $path = null;

        if ($request->has('image')) {
            $path = $request->file('image')->store('image');
        }

        Guru::create([
            'nip' => $request['nip'],
            'nama_depan' => $request['nama_depan'],
            'nama_belakang' => $request['nama_belakang'],
            'alamat' => $request['alamat'],
            'telepon' => $request['telepon'],
            'tempat_lahir' => $request['tempat_lahir'],
            'image' => $path,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('guru')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('admin.guru.EditGuru', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $data = Guru::find($id);

        if ($data->nip != $request->nip) {
            $request->validate([
                'nip' => 'required|unique:guru',
            ]);
        }

        if ($request->filled('password')) {
            $request->validate([
                'nama_depan' => 'required', 'string', 'max:255',
                'nama_belakang' => 'required', 'string', 'max:255',
                'alamat' => 'required', 'string', 'max:255',
                'telepon' => 'required', 'string', 'max:12',
                'tempat_lahir' => 'required',
                'email' => 'required', 'string', 'email', 'max:255', 'unique:guru',
                'password' => 'string', 'min:8',
            ]);

            $data->update($request->except('password') + ['password' => Hash::make($request['password'])]);
        } else {
            $request->validate([
                'nama_depan' => 'required', 'string', 'max:255',
                'nama_belakang' => 'required', 'string', 'max:255',
                'alamat' => 'required', 'string', 'max:255',
                'telepon' => 'required', 'string', 'max:12',
                'tempat_lahir' => 'required',
                'email' => 'required', 'string', 'email', 'max:255', 'unique:guru',
            ]);
            $data->update($request->except('password'));
        }

        return redirect()->route('guru')->with('success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
        Guru::destroy($id);
        return redirect()->route('guru')->with('success', 'Data berhasil dihapus!');
    }
}
