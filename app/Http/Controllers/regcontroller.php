<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regcontroller extends Controller
{
public function index()
{
    return view('register');
}
public function register()
{
    $this->validate(request(),[
        'username' => 'required|alpha_dash',
        'email' => 'required|unique:users,email',
        'password' => 'required|confirmed',
        'image' => 'max:1024'
    ]);
    if(request()->hasFile('image')){
        $imageName = uniqid().'.jpg';
        request()->file('image')->move('image/', $imageName);
        User::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'image' => $imageName]);
    }
    else{
    User::create([
        'username' => request('username'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))]);
    }


    Return 'registered';
}
}