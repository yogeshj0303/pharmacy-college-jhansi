<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeBoard;

class NoticeBoardController extends Controller
{
    public function create()
    {
        $notices = NoticeBoard::latest()->paginate(10); 
        return view('NoticeBoard.create', compact('notices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required|string|max:255',
            'upload_pdf' => 'required|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('upload_pdf')) {
            $image = $request->file('upload_pdf');
              $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();    
            $image->move(public_path('assets/document'), $fileName);
            $documentPath = 'assets/document/' . $fileName;
        }
        

        NoticeBoard::create([
            'owner_id' => 1,
            'category' => $request->category,
            'title' => $request->title,
            'upload_pdf' => $documentPath,
        ]);

        return redirect()->back()->with('success', 'Notice added successfully.');
    }





    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'category' => 'required',
            'title' => 'required|string|max:255',
            'upload_pdf' => 'nullable|mimes:pdf|max:2048', // optional for update
        ]);
    
        // Find the notice by ID
        $notice = NoticeBoard::find($id);
    
        if (!$notice) {
            return redirect()->back()->with('error', 'Notice not found.');
        }
    
        // Store the new PDF if it is uploaded
        $documentPath = $notice->upload_pdf; // Default to the current file path in the DB
    
        if ($request->hasFile('upload_pdf')) {
            // Delete the old file if it exists
            if ($notice->upload_pdf && file_exists(public_path($notice->upload_pdf))) {
                unlink(public_path($notice->upload_pdf));
            }
    
            // Upload the new file
            $image = $request->file('upload_pdf');
            $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/document'), $fileName);
            $documentPath = 'assets/document/' . $fileName; // Store the new file path
        }
    
        // Update the notice
        $notice->update([
            'category' => $request->category,
            'title' => $request->title,
            'upload_pdf' => $documentPath,
        ]);
    
        return response()->json(['success' => 'Image updated successfully']);
    }
    
    



    public function destroy($id)
    {
        $NoticeBoard = NoticeBoard::findOrFail($id);
        $NoticeBoard->delete();

        return response()->json(['success' => 'NoticeBoard deleted successfully']);
    }

}
