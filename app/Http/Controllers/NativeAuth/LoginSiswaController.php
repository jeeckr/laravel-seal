<?php

namespace App\Http\Controllers\NativeAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;

class LoginSiswaController extends Controller
{
    public function index()
    {
        return view('authUser.login.loginSiswa');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (auth()->guard('siswa')->attempt($credentials)) {
            return redirect()->route('homeSiswa');
        }
        return redirect()->route('loginSiswa');
    }
}
