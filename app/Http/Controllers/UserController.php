<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return redirect('/login')->with('error', 'Log in is failed');
    }
    public function register(Request $request)
    {
        $user = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user['passaword'] = Hash::make($user['password']);
        $user = User::create($user);
        Auth::login($user);
        return redirect('/');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
