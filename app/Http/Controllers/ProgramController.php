<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::latest()->get();
        return view('layouts.programs.program', ['programs' =>$programs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        
        $validated = $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg',
        'title' => 'required',
        'description' =>'required'
        ],
        [
            'image.required' => 'Image is required',
            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a JPEG, PNG, or JPG',
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
        ]
    );
    // convert to web 

    if ($image = $request->file('image')) {
        $destinationPath = 'images/programs/';
        
        //sh1 file name
        $sha1FileName = sha1($image->getClientOriginalName());


        $imageMimeType = $image->getMimeType();

        if (strpos($imageMimeType, 'image/') === 0) {
            $imageName = date('YmdHis') . '' . str_replace(' ', '', $sha1FileName);
            $image->move($destinationPath, $imageName);
            
            $sourceImagePath = public_path($destinationPath . $imageName);
            $webpImagePath = $destinationPath . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

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

    Program::create(['images' => $imageName, 'title' => $validated['title'], 'description' => $validated['description']]);
    return redirect('/programs')->with('success', 'Program created successfully!');

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
        $program = Program::find($id);
        return view('layouts.programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Start of Selection
    $program = Program::find($id);
    $program->title = $request->title;
    $program->description = $request->description;

    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($program->images && file_exists(public_path('storage/' . $program->images))) {
            unlink(public_path('storage/' . $program->images));
        }

        // Proses upload dan konversi gambar
        $image = $request->file('image');
        $sha1FileName = sha1($image->getClientOriginalName());
        $imageMimeType = $image->getMimeType();
        $destinationPath = 'storage/';
        
        if (strpos($imageMimeType, 'image/') === 0) {
            $imageName = date('YmdHis') . str_replace(' ', '', $sha1FileName);
            $image->move(public_path($destinationPath), $imageName);

            // Proses konversi ke WebP
            $sourceImagePath = public_path($destinationPath . $imageName);
            $webpImagePath = public_path($destinationPath . pathinfo($imageName, PATHINFO_FILENAME) . '.webp');

            $sourceImage = null;
            switch ($imageMimeType) {
                case 'image/jpeg':
                    $sourceImage = imagecreatefromjpeg($sourceImagePath);
                    break;
                case 'image/png':
                    $sourceImage = imagecreatefrompng($sourceImagePath);
                    break;
                default:
                    break;
            }

            if ($sourceImage !== false) {
                imagewebp($sourceImage, $webpImagePath);
                imagedestroy($sourceImage);
                unlink($sourceImagePath);  // Hapus gambar asli setelah konversi
                $program->images = pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
            }
        }
    }

    // Simpan perubahan
    $program->save();

    return redirect('/programs')->with('success', 'Program updated successfully!');
}






    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::find($id);
        Storage::delete($program->images);
        $program->delete();
        return redirect()->back()->with('success', 'Program successfully deleted');
    }

}
