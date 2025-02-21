<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class NewAuthController extends Controller
{
    //     
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
     
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed
            return redirect('/dashboard')->with('success','You have successfully logged in');
        }

        // Authentication failed
       return redirect()->back()->withErrors(['error' => 'Invalid email or password']);
    }

   

    
   
   public function logout()
    {
       Auth::logout(); // Logout the user
        return redirect('/newlogin')->with('message','Logout successfully'); // Redirect to the home page or any other desired page

    }
}
