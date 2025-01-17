<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function insert(Request $request)
    {
        $contact = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        Contact::create($contact);
        return redirect()->back();
    }
    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }
}
