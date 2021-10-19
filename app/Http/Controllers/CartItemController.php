<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;

class CartItemController extends Controller
{


    public function index()
    {

        $cart = CartItem::where('unique_id', session('unique_id'))->get();
        return view('basket')->with('cart', $cart);

    }




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


    public function edit(Request $request, $id)
    {

        $row = CartItem::where('id', $id)->where('unique_id', session('unique_id'))->first();

        if(!$row){

            return redirect()->back()->with('error', 'You cannot edit this cart item');

        } 

        if( !$request->quantity ){
            $row->delete();
            return redirect()->back()->with('success', 'The cart item has been deleted');
        }

        $row->update(['quantity' => $request->quantity]);
        return redirect()->back()->with('success', 'The cart item has been updated');

    }


    public function destroy($id)
    {

        $row = CartItem::where('id', $id)->where('unique_id', session('unique_id'))->first();

        if(!$row){

            return redirect()->back()->with('error', 'You cannot delete this cart item');

        } 

        $row->delete();
        return redirect()->back()->with('success', 'The cart item has been deleted');


    }


}
