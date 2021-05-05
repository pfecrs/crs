<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    
    public function showAdminLogin()
    {
        return view('Backoffice.login');
    }


    public function handleAdminLogin(Request $request ){


        $validator = $request->validate([
            'name'     => 'required',
            'password'  => 'required|min:6'
        ]);

        if (Auth::attempt($validator)) {
            return redirect()->route('showListeEntreprise');
        }
        dd(Auth::attempt($validator));

    }


    // public function authenticate(Request $request)
    // {
    //     $validator = $request->validate([
    //         'email'     => 'required',
    //         'password'  => 'required|min:6'
    //     ]);

    //     if (Auth::attempt($validator)) {
    //         return redirect()->route('dashboard');
    //     }
    // }

    // public function logout()
    // {
    //     Session::flush()
    //     Auth::logout();
    //     return back();
    // }
}
