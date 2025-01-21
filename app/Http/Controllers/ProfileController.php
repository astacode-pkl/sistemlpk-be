<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('layouts.profile');
    }
    public function insert(Request $request)
    {
        $contact = $request->validate([
            'name' => 'required',
            'slogan' => 'required',
            'history' => 'required',
            'email' => 'required'
        ]);
        Profile::create($contact);
        return redirect()->back();
    }
}
