<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galleries =  Gallery::latest()->get();
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

        $validated = $request->validate(
            [
                'category_id' => 'required',
                'title' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg'
            ]
        );
        if ($image = $request->file('image')) {
            $destinationPath = 'images/galleries/';
            //sh1 file name
            $sha1FileName = sha1($image->getClientOriginalName());
            $imageMimeType = $image->getMimeType();

            if (strpos($imageMimeType, 'image/') === 0) {
                $imageName = date('YmdHis') . '' . str_replace(' ', '', $sha1FileName);
                $image->move($destinationPath, $imageName);

                $sourceImagePath = public_path($destinationPath . $imageName);
                $webpImagePath = $destinationPath . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

                $sourceImage = null;
                switch ($imageMimeType) {
                    case 'image/jpeg':
                        $sourceImage = @imagecreatefromjpeg($sourceImagePath);
                        break;
                    case 'image/png':
                        $sourceImage = @imagecreatefrompng($sourceImagePath);
                        break;
                    default:
                        $sourceImage = false;
                        break;
                }

                if ($sourceImage !== false) {
                    imagewebp($sourceImage, $webpImagePath);
                    imagedestroy($sourceImage);
                    @unlink($sourceImagePath);

                    $imageName = pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                }
            }
        } else {
            $imageName = '';
        }

        Gallery::create(['category_id' => $validated['category_id'], 'title' => $validated['title'], 'image' => $imageName]);
        return redirect('/galleries')->with('success', 'Gallery created successfully!');
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
        $validated = $request->validate(
            [
                'image' => 'image|mimes:jpeg,png,jpg',
                'title' => 'required',
                'category_id' => 'required'
            ]
        );
        $gallery = Gallery::find($id);
        $gallery->title = $request->title;
        $gallery->category_id = $request->category_id;
        if ($image = $request->file('image')) {
            $destinationPath = 'images/galleries/';

            if ($request->image && file_exists(
                public_path($destinationPath . $gallery->image)
            )) {

                unlink(public_path($destinationPath . $gallery->image));
            }
            //sh1 file name
            $sha1FileName = sha1($image->getClientOriginalName());

            $imageMimeType = $image->getMimeType();

            if (strpos($imageMimeType, 'image/') === 0) {
                $imageName = date('YmdHis') . '' . str_replace(' ', '', $sha1FileName);
                $image->move($destinationPath, $imageName);

                $sourceImagePath = public_path($destinationPath . $imageName);
                $webpImagePath = $destinationPath . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                $sourceImage = null;
                switch ($imageMimeType) {
                    case 'image/jpeg':
                        $sourceImage = @imagecreatefromjpeg($sourceImagePath);
                        break;
                    case 'image/png':
                        $sourceImage = @imagecreatefrompng($sourceImagePath);
                        break;
                    default:
                        $sourceImage = false;
                        break;
                }

                if ($sourceImage !== false) {
                    imagewebp($sourceImage, $webpImagePath);
                    imagedestroy($sourceImage);
                    @unlink($sourceImagePath);

                    $imageName = pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                }
            }
        } else {
            $imageName = $gallery->image;
        }

        $gallery->update(['image' => $imageName]);

        return redirect('/galleries')->with('success', 'Gallery updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decryptString($id);
        $gallery = Gallery::find($id);
        $destinationPath = 'images/galleries/';
        if ($gallery->image && file_exists(
            public_path($destinationPath . $gallery->image)
        )) {

            unlink(public_path($destinationPath . $gallery->image));
        }
        $gallery->delete();
        return redirect()->back()->with('success', 'Gallery deleted successfully!');
    }
}
