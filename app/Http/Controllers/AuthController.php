<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
  
    public function login()

    {
        return view('auth.login');
    }

    public function authenticate(Request $request) 
    {

        // Hanya menerima name dengan nama email dan password //
        $credentials = $request->only('email', 'password');

        // Pengecekan address di dalam database
        if(Auth::attempt($credentials)){
            return redirect('posts');
        }else{
            return redirect('login')->with('error_messange', 'Wrong Email And Password');
        }

    }

    public function logout()
    {

        session::flush();
        Auth::logout();

        return redirect('login');

    }

}