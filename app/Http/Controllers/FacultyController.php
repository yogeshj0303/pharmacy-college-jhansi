<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Facultypdf;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{

    public function faculty(){
        $Faculties = Faculty::with('course')->get()->groupBy('course_id');
        $Facultypdf = Facultypdf::latest()->take(4)->get();
       


        return view('frontend.faculties' , compact('Faculties' , 'Facultypdf'));




    }
    public function create()
    {
        $faculties = Faculty::orderBy('id' , 'desc' )->with('course')->paginate(5);
        $courses = Course::all();
        return view('Academic.faculty.create', compact('faculties', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'faculty_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'year' => 'required',
            'course_id' => 'required|exists:courses,id',
        ]);

       
        Faculty::create([
            'owner_id' => Auth::id(),
            'faculty_name' => $request->faculty_name,
            'specialization' => $request->specialization,
            'designation' => $request->designation,
            'year' => $request->year,
            'course_id' => $request->course_id,
            
        ]);

        return redirect()->back()->with('success', 'Faculty added successfully!');
    }
    

    public function destroy($id)
    {
        Faculty::findOrFail($id)->delete();
        return response()->json(['success' => 'Faculty deleted successfully!']);
    }

    public function update(Request $request, Faculty $faculty)
{
    $request->validate([
        'faculty_name' => 'required|string',
        'specialization' => 'required|string',
        'designation' => 'required|string',
        'course_id' => 'required|exists:courses,id',
        'year' => 'required',
    ]);

    $faculty->update($request->only(['faculty_name', 'specialization', 'designation', 'course_id', 'year']));

    // Return the updated faculty details as a response
    return response()->json([
        'status' => 'success',
        'faculty' => $faculty
    ]);
}

}
