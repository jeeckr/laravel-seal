<?php

namespace App\Http\Controllers\NativeAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Siswa;

class RegisterSiswaController extends Controller
{
    protected function index()
    {
        return view('authUser.registerSiswa');
    }

    protected function create(Request $request)
    {
        $request->validate([
            'nis' => 'required', 'unique:siswas',
            'nama' => 'required', 'string', 'max:255',
            'alamat' => 'required', 'string', 'max:255',
            'telepon' => 'required', 'string', 'max:12',
            'jk' => 'required',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:siswas',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);

        Siswa::create([
            'nis' => $request['nis'],
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'telepon' => $request['telepon'],
            'jk' => $request['jk'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('login');
    }
}
