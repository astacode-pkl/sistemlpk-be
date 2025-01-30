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
            return redirect()->intended('/');
        }
        return back()->with('error', 'Log in is failed');
    }
    public function register(Request $request)
    {
        $user = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        $user['passaword'] = Hash::make($user['password']);
        $user = User::create($user);
        return to_route('login')->with('success','register successfuly');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
