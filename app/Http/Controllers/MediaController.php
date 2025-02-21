<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MediaController extends Controller
{



     public function video(){
        $videos = Video::all();
        return view('frontend.video-gallery' , compact('videos'));

     }
    public function index()
    {
        $videos = Video::orderBy('id', 'desc')->paginate(10);
        // Fetch all videos from the database
        return view('media.video' , compact('videos'));    }

    public function create(){
        $videos = Video::paginate(10);// Fetch all videos from the database
        return view('media.video' , compact('videos'));
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'link' => 'required|url',
        ]);

        // Save video data to the database
        Video::create([
            'owner_id' => 1,
            'year' => $request->year,
            'link' => $request->link,
        ]);

        return redirect()->back()->with('success', 'Video added successfully!');
    }

    // Method to delete a video
    public function destroy($id)
    {
        
        $video = Video::findOrFail($id); // Find the video by ID
        $video->delete(); // Delete the video

        return response()->json(['success' => 'Video deleted successfully!']);
    }
    public function update(Request $request, $id)
{
    // Validate the data
    $request->validate([
        'link' => 'required|url',
        'year' => 'required|string',
    ]);

    // Find the video by ID
    $video = Video::findOrFail($id);

    // Update the video data
    $video->link = $request->link;
    $video->year = $request->year;
    $video->save();

    // Return a response
    return response()->json(['success' => 'Video updated successfully!']);
}


}