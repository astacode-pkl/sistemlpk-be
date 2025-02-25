<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\LogHistory;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function index(){
        $companyProfile = CompanyProfile::first();
        Cache::add('companyprofile', $companyProfile);
        return view('login');
    }
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
        return back()->with('error', 'Login failed: Email or password is incorrect');
    }
    public function logout()
    {
        LogHistory::record('Log out', auth()->user()->name." Logged out");
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/Admin');
    }
}
