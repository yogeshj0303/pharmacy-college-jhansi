<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ActivityCategory;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function getActivities($categoryId)
    {
        $activities = Activity::where('category_id', $categoryId)->get();
        return response()->json(['activities' => $activities]);
    }
    public function create()
    {
        $activities = Activity::with('category')->orderBy('id', 'desc')->paginate(10); // Retrieve all activities with their categories
        $categories = ActivityCategory::all(); // Fetch all categories
        return view('Activity.activity', compact('activities', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:activity_categories,id',
            'title' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,jpeg,png|max:5120', // Max size 5MB
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images'), $fileName);
            $imagePath = 'assets/images/' . $fileName;
        }

        Activity::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Activity added successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:activity_categories,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:5120',
        ]);

        $activity = Activity::findOrFail($id);
        $activity->category_id = $request->category_id;
        $activity->title = $request->title;

        if ($request->hasFile('image')) {
            if ($activity->image && file_exists(public_path($activity->image))) {
                unlink(public_path($activity->image));
            }

            $image = $request->file('image');
            $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images'), $fileName);
            $imagePath = 'assets/images/' . $fileName;

            $activity->image = $imagePath;
        }

        $activity->save();

        return response()->json([
            'success' => true,
            'message' => 'Activity updated successfully!',
        ]);
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->image && file_exists(public_path($activity->image))) {
            unlink(public_path($activity->image));
        }

        $activity->delete();

        return response()->json(['success' => true]);
    }
}
