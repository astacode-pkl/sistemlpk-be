<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('layouts.categories.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('layouts.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $validated = $request->validate([
        'title' => 'required',
        ]
    );
    Category::create($validated);
    return redirect('/categories')->with('success', 'Category created successfully!');

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
        $category = Category::find($id);
        return view('layouts.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
        $category = Category::find($id);
        $category->title = $request->title;
        
        $category->update();

        return redirect('/categories')->with('success', 'Caregory updated successfully!');
}





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $galleries = Gallery::get()->where('category_id',$id);
        
        $destinationPath = 'images/galleries/';
        foreach ($galleries as $gallery ) {
            if ($gallery->image && file_exists(
                public_path($destinationPath.$gallery->image)
            )) {
                
                unlink(public_path($destinationPath.$gallery->image));
            }
        }
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }

    
}
