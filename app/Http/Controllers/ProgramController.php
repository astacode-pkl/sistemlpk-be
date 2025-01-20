<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    public function insert(Request $request)
    {
        if (!$request->file('image')->isValid()) {
           return redirect()->back();
        }
        $program = $request->validate([
            'images' => 'required | mimes:png,jpg, jpg | max: 2048',
            'title' => 'required',
            'description' => 'required'
        ],[
            'images.required' => "image wajib di isi"
        ]);
        // $request->image->store('image');
        $path = $request->file('image')->store('program_images');

        Program::create(['images' => $path,
                                    'title' => $program['title'],
                                    'description'=> $program['description']]);
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        if (!$request->file('image')->isValid()) {
           return redirect()->back();
        }
        $program = $request->validate([
            'images' => 'required | mimes:png,jpg | max: 2048',
            'title' => 'required',
            'description' => 'required'
        ],[
            'images.required' => 'images wajid di isi'
        ]);
        // $request->image->store('image');
        Program::create($program);
        return redirect()->back();
    }
    public function delete(Program $program)
    {
        if(Auth::check()){
            $program->delete();
        }
        return redirect()->back();
    }
}
