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
    return "go die";
}
}