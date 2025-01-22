<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::first()->get();
        return view('layouts.profile',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $table = Profile::find($id);
        $table->name = $request->name;
        $table->slogan = $request->slogan;
        $table->history = $request->history;
        $table->vision = $request->vision;
        $table->mission = $request->mission;
        $table->email = $request->email;
        $table->instagram = $request->instagram;
        $table->whatsapp = $request->whatsapp;
        $table->tiktok = $request->tiktok;
        $table->address = $request->address;
        $table->map = $request->map;
        if ($request->file('logo')) {
            $table->logo = $request->file('logo')->store('logo.profile');
        }
      
        $table->update();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
