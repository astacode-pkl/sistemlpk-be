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
        $program = Program::all();
        return view('layouts.programs.program', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $program = Program::all();
        return view('layouts.programs.create', ['program' => $program]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'imageUpload' =>'required|image|mimes:jpeg,png,jpg',
            'title' => 'required',
            'description' => 'required',
        ]);

        $extension = $request->file('imageUpload')->extension();
        // store image \
        $imgname = date('dmyHis').'.'.$extension;
        // move to public file
        $request->file('imageUpload')->move(public_path('images/programs_images'), $imgname);
        Program::create(['title' => $validated['title'],'description' => $validated['description'],'images' => $imgname]);
        return redirect('/program')->withSuccess("Data succes Created");

        // Program::create(['title' => $validated['title'],'description' => $validated['description'],'image' => $image]);
        
        // return redirect()->with('success', 'image created successfully!');
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
    $program = Program::find($id);

    // Hapus gambar lama jika ada
    if ($program->images && file_exists(public_path('images/programs_images/' . $program->images))) {
        unlink(public_path('images/programs_images/' . $program->images));
    } else {
        logger('File tidak ditemukan atau tidak bisa dihapus: ' . public_path('images/programs_images/' . $program->images));
    }

    // Update data program
    $program->title = $request->title;
    $program->description = $request->description;

    // Simpan gambar baru
    if ($request->hasFile('imageUpload')) {
        // Ambil nama asli file tanpa ekstensi
        $originalName = pathinfo($request->file('imageUpload')->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $request->file('imageUpload')->getClientOriginalExtension();
        $imgname = time() . '-' . sha1($originalName) . '.' . $extension;
        $request->file('imageUpload')->move(public_path('images/programs_images'), $imgname);
    
        // Simpan nama file ke database
        $program->images = $imgname;
    }

    $program->update();

    return redirect('/program')->with('success', 'Program updated successfully!');
}





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::find($id);
    
        // Hapus file dari public folder jika ada
        if ($program->images && file_exists(public_path('images/programs_images/' . $program->images))) {
            unlink(public_path('images/programs_images/' . $program->images));
        }
    
        // Hapus data program dari database
        $program->delete();
    
        return redirect()->back()->with('success', 'Program successfully deleted');
    }

}
