<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'name' => 'required|max:255|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'phone_number' => 'required|min:12',
            'email' => 'required|email:rfc,dns|unique:users',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validator error',
                'errors' => $validator->errors()
            ]);
        }

        $contacts = Contact::create($request->all());
        return response()->json([
            'status' => 200,
            'message' => 'data ditambahkan',
            'data' => $contacts
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
