<?php
namespace App\Http\Controllers;

use App\Models\NaacReport;
use App\Models\NaacCategory;
use Illuminate\Http\Request;

class NaacReportController extends Controller
{
    public function showCategoryReports($categoryId)
    {
       
        
        $category = NaacReport::with('category')->where('category_id' , $categoryId)->get();
        $categories =  NaacCategory::where('id' , $categoryId)->first();
       
       
        return view('frontend.naac', compact('category' , 'categories'));
    }
    public function create()
    {
        $naacReports = NaacReport::with('category')->orderBy('id' , 'desc')->paginate(10);  // Retrieve all reports with their categories
        $categories = NaacCategory::all(); // Fetch all categories
        return view('Naac.naac_report', compact('naacReports', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:naac_categories,id',
            'title' => 'required|string|max:255',
            'document' => 'required|mimes:pdf|max:10240', // Max size 10MB
        ]);

        // Handle the document upload

        if ($request->hasFile('document')) {
            $image = $request->file('document');
              $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();    
            $image->move(public_path('assets/document'), $fileName);
            $documentPath = 'assets/document/' . $fileName;
        }
        
        NaacReport::create([
            'owner_id' => 1,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'document' => $documentPath,
        ]);

        return redirect()->back()->with('success', 'Report added successfully!');
    }


    public function update(Request $request, $id)
{
    $request->validate([
        'category_id' => 'required|exists:naac_categories,id',
        'title' => 'required|string|max:255',
        'document' => 'nullable|mimes:pdf|max:10240',
    ]);

    $naacReport = NaacReport::findOrFail($id);
    $naacReport->category_id = $request->category_id;
    $naacReport->title = $request->title;

    if ($request->hasFile('document')) {
        if ($naacReport->document && file_exists(public_path($naacReport->document))) {
            unlink(public_path($naacReport->document));
        }

        $image = $request->file('document');
        $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/document'), $fileName);
        $documentPath = 'assets/document/' . $fileName;

        $naacReport->document = $documentPath;
    }

    $naacReport->save();

    return response()->json([
        'success' => true,
        'message' => 'Naac report updated successfully!',
    ]);}
    public function destroy($id)
    {
        $category = NaacReport::findOrFail($id);

        $category->delete();

        return response()->json(['success' => true]);
    }


    // Add other methods like edit, delete, etc.
}
