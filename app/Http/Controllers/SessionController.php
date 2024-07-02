<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view("auth.login");
    }

    function login(Request $request){
        Session::flash('email', $request->email);
        $request->validate([
            'email' =>'required',
            'password' =>'required',
        ],[
            'email.required' =>'Email wajib di isi',
            'password.required' =>'Password wajib di isi',
        ]);

        $InfoLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($InfoLogin)){
            return redirect('dashboard')->with('success','Login Success');
        } else {
            return redirect('login')->withErrors('Usernam dan Password salah');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login')->with('success','Berhasil log out');
    }
}
