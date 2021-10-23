<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\CartItem;
use Illuminate\Support\Facades\Hash;
use DB;

class OrderController extends Controller
{

    public function store(Request $request)
    {      


      //  User::truncate();
        Order::truncate();
        OrderItem::truncate();

        $cart = CartItem::where('unique_id', session('unique_id'));

        if( ! count($cart->get()) ){

            return redirect('basket')->with('error', 'Your session has expired');

        }
        
        if( auth()->check() ){

            $this->validate($request, [
        
                'first_name' => 'required',
                'last_name' => 'required',
                'address_1' => 'required',
                'phone' => 'required',
                'town' => 'required',
                'postcode' => 'required',
                'country' => 'required',

            ]);

        } else{

            $this->validate($request, [
            
                'first_name' => 'required',
                'last_name' => 'required',
            //  'email' => 'required|email|unique:users',
                'email' => 'required|email',
                'address_1' => 'required',
                'phone' => 'required',
                'town' => 'required',
                'postcode' => 'required',
                'country' => 'required',
                'password' => 'required'
            ]);


        }


        if( ! auth()->check() ){


            $user = User::create([
            
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'first_name' => $request->first_name,
                'phone' => $request->phone,
                'last_name' => $request->last_name,
                'address_1' => $request->address_1,
                'address_2' => $request->address_2,
                'town' => $request->town,
                'postcode' => $request->postcode,
                'country' => $request->country,
            
            ]);

        }else{

            $request->request->remove('password');
            $request->request->remove('email');

            $user = auth()->user();
            $user->update($request->all());

        }


        $shipping = session()->has('shipping') 
                            ? session('shipping') : 3.99;

        $sub_total = $cart->sum(DB::raw('price * quantity'));


        /* create order with the user model relationship */

        $order = $user->order()->create([

            'shipping' => $shipping,
            'sub_total' => $sub_total,

        ]);

        /* set order number */

        $order_number = $order->id + 100000;

        $order->update(['order_number' => $order_number]);

        /* add order items 1 by 1 */

        foreach($cart->get() as $cart_item){

            $order->order_item()->create([

                'product_id' => $cart_item->product_id,
                'price' => $cart_item->price,
                'quantity' => $cart_item->quantity,
                'title' => $cart_item->title,

            ]);

        }

        session(['order_number'=> $order_number]);

        if (auth()->attempt($request->only('email', 'password'))) {
           
            return redirect()->route('complete');
       
        }
    
            return redirect()->route('complete');

    }


    public function complete()
    {

        return view('complete');

    }


}
