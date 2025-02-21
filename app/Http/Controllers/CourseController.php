<?php
namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Models\Course;
use Validator;

use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function create()
    {
        $courses = Course::orderBy('id' , 'desc')->paginate(10); 
        return view('Academic.Course.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'mode' => 'required|string',
            'duration' => 'required|string',
            'seats' => 'required|integer',
            'entrance_test' => 'nullable|string',
            'description' => 'required|string',
            'eligibility' => 'required|string',
        ]);

        $courseData = $request->all();
        $courseData['owner_id'] = Auth::id(); 
    
        Course::create($courseData);
        return redirect()->back()->with('success', 'Course added successfully.');
    }
    public function edit($id)
{
    $course = Course::find($id);
    return response()->json(['course' => $course]);
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'course_name' => 'required|string|max:255',
        'mode' => 'required|string|max:255',
        'duration' => 'required|string|max:255',
        'seats' => 'required|integer',
        'entrance_test' => 'nullable|string|max:255',
        'description' => 'required|string',
        'eligibility' => 'required|string|max:255',
    ]);

    $course = Course::find($id);
    if (!$course) {
        return response()->json(['message' => 'Course not found'], 404);
    }

    $course->update($validated);

    return response()->json(['course' => $course]);
}   


public function course(){
    $courses = Course::all();

    return view('frontend.courses' , compact('courses'));
}

public function enquiries()
    {
        $Enquiry = Enquiry::paginate(10);
        return view('Enquiry.enquiry', compact('Enquiry'));
    }
public function submitForm(Request $request)
{
    
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'mobile' => 'required|digits:10',
        'state' => 'required',
        'district' => 'required',
        'program' => 'required',
        'course' => 'required',
        'specialization' => 'required',
        'jee_mains' => 'required',
        'agree' => 'accepted',

    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    // **Data Store Karein**
    Enquiry::create([
        'owner_id' => Auth::id(),
        'name' => $request->name,
        'email' => $request->email,
        'mobile_no' => $request->mobile,
        'state' => $request->state,
        'city' => $request->district,
        'program' => $request->program,
        'course' => $request->course,
        'specialization' => $request->specialization,
        'jee_mains' => $request->jee_mains,
        'agree' => $request->agree,
    ]);

    return response()->json(['success' => 'Form submitted successfully!']);
}



    public function destroy($id)
    {
        Course::findOrFail($id)->delete();
        return response()->json(['success' => 'Course deleted successfully!']);
    }
}
