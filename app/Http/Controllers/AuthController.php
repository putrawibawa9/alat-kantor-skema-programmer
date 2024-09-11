<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = \App\Models\Admin::where('username', $request->username)->first();
        if(!$user){
            return redirect('/admin/login');
        }
        if(!Hash::check($request->password, $user->password)){
            return redirect('/admin/login');
        }
        session(['berhasil_login' => true]);
        return redirect('/produk');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user = new \App\Models\Admin();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/admin/login');
    }

    public function registerUser(Request $request)
    {
        $user = new \App\Models\User;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/');
    }

    public function loginUser(Request $request)
    {
        $user = \App\Models\User::where('username', $request->username)->first();
        if(!$user){
            return redirect('/');
        }
        if(!Hash::check($request->password, $user->password)){
            return redirect('/');
        }
        session(['berhasil_login' => true]);
        return redirect('/user/dashboard');
    }
}
