<?php

namespace App\Http\Controllers\NativeAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guru;

class LoginGuruController extends Controller
{
    public function index()
    {
        $title = "Login Guru";
        return view('authUser.login.loginGuru', compact('title'));
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

        if (auth()->guard('guru')->attempt($credentials)) {
            return redirect()->route('homeGuru');
        }
        return redirect()->route('loginGuru');
    }
}
