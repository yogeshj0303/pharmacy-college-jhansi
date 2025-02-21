<?php

namespace App\Http\Controllers;

use App\Models\Facultypdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FacultyPdfController extends Controller
{
    // Show all media documents
    public function create()
    {
        $documents = Facultypdf::orderBy('id' , 'desc' )->paginate(10); 
        return view('Academic.faculty.upload_pdf', compact('documents'));
    }

    // Store a new media document
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'upload_pdf' => 'required|file|mimes:pdf,doc,docx,jpg,png,zip|max:2048',
        ]);

        if ($request->hasFile('upload_pdf')) {
            $image = $request->file('upload_pdf');
              $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();    
            $image->move(public_path('assets/document'), $fileName);
            $documentPath = 'assets/document/' . $fileName;
        }
        

        // Create new document record
        $mediaDocument = Facultypdf::create([
            'owner_id' => Auth::id(),
            'title' => $request->title,
            'upload_pdf' => $documentPath,
        ]);

       return redirect()->back()->with('success' , 'Document upload successfully');
    }

    // Show the form for editing a media document
    public function edit($id)
    {
        $document = Facultypdf::findOrFail($id);
        return response()->json($document);
    }

    // Update the specified media document
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'upload_pdf' => 'nullable|file|mimes:pdf,doc,docx,jpg,png,zip|max:2048',
        ]);
    
        $mediaDocument = Facultypdf::findOrFail($id);
    
        $mediaDocument->title = $request->title;
    
        if ($request->hasFile('upload_pdf')) {
            $oldDocumentPath = public_path($mediaDocument->upload_pdf);
            if (file_exists($oldDocumentPath)) {
                unlink($oldDocumentPath);
            }
    
            $image = $request->file('upload_pdf');
            $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/document'), $fileName);
            $documentPath = 'assets/document/' . $fileName;
    
            $mediaDocument->upload_pdf = $documentPath;
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
        $mediaDocument = Facultypdf::findOrFail($id);
        $oldDocumentPath = public_path($mediaDocument->upload_pdf);
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
