<?php

namespace App\Http\Controllers;

use App\Models\LogHistory;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $programs = Program::latest()->get();
        return view('programs.program', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'image' => 'required|image|mimes:jpeg,png,jpg',
                'title' => 'required|max:255',
                'description' => 'required'
            ]
        );
        // $program = new Program;
        $imageName = $this->uploadImage('images/programs/',$request->file('image'));
        Program::create(['image' => $imageName, 'title' => $validated['title'], 'description' => $validated['description']]);
        LogHistory::record('Create',  auth()->user()->name.' created new Program');
        
        return redirect()->route('programs.index')->with('success', 'Program successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $table = Program::find($id);
        // return view('program', compact('table'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = Crypt::decryptString($id);
        $program = Program::find($id);
        return view('programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            [
                'image' => 'image|mimes:jpeg,png,jpg',
                'title' => 'required',
                'description' => 'required'
            ]
        );
        $id = Crypt::decryptString($id);
        $program = Program::find($id);
        $program->title = $request->title;
        $program->description = $request->description;
        $imageName = $this->updateImage('images/programs/',$program->image,$request->file('image'));
        $program->update(['image' => $imageName, 'title' => $validated['title'], 'description' => $validated['description']]);
        LogHistory::record('Update',  auth()->user()->name.' updated Program');
        return redirect('/programs')->with('success', 'Gallery updated successfully!');
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decryptString($id);
        $program = Program::find($id);
        $imageName = $this->destroyImage('images/programs/',$program->image);
        $program->delete(['image' => $imageName]);
        LogHistory::record('Delete',  auth()->user()->name.' deleted Program');
        return redirect()->back()->with('success', 'Program successfully deleted');
    }
}
