<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use DB;

class CartItemController extends Controller
{

    protected $shipping;
    protected $sub_total;
    protected $total;

    
    public function __construct()
    {
        // need middleware so we can acess session()
        $this->middleware(function ($request, $next){

            $this->shipping = session()->has('shipping') 
                            ? session('shipping') : 3.99;

            return $next($request);

        });        

    }
    


    /*
    public function index()
    {

        $cart = CartItem::where('unique_id', session('unique_id'))->get();
        return view('basket')->with('sub_total', $this->sub_total)
        ->with('shipping', $this->shipping)->with('total', $this->total)->with('cart', $cart);


    }
    */

    public function index()
    {

        return view('basket')->with('shipping', $this->shipping);

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

        // add new value to $request
        //$request->merge(['new' => 'hello']);

        $row = CartItem::where('id', $id)->where('unique_id', session('unique_id'))->first();

        if(!$row){

            return redirect()->back()->with('error', 'You cannot edit this cart item');

        } 

        if( !$request->quantity ){

            /* delete if they update with zero qty */
            
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


    public function setShipping(Request $request)
    {

        if($request->shipping != ''){
            session(['shipping'=> $request->shipping]);
        }
        return redirect()->back()->with('success', 'The shipping option has been updated');

    }


    public function checkout()
    {

        return view('checkout');      

    }


}
