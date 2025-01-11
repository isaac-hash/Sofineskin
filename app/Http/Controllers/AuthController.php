<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    ////Redirect Logged-in user function
    public function __construct()
    {
        $this->middleware('guest')->only(['Login', 'Register']);
    }


    //Login-redirect function
    public function Login_redirect()
    {
        $userType = Auth::user()->usertype;

        if ($userType == "ad_1e") {
            return redirect()->route('admin-dashboard');
        } else {
            return redirect('/');
        }
    }


    //Logout function
    public function Logout(Request $request)
    {
        $request->session()->invalidate();

        Auth::logout();

        return redirect('/');
    }


    //Login page function (Login Page)
    public function Login()
    {
        return view('frontend.login');
    }


    //Login Function
    public function Login_User(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('/');
        } else {
            Alert::error('Invalid Credentials, Check your details and try again.');
            return redirect()->route('login')->with('error', 'Invalid Credentials, Check your details and try again.');
        }
    }



    //Register page function (Register Page)
    public function Register()
    {
        return view('frontend.register');
    }

    //Register_User to database
    public function Register_User(Request $request)
    {


        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8'
        ]);

        //Checks if email already exist b4 adding to the database
        $email =  User::where('email', $request->email)->exists();

        if ($email) {
            Alert::error('opps', 'Email Already Exist');
            return redirect()->back()->with('error', 'Email Already Exist.');
        } else {

            $data  = new User();

            // $data->fname = $request->first_name;
            $data->name = $request->last_name;
            $data->phone = $request->phone_number;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->address = $request->address;
            $data->usertype = 0;
            $data->profile_photo = 'default.jpg';
            $data->amount = 0;

            $data->save();

            Auth::login($data, $remember = true);
            Alert::success('Good', 'Account Registration Successfull');
            return redirect()->route('/')->with('success', "Account Registration Successfull");
        }
    }
}
