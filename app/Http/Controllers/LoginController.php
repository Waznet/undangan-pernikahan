<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('dashboard.login',[
            'title' => 'Login',
        ]);
    }
    public function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'Username tidak boleh kosong',
            'password.required'=>'Password tidak boleh kosong',
        ]);

        $username = 'admin';
        $password = 'admin123';

        if($request->username===$username && $request->password===$password){
            return redirect('/admin');
        }else{
            return back()->withErrors(['login' => 'Username atau password salah'])->withInput();
        }
        //Auth
        // $infologin = [
        //     'username' => $request->username,
        //     'password' => $request->password
        // ];

        // if(Auth::attempt($infologin)){
        //     return 'sukses';
        // }else{
        //     return 'gagal';
        // }
    }
}
