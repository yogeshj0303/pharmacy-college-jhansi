<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityCategory;

class ActivityCatController extends Controller
{
    public function index()
    {
        $ActivityCategories = ActivityCategory::paginate(10);
        return view('Activity.create', compact('ActivityCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        ActivityCategory::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->back()->with('success', 'Activity Category added successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category = ActivityCategory::findOrFail($id);
        $category->update([
            'category_name' => $request->category_name,
        ]);

        return response()->json(['success' => true, 'message' => 'Activity Category updated successfully!']);
    }

    public function destroy($id)
    {
        $category = ActivityCategory::findOrFail($id);
        $category->delete();

        return response()->json(['success' => true, 'message' => 'Activity Category deleted successfully!']);
    }
}
