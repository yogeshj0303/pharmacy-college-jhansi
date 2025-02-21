<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Career;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class CareerController extends Controller
{

    public function index()
    {
        $careers = Career::paginate(10); 
        return view('career.index', compact('careers'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact_no' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'qualification' => 'required|string|max:255',
            'experience' => 'required|integer|min:0',
            'applied_for' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

      

        if ($request->hasFile('resume')) {
            $image = $request->file('resume');
              $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();    
            $image->move(public_path('assets/document'), $fileName);
            $documentPath = 'assets/document/' . $fileName;
        }

        Career::create([
            'owner_id' => Auth::id(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'contact_no' => $request->contact_no,
            'email' => $request->email,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'applied_for' => $request->applied_for,
            'specialization' => $request->specialization,
            'resume' => $documentPath,
        ]);

        return redirect()->back()->with('success', 'Career application submitted successfully!');
    }


}