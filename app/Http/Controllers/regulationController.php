<?php

namespace App\Http\Controllers;

use App\Models\LogHistory;
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
        return view('regulations.regulations',compact('regulations'));
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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' =>['required', function ($attribute, $value, $fail) {
                libxml_use_internal_errors(true); // Hindari error PHP jika XML tidak valid
                $xml = simplexml_load_string($value);
                if ($xml === false || $xml->getName() !== 'svg') {
                    $fail('The '.$attribute.' must be a valid SVG XML.');
                }
            }]
            ]
        );


        Regulation::create(['title' => $validated['title'], 'icon' => $validated['icon']]);
        LogHistory::record('Create',  auth()->user()->name.' created new Regulation');
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
        return view('regulations.edit',compact('regulation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'icon' =>['required', function ($attribute, $value, $fail) {
                libxml_use_internal_errors(true); // Hindari error PHP jika XML tidak valid
                $xml = simplexml_load_string($value);
                if ($xml === false || $xml->getName() !== 'svg') {
                    $fail('The '.$attribute.' must be a valid SVG XML.');
                }
            }]
            ]
        );

        $id = Crypt::decryptString($id);
        $table = Regulation::find($id);
        $table->title = $request->title;
        $table->icon = $request->icon;
        $table->update();
        LogHistory::record('Update',  auth()->user()->name.' updated Regulation');
        return redirect('regulations')->with('success','data success updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decryptString($id);
        $table = Regulation::find($id);
        $table->delete();
        LogHistory::record('Delete',  auth()->user()->name.' deleted Regulation');
        return redirect()->back()->with('success','data success deleted');

     }
}
