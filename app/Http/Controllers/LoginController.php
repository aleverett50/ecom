<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function __construct()
    {

        /*  add a guest middleware to redirect you to account if logged in */

         $this->middleware('guest')->except('logout');

    }


    public function index()
    {

        return view('login');

    }


    public function logout()
    {

        auth()->logout();
        return redirect()->route('login');

    }


    public function store(Request $request)
    {

        if ( auth()->attempt($request->only('email', 'password')) ) {
           
        return redirect()->route('accountHome');
       
        }
    
        return back()->with('error', 'Invalid login details');
    
    }


}
