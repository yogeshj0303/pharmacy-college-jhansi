<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::orderBy('id', 'desc')->paginate(10);
        return view('contact.index' , compact('contacts'));
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'contact_no' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

     $contact =    Contact::create([
            'owner_id' => Auth::id(),
            'name' => $request->name,
            'contact_no' => $request->contact_no,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Contact message submitted successfully.');
    }

}