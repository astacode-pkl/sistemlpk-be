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
        $validatedData = $request->validate([
            'image' => 'required|mimes:png,jpg|max:2048',
            'title' => 'required',
            'description' => 'required'
        ], [
            'image.required' => 'Image is required',
            'image.mimes' => 'Image must be a file of type: png, jpg',
            'image.max' => 'Image size must not exceed 2 MB',
            'title.required' => 'Title is required',
            'description.required' => 'Description is required'
        ]);

        $path = $request->file('image')->store('program_images');

        Program::create([
            'images' => $path,
            'title' => $validatedData['title'],
            'description' => $validatedData['description']
        ]);

        return redirect()->back()->with('success','Data successfully created');
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
        // $table = Program::find($id);
        // return view('layouts.program', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $table = Program::find($id);
        $table->title = $request->title;
        $table->description = $request->description;
        $table->update();
        return redirect()->back()->with('success','data success updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $table = Program::find($id);
        $table->delete();
        return redirect()->back()->with('success','data success deleted');
    }
}
