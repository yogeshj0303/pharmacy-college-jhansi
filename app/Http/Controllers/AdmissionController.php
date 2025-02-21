<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Faq;
use App\Models\AdmissionPdf;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AdmissionController extends Controller
{
    public function admission(){
        $faq = Faq::all();
        $AdmissionPdf = AdmissionPdf::all();

        return view('frontend.admission' , compact('faq' , 'AdmissionPdf'));

    }

    public function create()
    {
        $documents = AdmissionPdf::paginate(10); 
        return view('Enquiry.admission', compact('documents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf,doc,docx,jpg,png,zip|max:2048',
        ]);

        if ($request->hasFile('document')) {
            $image = $request->file('document');
              $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();    
            $image->move(public_path('assets/document'), $fileName);
            $documentPath = 'assets/document/' . $fileName;
        }
        

        // Create new document record
        $mediaDocument = AdmissionPdf::create([
            'owner_id' => Auth::id(),
            'title' => $request->title,
            'document' => $documentPath,
        ]);

       return redirect()->back()->with('success' , 'Document upload successfully');
    }

    // Show the form for editing a media document
    public function edit($id)
    {
        $document = AdmissionPdf::findOrFail($id);
        return response()->json($document);
    }

    // Update the specified media document
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document' => 'nullable|file|mimes:pdf,doc,docx,jpg,png,zip|max:2048',
        ]);
    
        $mediaDocument = AdmissionPdf::findOrFail($id);
    
        $mediaDocument->title = $request->title;
    
        if ($request->hasFile('document')) {
            $oldDocumentPath = public_path($mediaDocument->document);
            if (file_exists($oldDocumentPath)) {
                unlink($oldDocumentPath);
            }
    
            $image = $request->file('document');
            $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/document'), $fileName);
            $documentPath = 'assets/document/' . $fileName;
    
            $mediaDocument->document = $documentPath;
        }
    
        $mediaDocument->save();
    
        return response()->json([
            'success' => true,
            'message' => 'Document updated successfully!',
        ]);
    }
    

    // Delete the specified media document
    public function destroy($id)
    {
        $mediaDocument = AdmissionPdf::findOrFail($id);
        $oldDocumentPath = public_path($mediaDocument->document);
        if (file_exists($oldDocumentPath)) {
            unlink($oldDocumentPath);
        }

        // Delete the database record
        $mediaDocument->delete();

        return response()->json([
            'success' => true,
            'message' => 'Document deleted successfully!',
        ]);
    }





}