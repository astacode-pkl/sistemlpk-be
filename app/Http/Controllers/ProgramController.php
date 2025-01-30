<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;


class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::latest()->get();
        return view('layouts.programs.program', compact('programs'));
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
        ]
    );
    $program = new Program;
    if ($image = $request->file('image')) {
        $destinationPath = 'images/programs/';
        
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
    $program->create(['image' => $imageName, 'title' => $validated['title'], 'description' => $validated['description']]);

 
    return redirect()->route('programs.index')->with('success', 'Program successfully created');
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
        $id = Crypt::decryptString($id);
        $program = Program::find($id);
        return view('layouts.programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            [
                'image' => 'image|mimes:jpeg,png,jpg',
                'title' => 'required',
                'description' => 'required'
            ]
        );
        $id = Crypt::decryptString($id);
        $program = Program::find($id);
        $program->title = $request->title;
        $program->description = $request->description;

        if ($image = $request->file('image')) {
            $destinationPath = 'images/programs/';

            if ($request->image && file_exists(
                public_path($destinationPath . $program->image)
            )) {

                unlink(public_path($destinationPath . $program->image));
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
            $imageName = $program->image;
        }
        $program->update(['image' => $imageName, 'title' => $validated['title'], 'description' => $validated['description']]);

        return redirect('/programs')->with('success', 'Gallery updated successfully!');
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decryptString($id);
        $program = Program::find($id);
        $destinationPath = 'images/programs/';
        if ($program->image && file_exists(
            public_path($destinationPath . $program->image)
        )) {

            unlink(public_path($destinationPath . $program->image));
        }
        $program->delete();
        return redirect()->back()->with('success', 'Program successfully deleted');
    }
}
