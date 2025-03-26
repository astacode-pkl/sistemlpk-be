<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use App\Helpers\ImageHelper;
use Illuminate\Support\Facades\Crypt;
use App\Models\LogHistory;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = Hero::orderBy('position')->get();
        return view('heroes.heroes', compact('heroes'));
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newPosition = Hero::max('position') + 1;
        return view('heroes.create', compact('newPosition'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'position' => 'required|max:20|numeric',
                'image' => 'image|mimes:jpeg,png,jpg'
            ]
        );
        $imageName = ImageHelper::processImage($request->file('image'), 'images/heroes/');
        $newData = Hero::create(['position' => $validated['position'], 'image' => $imageName]);
        LogHistory::record('Create', auth()->user()->name . ' created new Hero', $newData);
        return redirect('/admin/heroes')->with('success', 'Hero created successfully!!');
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
        $id = Crypt::decryptString($id);
        $hero = Hero::find($id);
        return view('heroes.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            [
                'position' => 'required|numeric|max:20',
                'image' => 'image|mimes:jpeg,png,jpg'
            ]
        );
        $hero = Hero::find($id);
        $hero->position = $request->position;
        $oldData = Hero::where('id', $id)->get();
        if ($request->hasFile('image')){
            ImageHelper::deleteImage($hero->image);
            $imageName = ImageHelper::processImage($request->file('image'),'images/heroes');

        }else{
            $imageName = $hero->image;

        }
        
        $hero->update(['image' => $imageName]);
        $newData = Hero::where('id', $id)->get();
        LogHistory::record('Update',  auth()->user()->name . ' updated Hero', $newData, $oldData);
        return redirect('/admin/heroes')->with('success', 'Hero updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decryptString($id);

        $table = Hero::find($id);
        if ($table != null) {
            $oldData = Hero::where('id', $id)->get();
            $imageName = ImageHelper::deleteImage($table->image);
            $table->delete(['image' => $imageName]);
            LogHistory::record('Delete', auth()->user()->name . ' deleted Hero', $oldData);
            return redirect()->back()->with('success', 'Hero deleted successfully!!');
        }
        return redirect()->back();
    }

    public function updatePosition(Request $request)
    {
        foreach ($request->positions as $index => $id) {

            Hero::where('id', $id)->update(['position' => $index + 1]);
        }
        return redirect()->back()->with('success', 'Position updated successfully!!');
    }
}
