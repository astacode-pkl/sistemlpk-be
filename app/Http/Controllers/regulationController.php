<?php

namespace App\Http\Controllers;

use App\Models\Regulation;
use Illuminate\Http\Request;

class RegulationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regulations = Regulation::latest()->paginate(2);
        return view('layouts.regulations.regulations',compact('regulations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.regulations.create');
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

        Regulation::create([ 'title' => $validated['title'], 'icon' => $validated['icon']]);
        return redirect('/regulations')->with('success', 'Regulation created successfully!');
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
        
        $regulation = Regulation::find($id);
        return view('layouts.regulations.edit',compact('regulation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $table = Regulation::find($id);
        $table->title = $request->title;
        $table->icon = $request->icon;
        $table->update();
        return redirect('regulations')->with('success','data success updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $table = Regulation::find($id);
        $table->delete();
        return redirect()->back()->with('success','data success deleted');

     }
}
