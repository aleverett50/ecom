<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class LoginController extends Controller
{


    public function __construct()
    {

        /*  add a guest middleware to redirect you to account if logged in */

    //     $this->middleware('guest')->except('logout');

    }


    public function index()
    {

        return view('login');

    }


    public function logout()
    {
    
	if( auth()->user()->isAdmin() ){
	
		auth()->logout();
		return redirect()->route('dashboard');
	
	}

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


    public function forgotPassword()
    {

        return view('forgotpassword');

    }

    public function forgotPasswordPost(Request $request)
    {

        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );


        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['success' => __($status)])
                    : back()->withErrors(['email' => __($status)]);

        }


    public function resetPassword($token)
    {

        return view('resetpassword')->with('token', $token)->with('email', $_GET['email']);

    }


    public function resetPasswordPost(Request $request)
    {

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);


        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('loginPage')->with('success', __($status))
                    : back()->withErrors(['email' => [__($status)]]);





    }


}
