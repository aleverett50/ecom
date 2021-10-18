<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;

class CartItemController extends Controller
{







    public function store(Request $request)
    {

        $product = Product::find($request->product_id);

        if(session()->has('unique_id')){

            $unique_id = session('unique_id');

        }else{

            $unique_id = uniqid('', TRUE);

            /* set the unique session on first cart insert */

            session(['unique_id'=> $unique_id]);

        }
        
        CartItem::create([

            'product_id' => $product->id,
            'unique_id' => $unique_id,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'title' => $product->title
        ]);

        return redirect()->back()->with('success', 'The product has been added to your basket');

    }


}
