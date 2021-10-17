<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function index()
    {

        // session(['key'=> 'hello']);
        // session()->forget('key');
        // print session('key');

        return view('pages.index');

    }



}
