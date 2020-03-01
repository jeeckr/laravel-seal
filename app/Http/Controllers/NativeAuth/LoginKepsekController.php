<?php

namespace App\Http\Controllers\NativeAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginKepsekController extends Controller
{
    public function index()
    {
        $title = "Login Kepala Sekolah";
        return view('authUser.login.loginKepsek', compact('title'));
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

        if (auth()->guard('kepsek')->attempt($credentials)) {
            return redirect()->route('homeKepsek')->with('success', 'Selamat Datang!');
        }
        return redirect()->route('loginKepsek');
    }
}
