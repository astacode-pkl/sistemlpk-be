<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\LogHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $hero =  Hero::latest()->get();
        return view('heroes.heroes', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate(
            [

                'image' => 'image|mimes:jpeg,png,jpg',
                'position' => 'required|integer'
            ]
        );

        $imageName = $this->uploadImage('images/heroes/', $request->file('image'));

        Hero::create([
            'position' => $validated['position'],
            'image' => $imageName
        ]);
        LogHistory::record('Create',  auth()->user()->name . ' created new gallery');
        return redirect('/heroes')->with('success', 'Hero created successfully!!');
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
        $hero = Hero::find($id);
        return view('heroes.edit', ['hero' => $hero]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decryptString($id);
        $validated = $request->validate(
            [
                'category_id' => 'required',
                'title' => 'required|string|max:100',
                'image' => 'image|mimes:jpeg,png,jpg'
            ]
        );
        $gallery = Hero::find($id);
        $gallery->title = $request->title;
        $gallery->category_id = $request->category_id;
        $imageName = $this->updateImage('images/heroes/', $gallery->image, $request->file('image'));
        $gallery->update(['image' => $imageName]);
        LogHistory::record('Update',  auth()->user()->name . ' updated gallery');

        return redirect('/heroes')->with('success', 'Gallery updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decryptString($id);
        $gallery = Gallery::find($id);

        $imageName = $this->destroyImage('images/heroes/', $gallery->image);

        $gallery->delete(['image' => $imageName]);
        LogHistory::record('Delete',  auth()->user()->name . ' deleted new gallery');

        return redirect()->back()->with('success', 'Gallery deleted successfully!!');
    }
}
