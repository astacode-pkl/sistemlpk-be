<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('categories.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
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
        // return view('program', compact('table'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = Crypt::decryptString($id);
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decryptString($id);
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
        $id = Crypt::decryptString($id);
        $category = Category::find($id);

        //when you delete category so images will be deleted in folder ----->
        $galleries = Gallery::get()->where('category_id', $id);
        $destinationPath = 'images/galleries/';
        foreach ($galleries as $gallery) {
            if ($gallery->image && file_exists(
                public_path($destinationPath . $gallery->image)
            )) {

                unlink(public_path($destinationPath . $gallery->image));
            }
        }
        // -------->

        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }
}
