<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Program;
use App\Models\LogHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $benefits = Benefit::latest()->get();
        return view('benefits.benefits', compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Program::get();
        return view('benefits.create', compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => 'required|string|max:255',
                'icon' => ['required', function ($attribute, $value, $fail) {
                    libxml_use_internal_errors(true); // Hindari error PHP jika XML tidak valid
                    $xml = simplexml_load_string($value);
                    if ($xml === false || $xml->getName() !== 'svg') {
                        $fail('The ' . $attribute . ' must be a valid SVG XML.');
                    }
                }],
                'program_id' => 'required|integer'
            ]
        );

        $newData = Benefit::create([
            'title' => $validated['title'],
            'icon' => $validated['icon'],
            'program_id' => $validated['program_id']
        ]);
        LogHistory::record('Create',  auth()->user()->name . ' created new Benefit',$newData);
        return redirect('/admin/benefits')->with('success', 'Benefit created successfully!!');
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
        $benefit = Benefit::find($id);
        $programs = Program::all();
        return view('benefits.edit', compact('benefit', 'programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            [
                'title' => 'required|string|max:255',
                'icon' => ['required', function ($attribute, $value, $fail) {
                    libxml_use_internal_errors(true); // Hindari error PHP jika XML tidak valid
                    $xml = simplexml_load_string($value);
                    if ($xml === false || $xml->getName() !== 'svg') {
                        $fail('The ' . $attribute . ' must be a valid SVG XML.');
                    }
                }],
                'program_id' => 'required|integer'
            ]
        );
        $id = Crypt::decryptString($id);
        $table = Benefit::find($id);
        $table->title = $request->title;
        $table->icon = $request->icon;
        $table->program_id = $request->program_id;
        $oldData = Benefit::where('id',$id)->get();
        $table->update();
        $newData = Benefit::where('id',$id)->get();
        LogHistory::record('Update',  auth()->user()->name . ' updated Benefit',$newData,$oldData);
        return redirect('/admin/benefits')->with('success', 'Benefit updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Crypt::decryptString($id);
        $table = Benefit::find($id);
        $oldData = Benefit::where('id',$id)->get();
        $table->delete();
        LogHistory::record('Delete',  auth()->user()->name . ' deleted Benefit','',$oldData);
        return redirect()->back()->with('success', 'Benefit deleted successfully!!');
    }
}
