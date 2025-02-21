<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\NaacCategory;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class NaacController extends Controller
{

  public function create()
    {
        $naacCategories = NaacCategory::orderBy('id' , 'desc')->paginate(10); 

        // Return the view with the documents
        return view('Naac.naac_category', compact('naacCategories'));
    }

    // Store a newly created category in storage
    public function store(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255',
        ]);

        // If validation fails, return back with error messages
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new NaacCategory instance
        NaacCategory::create([
            'owner_id' => 1,
            'category_name' => $request->category_name,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Naac Category created successfully.');
    }

    // Update the specified category in storage
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|string|max:255',
        ]);

        // If validation fails, return back with error messages
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the NaacCategory by ID
        $category = NaacCategory::findOrFail($id);

        // Update the category
        $category->update([
            'category_name' => $request->category_name,
        ]);

        return response()->json(['success' => 'Naac Category updated successfully']);
    }

    public function destroy($id)
    {
        // Find the NaacCategory by ID
        $category = NaacCategory::findOrFail($id);

        // Delete the category
        $category->delete();

        // Return a success response
        return response()->json(['success' => true]);
    }






}