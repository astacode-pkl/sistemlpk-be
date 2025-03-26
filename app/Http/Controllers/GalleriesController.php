<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use App\Models\LogHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Helpers\ImageHelper;

class GalleriesController extends Controller
{
    

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galleries = Gallery::latest()->get();
        return view('galleries.galleries', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('galleries.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:100',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);

        // Proses gambar dengan Helper
        $imageName = ImageHelper::processImage($request->file('image'), 'images/galleries/');

        $newData = Gallery::create([
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'image' => $imageName
        ]);

        LogHistory::record('Create', auth()->user()->name . ' created new gallery', $newData);
        return redirect('/admin/galleries/')->with('success', 'Gallery created successfully!!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id = Crypt::decryptString($id);
        $gallery = Gallery::find($id);
        $categories = Category::get();
        return view('galleries.edit', ['gallery' => $gallery, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decryptString($id);
        $validated = $request->validate([
            'category_id' => 'required',
            'title' => 'required|string|max:100',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);

        $gallery = Gallery::find($id);
        $gallery->title = $request->title;
        $gallery->category_id = $request->category_id;
        $oldData = Gallery::where('id', $id)->get();

        if ($request->hasFile('image')) {
            ImageHelper::deleteImage($gallery->image);
            $imageName = ImageHelper::processImage($request->file('image'), 'images/galleries/');
        } else {
            $imageName = $gallery->image;
        }

        $gallery->update(['image' => $imageName]);

        $newData = Gallery::where('id', $id)->get();
        LogHistory::record('Update', auth()->user()->name . ' updated gallery', $newData, $oldData);

        return redirect('/admin/galleries')->with('success', 'Gallery updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decryptString($id);
        $gallery = Gallery::find($id);
        $oldData = Gallery::where('id', $id)->get();

        ImageHelper::deleteImage($gallery->image);

        $gallery->delete();

        LogHistory::record('Delete', auth()->user()->name . ' deleted gallery', '', $oldData);
        return redirect()->back()->with('success', 'Gallery deleted successfully!!');
    }

}
