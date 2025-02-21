<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{



        public function create(){
            $faqs = Faq::orderBy('id' , 'desc')->paginate(10);
            return view('Faq.create' , compact('faqs'));
        }

    public function store(Request $request)
    {
        $request->validate([
            'faq_question.*' => 'required|string|max:255',
            'faq_answer.*' => 'required|string',
        ]);
        
        foreach ($request->faq_question as $index => $question) {

            Faq::create([
                'owner_id' => Auth::id(),
                'faq_question' => $question,
                'faq_answer' => $request->faq_answer[$index],
            ]);
        }

        return redirect()->back()->with('success', 'FAQs added successfully!');
    }

    public function destroy($id)
    {
        $mediaDocument = Faq::findOrFail($id);
       

        // Delete the database record
        $mediaDocument->delete();

        return response()->json([
            'success' => true,
            'message' => 'Faq deleted successfully!',
        ]);

        
    }

    public function update(Request $request, $id)
{
    $faq = Faq::findOrFail($id);
    $faq->faq_question = $request->faq_question;
    $faq->faq_answer = $request->faq_answer;
    $faq->save();

    return response()->json(['status' => 'success']);
}

}
