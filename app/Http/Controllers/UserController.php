<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create() {
        return view('user.create');
    }

    public function show(User $user) {
        return view('user.show', compact('user'));
    }

    public function store(Request $request) {
        $this->validate($request,[
            'name' => 'required|max:50',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request-> email,
            'password' => bcrypt($request->password)
        ]);
        Auth::login($user);
        session()->flash('success', '注册成功!');
        return redirect()->route('users.show', [$user]);
    }
}
