<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::latest()->get();
        return view('layouts.programs.program', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $validated = $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg',
        'title' => 'required',
        'description' =>'required'
        ]
    );
    $path =  $request->file('image')->store('images.program');

    Program::create(['image' => $path,'title' => $validated['title'], 'description' => $validated['description']]);
    return redirect('/programs')->with('success', 'Program created successfully!');

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
        $program = Program::find($id);
        return view('layouts.programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
        $program = Program::find($id);
        $program->title = $request->title;
        $program->description = $request->description;
        Storage::delete($program->image);
        $program->image = $request->file('image')->store('images.program');
        $program->update();

        return redirect('/programs')->with('success', 'Gallery updated successfully!');
}





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::find($id);
        Storage::delete($program->image);
        $program->delete();
        return redirect()->back()->with('success', 'Program successfully deleted');
    }

}
