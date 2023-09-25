<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function logout_admin()
    {
        Auth::logout();
        Session::flush();
        return redirect(URL('/admin/login'));
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect(URL('/'));
    }
}
