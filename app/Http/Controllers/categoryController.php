<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use App\Models\LogHistory;
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
                'title' => 'required|string|max:50|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            ]
        );

        // Ubah seluruh string menjadi huruf kecil, lalu ubah huruf pertama menjadi huruf besar
        $validated['title'] = ucwords(strtolower($validated['title']));

        $newData = Category::create($validated); 
        LogHistory::record('Create',  auth()->user()->name.' created new Category',$newData);

        return redirect('/cmslpktsukuba/categories/')->with('success', 'Category created successfully!!');
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
        $id = Crypt::decryptString($id);
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            [
                'title' => 'required|string|max:30|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            ]
        );
        $id = Crypt::decryptString($id);
        $category = Category::find($id);
        $category->title = $validated['title'];
        $oldData = Category::where('id',$id)->get();
        $category->update();
        $newData = Category::where('id',$id)->get();
        LogHistory::record('Update',  auth()->user()->name.' updated Category',$newData,$oldData);

        return redirect('/cmslpktsukuba/categories/')->with('success', 'Category updated successfully!!');
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
        $oldData = Category::where('id',$id)->get();
        $category->delete();
        LogHistory::record('Delete',  auth()->user()->name.' deleted Category','',$oldData);
        return redirect()->back()->with('success', 'Category deleted successfully!!');
    }
}
