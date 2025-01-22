<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        $galleries =  Gallery::paginate(10)->withQueryString() ;
        return view('layouts.galleries.galleries',compact('galleries'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('layouts.galleries.create',compact('categories'));

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
        $path =  $request->file('image')->store('galleries');

        Gallery::create(['category_id' => $validated['category_id'], 'title' => $validated['title'],'image' => $path]);
        return redirect('/galleries')->with('success', 'Gallery created successfully!');
    
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
        $gallery = Gallery::find($id);
        $categories =Category::get();
        return view('layouts.galleries.edit',['gallery' => $gallery,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galery = Gallery::find($id);
        $galery->title = $request->title;
        $galery->category_id = $request->category_id;
        Storage::delete($galery->image);
        $galery->image = $request->file('image')->store('galleries');
        $galery->update();

        return redirect('/galleries')->with('success', 'Gallery updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::find($id);
        Storage::delete($gallery->image);
        $gallery->delete();
        return redirect()->back()->with('success', 'Gallery deleied successfully!');
    }
}
