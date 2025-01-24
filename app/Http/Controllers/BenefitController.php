<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $benefits = Benefit::latest()->get();
        return view('layouts.benefits.benefits',compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.benefits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'icon' =>'required'
            ]
        );

        Benefit::create([ 'title' => $validated['title'], 'icon' => $validated['icon']]);
        return redirect('/benefits')->with('success', 'Regulation created successfully!');
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
        $benefit = Benefit::find($id);
        return view('layouts.benefits.edit',compact('benefit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $table = Benefit::find($id);
        $table->title = $request->title;
        $table->icon = $request->icon;
        $table->update();
        return redirect('/benefits')->with('success','data success updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $table = Benefit::find($id);
        $table->delete();
        return redirect()->back()->with('success','data success deleted');

     }
}
