<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BannerImage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class BannerImageController extends Controller
{
    public function create()
    {
        $images = BannerImage::paginate(10); // Fetch all videos from the database
        return view('Banner.create' , compact('images'));    }
        public function store(Request $request)
        {
            // Validate the input
            $request->validate([
                'image' => 'required',
            ]);
         
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                  $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();    
                $image->move(public_path('assets/image'), $fileName);
                $imagePath = 'assets/image/' . $fileName;
            }
            
           
    
            // Store the new image record
            $image = new BannerImage();
            $image->owner_id = 1;
            $image->image = $imagePath;
            $image->save();
            return redirect()->back()->with('success' , 'image store successfully');
    
        }
    
        // Method to edit an existing image
        public function update(Request $request, $id)
        {
            // Find the image by ID
            $image = BannerImage::findOrFail($id);
        
            // Validate the input
            $request->validate([
                'image' => 'required|file|image',
            ]);
        
            // Check if there's a new image uploaded
            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                $oldImagePath = public_path($image->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);  // Unlink the old image
                }
        
                // Get the new image and generate the file name
                $newImage = $request->file('image');
                $originalFileName = pathinfo($newImage->getClientOriginalName(), PATHINFO_FILENAME);
                $fileName = $originalFileName . '_' . time() . '.' . $newImage->getClientOriginalExtension();
        
                // Move the new image to the specified directory
                $newImage->move(public_path('assets/image'), $fileName);
                $imagePath = 'assets/image/' . $fileName;
        
                // Update the image record
                $image->image = $imagePath;
            }
        
            $image->save();
        
            return response()->json(['success' => 'Image updated successfully']);
        }
        
        // Method to delete an image
        public function destroy($id)
        {
            // Find the image by ID and delete it
            $image = BannerImage::findOrFail($id);
            $image->delete();
    
            return response()->json(['success' => 'Image deleted successfully']);
        }


}