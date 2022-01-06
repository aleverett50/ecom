<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;

class ProductController extends Controller
{

    public function show($slug)
    {

        $product = Product::where('slug', $slug)->first();
        
        return view('products.show')->with('product', $product);

    }


    public function search(Request $request)
    {

        $search = $request->q;

        $products = Product::where('title', 'LIKE', '%'.$search.'%')->get();

        return view('products.search')->with('search', $search)->with('products', $products);

    }
    
    
    public function category($slug)
    {

        $category = Category::where('slug', $slug)->latest()->first();
	
	if( ! $category ){
		return view('errors.404');
	}
	
	$products = Product::where('category_id', $category->id)->get();
        
        return view('products.category')->with('products', $products)->with('title', $category->title);

    }


}
