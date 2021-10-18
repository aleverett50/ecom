<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{


    public function index()
    {

        $products = Product::all();

        return view('pages.index')->with('products', $products);

    }



}
