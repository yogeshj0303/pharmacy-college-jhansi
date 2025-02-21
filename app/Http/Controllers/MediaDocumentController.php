<?php

namespace App\Http\Controllers;

use App\Models\Mediadocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MediaDocumentController extends Controller
{


    public function newsletter(){
        $documents = Mediadocument::all(); 
        return view('frontend.news-letters' , compact('documents'));

        

    }
    public function create()
    {
        $documents = Mediadocument::orderBy('id', 'desc')->paginate(10); 
        return view('media.newsletter', compact('documents'));
    }

    // Store a new media document
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
        $mediaDocument = Mediadocument::create([
            'owner_id' => 1,
            'title' => $request->title,
            'document' => $documentPath,
        ]);

       return redirect()->back()->with('success' , 'Document upload successfully');
    }

    // Show the form for editing a media document
    public function edit($id)
    {
        $document = Mediadocument::findOrFail($id);
        return response()->json($document);
    }

    // Update the specified media document
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document' => 'nullable|file|mimes:pdf,doc,docx,jpg,png,zip|max:2048',
        ]);
    
        $mediaDocument = Mediadocument::findOrFail($id);
    
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
        $mediaDocument = Mediadocument::findOrFail($id);
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
