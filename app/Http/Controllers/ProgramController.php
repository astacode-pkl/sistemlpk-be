<?php

namespace App\Http\Controllers;

use App\Models\LogHistory;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Helpers\ImageHelper;



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
        $imageName = ImageHelper::processImage($request->file('image'), 'images/programs/');
        $newData = Program::create(['image' => $imageName, 'title' => $validated['title'], 'description' => $validated['description']]);
        LogHistory::record('Create',  auth()->user()->name . ' created new Program', $newData);

        return redirect()->route('programs.index')->with('success', 'Program created successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

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
        $oldData = Program::where('id', $id)->get();
        if ($request->hasFile('image')) {
            ImageHelper::deleteImage($program->image);
            $imageName = ImageHelper::processImage($request->file('image'), 'images/galleries/');
        } else {
            $imageName = $program->image;
        }
        $program->update(['image' => $imageName, 'title' => $validated['title'], 'description' => $validated['description']]);
        $newData = Program::where('id', $id)->get();
        LogHistory::record('Update',  auth()->user()->name . ' updated Program', $newData, $oldData);
        return redirect('/admin/programs')->with('success', 'Program updated successfully!!');
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decryptString($id);
        $program = Program::find($id);
        $oldData = Program::where('id', $id)->get();
        $imageName = ImageHelper::deleteImage($program->image);
        $program->delete(['image' => $imageName]);
        LogHistory::record('Delete',  auth()->user()->name . ' deleted Program', '', $oldData);
        return redirect()->back()->with('success', 'Program deleted successfully!!');
    }
}
