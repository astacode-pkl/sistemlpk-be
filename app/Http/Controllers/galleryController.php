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
        // $data = Gallery::with('categories')->get();

        // return view('index', compact('data'));
        return view('layouts.gallery');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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

        $galery = Gallery::create(['category_id' => $validated['category_id'], 'title' => $validated['title'],'image' => $path]);
        
        return redirect()->back()->with('success', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $galery = Gallery::find($id);
        return response()->json($galery);
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
        $galery = Gallery::find($id);
        $galery->title = $request->title;
        $galery->category_id = $request->category_id;
        $galery->image = $request->image;
        $galery->update();

        if ($request->wantsJson()) {
            // Respon JSON untuk permintaan API
            return response()->json([
                'message' => 'User updated successfully!',
                'data' => $galery,
            ]);
        }

        return redirect()->back()->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galery = Gallery::find($id);
        $galery->delete();
        return response()->json(['message'=> 'data dihapus','data' => $galery]);
    }
}
