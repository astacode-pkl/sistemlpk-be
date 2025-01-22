<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $program = Program::all();
        return view('layouts.program');
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
        $validated = $request->validate([
            'image' =>'required|image|mimes:jpeg,png,jpg',
            'title' => 'required',
            'description' => 'required',
            ]
        );
        $path =  $request->file('image')->store();

        Program::create(['title' => $validated['title'],'description' => $validated['description'],'image' => $path]);
        
        return redirect()->with('success', 'image created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $table = Program::find($id);
        // return view('layouts.program', compact('table'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $table = Program::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $program = Program::find($id);
    $program->image = $request->image;
    $program->title = $request->title;
    $program->description = $request->description;
    $program->update();
    return redirect()->with('success', 'Program updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $table = Program::find($id);
        $table->delete();
        return redirect()->back()->with('success','Program success deleted');
    }
}
