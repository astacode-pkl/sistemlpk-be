<?php

namespace App\Http\Controllers;

use App\Models\LogHistory;
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
            LogHistory::record('Log in', auth()->user()->name." Logged in");
            return redirect()->intended('/');

        }
        return back()->with('error', 'Log in is failed');
    }
    public function logout()
    {
        LogHistory::record('Log out', auth()->user()->name." Logged out");
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
