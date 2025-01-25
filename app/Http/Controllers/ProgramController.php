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
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:4096',
        ], [
            'title.required' => 'Title is required',
            'title.max' => 'Title must be less than 255 characters',
    
            'description.required' => 'Description is required',
            'description.string' => 'Description must be a text',
    
            'image.required' => 'Image is required',
            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a JPEG, PNG, or JPG',
            'image.max' => 'Image must be less than 4 MB',
        ]);
    
        // Mengambil semua input dan memproses harga
        $input = $request->all();
    
        //convert to webp
        if ($image = $request->file('image')) {
            $destinationPath = 'storage/program_images/';
    
            $originalFileName = $image->getClientOriginalName();
            $imageMimeType = $image->getMimeType();
    
            if (strpos($imageMimeType, 'image/') === 0) {
                $imageName = date('YmdHis') . '' . str_replace(' ', '', $originalFileName);
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
    
                    $input['image'] = pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                }
            }
        } else {
            $input['image'] = '';
        }
    
        $program = Program::create($input);
    
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
        $program = Program::find($id);
        return view('layouts.programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mendapatkan data program berdasarkan ID
        $program = Program::find($id);

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:4096',
        ], [
            'title.required' => 'Title is required',
            'title.max' => 'Title must be less than 255 characters',

            'description.required' => 'Description is required',
            'description.string' => 'Description must be a text',

            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a JPEG, PNG, or JPG',
            'image.max' => 'Image must be less than 4 MB',
        ]);

        // Simpan data lama untuk log
        // $oldData = $program->toArray();

        $input = $request->all();

        //convert to webp
        if ($image = $request->file('image')) {
            $destinationPath = 'storage/program_images/';

            // Hapus gambar lama jika ada
            if ($program->image && file_exists(public_path($destinationPath . $program->image))) {
                unlink(public_path($destinationPath . $program->image));
            }

            // Mengambil nama file asli dan ekstensinya
            $originalFileName = $image->getClientOriginalName();

            // Membaca tipe MIME dari file image
            $imageMimeType = $image->getMimeType();

            // Menyaring hanya tipe MIME image yang didukung
            if (strpos($imageMimeType, 'image/') === 0) {
                // Menggabungkan waktu dengan nama file asli
                $imageName = date('YmdHis') . '' . str_replace(' ', '', $originalFileName);

                // Simpan image asli ke tujuan yang diinginkan
                $image->move($destinationPath, $imageName);

                // Path image asli
                $sourceImagePath = public_path($destinationPath . $imageName);

                // Path untuk menyimpan image WebP
                $webpImagePath = $destinationPath . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

                // Membaca image asli dan mengonversinya ke WebP
                $sourceImage = null;
                switch ($imageMimeType) {
                    case 'image/jpeg':
                        $sourceImage = @imagecreatefromjpeg($sourceImagePath);
                        break;
                    case 'image/png':
                        $sourceImage = @imagecreatefrompng($sourceImagePath);
                        break;
                    default:
                        break;
                }

                // Jika image asli berhasil dibaca
                if ($sourceImage !== false) {
                    // Membuat image baru dalam format WebP
                    imagewebp($sourceImage, $webpImagePath);

                    // Hapus image asli dari memori
                    imagedestroy($sourceImage);

                    // Hapus file asli setelah konversi selesai
                    @unlink($sourceImagePath);

                    // Simpan hanya nama file image ke dalam array input
                    $input['image'] = pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
                }
            }
        } else {
            // Jika tidak ada upload image baru, gunakan image yang ada
            $input['image'] = $program->image;
        }

        // Update data program
        $program->update($input);

        return redirect()->route('programs.index')->with('success', 'Program successfully updated');

            // return redirect('/programs')->with('success', 'Gallery updated successfully!');
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::find($id);
        Storage::delete('storage/'.$program->images);
        $program->delete();
        return redirect()->back()->with('success', 'Program successfully deleted');
    }

}
