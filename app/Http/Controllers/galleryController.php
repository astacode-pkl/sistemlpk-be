<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        $data = Gallery::with('categories')->get();

        return view('index', compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('index');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg'
            ]
        );
        $path =  $request->file('image')->store();

        Gallery::create(['category_id' => $validated['category_id'], 'title' => $validated['title'],'image' => $path]);
        
        return redirect()->with('success', 'image created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galery = Gallery::find($id);
        // return view('',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galery = Gallery::find($id);
        $galery->title = $request->title;
        $galery->category_id = $request->category_id;
        $galery->image = $request->image;
        $galery->update();

        return redirect()->with('success', 'Gallery updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galery = Gallery::find($id);
        $galery->delete();
        return redirect()->back()->with('success', 'Gallery updated successfully!');
    }
}
