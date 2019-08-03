<?php

namespace App\Http\Controllers;
use\App\User;

class mancontroller extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('userlist', compact (['users']));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view ('edit',compact('user'));
    }
    public function update($id)
    {
        $user = User::find($id);
        $user->update([
            'username' => request('username'),
            'email' => request('email')
        ]);
        return 'updated';
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->route('userlist')->with('deletesuccess','a user has been deleted');
    }
}