<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct()
    {
   
	/* we need the auth middleware becasue you need to be logged in for the dashboard, but we also need the additional admin middleware which sees if user isAdmin() is set in User model */
    
        $this->middleware(['auth', 'admin'])->except('index');
    }
    

    
    public function index()
    {

        return view('dashboard.index');

    }
    
    public function home()
    {

        return view('dashboard.home');

    }
    
}
