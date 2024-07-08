<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Tablefeed;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function HOME(){
        return view('UserFeedBack/Home');
    }
    
    public function THANKU(){
        return view('UserFeedBack/thanku');
    }
    public function ADMIN(){
        return view('UserFeedBack/adminlog');
    }
   
    public function DASHBOARD() {
        $totalFeedback = 100; 
        $givenFeedback = tablefeed::count();
        $remainingFeedback = tablefeed::where('status', 'remaining')->count();
        $remaining = $totalFeedback - $givenFeedback;
        $feedbacks = tablefeed::all(); // Or paginate if you have many feedbacks

        return view('UserFeedBack/Dashboard', compact('totalFeedback', 'givenFeedback', 'remaining', 'feedbacks'));
    }
    public function ABOUT(){
        return view('UserFeedBack/about');
    }
    public function LOGIN(){
        return view('UserFeedBack/Login');
    }
    public function REGISTER(){
        return view('UserFeedBack/register');
    }
    public function CONTECTUS(){
        return view('UserFeedBack/contectus');
    }
    public function FEEDBACK(){
        return view('UserFeedBack/feedback');
    }
   


    public function registercheck(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);

        return redirect("UserFeedBack/Home")->withSuccess('You have signed-in');
    }


    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);
    }

    public function checklogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
    
        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('UserFeedBack/Home'));
        }
    
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        

    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('UserFeedBack/Login');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'course' => 'required',
            'year' => 'required',
            'content_rating' => 'required',
            'campus_life_rating' => 'required',
            'faculty_rating' => 'required',
            'campus_rating' => 'required',
            'comments' => 'required'
        ]);
    
        // Create a new feedback entry in the database
        $Tablefeed = tablefeed::create([
            'name' => $validatedData['name'],
            'course' => $validatedData['course'],
            'year' => $validatedData['year'],
            'content_rating' => $validatedData['content_rating'],
            'campus_life_rating' => $validatedData['campus_life_rating'],
            'faculty_rating' => $validatedData['faculty_rating'],
            'campus_rating' => $validatedData['campus_rating'],
            'comments' => $validatedData['comments']
        ]);
    
        // Redirect to the thank you page
        return redirect('UserFeedBack/thanku');
    }


       
    public function adminstore(Request $request)
    {
        $credentials = $request->only('email', 'password');

       
        if ($credentials['email'] == 'Admin@gmail.com' && $credentials['password'] == 'Admin') {
           
            return redirect()->route('UserFeedBack/admindashboard');
        }

       
        return redirect()->route('UserFeedBack/adminlog')->with('error', 'Invalid credentials.');
    }

}