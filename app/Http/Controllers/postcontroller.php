<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function index(){
        $posts = \App\user::find(Auth::id())->posts()->paginate(2);
        return view('post');
    }
    public function post(){
        \App\User::find(Auth::id())->posts()->create([
            'name' => request('name'),
            'post' => request('post')
        ]);
        return redirect()->back();
    }
}
