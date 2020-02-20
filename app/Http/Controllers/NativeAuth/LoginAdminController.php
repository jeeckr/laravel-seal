<?php

namespace App\Http\Controllers\NativeAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('authUser.login.loginAdmin');
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

        if (auth()->guard('admin')->attempt($credentials)) {
            return redirect()->route('admin');
            // return "sdasdssssssssssssss";
        }
        return redirect()->route('loginAdmin');
        // return "dasdsa";
    }
}
