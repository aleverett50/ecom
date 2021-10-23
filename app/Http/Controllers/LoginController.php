<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{


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
           
        return redirect()->route('login');
       
        }
    
        return back()->with('error', 'Invalid login details');
    
    }


}
