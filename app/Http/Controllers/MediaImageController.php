<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MediaImage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MediaImageController extends Controller
{





         public function imagepage(){
            $images = MediaImage::all()->groupBy('year');

            return view('frontend.image-gallery' , compact('images'));

         }








    public function create()
    {
        $images = MediaImage::orderBy('id', 'desc')->paginate(10);  // Fetch all videos from the database
        return view('media.image' , compact('images'));    }
        public function store(Request $request)
        {
            // Validate the input
            $request->validate([
                'year' => 'required|string',
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
            $image = new MediaImage();
            $image->owner_id = 1;
            $image->year = $request->year;
            $image->image = $imagePath;
            $image->save();
            return redirect()->back()->with('success' , 'image store successfully');
    
        }
    
        // Method to edit an existing image
        public function update(Request $request, $id)
        {
            // Find the image by ID
            $image = MediaImage::findOrFail($id);
        
            // Validate the input
            $request->validate([
                'year' => 'required|string',
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
        
            // Update the year
            $image->year = $request->year;
            $image->save();
        
            return response()->json(['success' => 'Image updated successfully']);
        }
        
        // Method to delete an image
        public function destroy($id)
        {
            // Find the image by ID and delete it
            $image = MediaImage::findOrFail($id);
            $image->delete();
    
            return response()->json(['success' => 'Image deleted successfully']);
        }


}