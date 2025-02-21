<?php
namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{



    public function edit($id)
    {
        $address = Address::findOrFail($id);
        return view('Enquiry.address', compact('address'));
    }


    public function updateaddress(Request $request , $id){
        $request->validate([

            'address' => 'required',
            'pin_no' => 'required|digits:6',
            'contact_no' => 'required|digits:10',
            'email' => 'required|email',


        ]);

        $address = Address::findOrFail($id);
        
        $address->update([
             'address' => $request->address,
             'pin_no' => $request->pin_no,
             'contact_no' => $request->contact_no,
             'email' => $request->email,

        ]);
        return redirect()->back()->with('success' , 'Address updated successfully');
    }
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->paginate(10);
        return view('events.index', compact('events'));
    }
         
    public function event(){
        $event = Event::orderBy('id' , 'desc')->take(1)->first();
        return view('frontend.event', compact('event'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:250',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
              $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();    
            $image->move(public_path('assets/image'), $fileName);
            $imagePath = 'assets/image/' . $fileName;
        }
        
       


        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('event.index')->with('success', 'Event created successfully.');
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|max:250',
        'description' => 'required',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    
    $event = Event::findOrFail($id);
    $event->name = $request->name;
    $event->description = $request->description;

    if ($request->hasFile('image')) {
        if ($event->image && file_exists(public_path($event->image))) {
            unlink(public_path($event->image));
        }

        $image = $request->file('image');
        $originalFileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
        $fileName = $originalFileName . '_' . time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/image'), $fileName);
        $event->image = 'assets/image/' . $fileName;
    }


    $event->save();
    return response()->json(['success' => true, 'message' => 'Event updated successfully!']);
}

public function destroy($id)
{
    // Find the image by ID and delete it
    $image = Event::findOrFail($id);
    $image->delete();

    return response()->json(['success' => 'Image deleted successfully']);
}

}
