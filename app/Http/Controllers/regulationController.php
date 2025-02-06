<?php

namespace App\Http\Controllers;

use App\Models\Regulation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RegulationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regulations = Regulation::latest()->get();
        return view('regulations.regulations', compact('regulations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('regulations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => 'required',
                'icon' => 'required'
            ]
        );

        Regulation::create($validated);
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
        $id = Crypt::decryptString($id);
        $regulation = Regulation::find($id);
        return view('regulations.edit', compact('regulation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = Crypt::decryptString($id);
        $table = Regulation::find($id);
        $table->title = $request->title;
        $table->icon = $request->icon;
        $table->update();
        return redirect('regulations')->with('success', 'Regulation updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decryptString($id);
        $table = Regulation::find($id);
        $table->delete();
        return redirect()->back()->with('success', 'Regulation deleted successfully!!');
    }
}
