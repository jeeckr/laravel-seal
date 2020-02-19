<?php

namespace App\Http\Controllers\NativeAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index()
    {
        // $role = auth()->user()->role_id;
        auth()->guard('admin')->logout();
        auth()->guard('guru')->logout();
        auth()->guard('siswa')->logout();
        auth()->logout();

        return view('welcome');
    }
}
