<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{








    public function store(Request $request)
    {
    
        $this->validate($request, [
        
            'first_name' => 'required',
            'last_name' => 'required',
        //    'email' => 'required|email|unique:users',
            'email' => 'required|email',
            'password' => 'required'
        
        ]);

        User::create([
        
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        
        ]);


        //if (auth()->attempt($request->only('email', 'password'))) {
           
            return redirect()->route('checkout');
       
        //}
    
            return redirect()->route('checkout');

        

    }


}
