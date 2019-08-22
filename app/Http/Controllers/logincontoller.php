<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class logincontoller extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(){
        $username = request('username');
        $username = request('password');
        if(Auth::attempt(['username' => $username, 'password' => $password])){
            return redirect()->route('userlist');
        }else{
            return '???';
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.userlist');
    }
}
