<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Siswa;

class ProfilController extends Controller
{
    public function index()
    {
        $title = 'Profil Siswa';
        $siswa = Auth::guard('siswa')->user();
        return view('siswa.profil.index_profil', compact('title', 'siswa'));
    }

    public function update(Request $request, $id)
    {
        $data = Siswa::find($id);

        if ($request->filled('password')) {
            $request->validate([
                'nama_depan' => 'required',
                'nama_belakang' => 'required',
                'alamat' => 'required',
                'telepon' => 'required',
                'tempat_lahir' => 'required',
                'password' => 'required|string|min:8',
            ]);
            $data->update($request->except('password') + ['password' => Hash::make($request['password'])]);
        } else {
            $request->validate([
                'nama_depan' => 'required',
                'nama_belakang' => 'required',
                'alamat' => 'required',
                'telepon' => 'required',
                'tempat_lahir' => 'required',
            ]);
            $data->update($request->except('password'));
        }

        return redirect()->route('homeSiswa')->with('success', 'Data profil berhasil diubah!');
    }
}
