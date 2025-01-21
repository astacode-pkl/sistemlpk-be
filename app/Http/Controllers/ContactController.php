<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::get();
        // return view();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view();
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' =>'required|max:255',
            'phone_number' => 'required|min:12|numeric',
            'email' => 'required|email|unique:users',
            'message' => 'required'
        ]);
        Contact::create($validateData);
        

        
    
    //  return redirect('')->with('success','data success created');

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
        // return view();
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'name' => 'required|max:250',
        'phone_number' => 'required|min:12|numeric',
        'email' => 'require|email',
        'message' => 'required'
        ]);
        $table = Contact::find($id);
        $table->name = $request->name;
        $table->phone_number = $request->phone_number;
        $table->name = $request->name;
        $table->email = $request->email;

        $table->update();
        return redirect('')->with('success','data success updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $table = Contact::find($id);
        $table->delete();
        return redirect()->back()->with('success','data success updated');
        
    }
}
