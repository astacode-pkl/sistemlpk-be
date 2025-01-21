<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regulations = Category::get();
        // return view('',compact('regulations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator()->make($request->all(),[
            'title' => 'required',
            'slug' => 'required'
        ]);

        Category::create($request->all());
        return redirect('')->with('success','data success created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return view('');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $table = Category::find($id);
        $table->title = $request->title;
        $table->slug = $request->slug;
        $table->update();
        return redirect('')->with('success','data success updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $table = Category::find($id);
        $table->delete();
        return redirect()->back()->with('success','data success deleted');

     }
}
