<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CustomerAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'customer']);
    }


    public function index()
    {

        return view('account.index');

    }
    
    public function details()
    {

        return view('account.details');

    }
    

    
    public function changePassword()
    {

        return view('account.changePassword');

    }
    
    
    public function changePasswordPost()
    {

        return redirect()->route('accountHome');

    }
    
    
    public function detailsUpdate(Request $request)
    {
    
	/* check for empty fields */
    
	$this->validate($request, [

		'first_name' => 'required',
		'last_name' => 'required',
		'address_1' => 'required',
		'phone' => 'required',
		'town' => 'required',
		'postcode' => 'required',
		'country' => 'required',

	]);

	
	$user = auth()->user();
	$user->update($request->all());

        return redirect()->route('accountOrders');

    }
    
    public function order($id)
    {
    
	$order = Order::findOrFail($id);
	
	/* get order items by relationship  */
	
	$order_items = $order->order_item()->get();

	if( $order->user_id != auth()->user()->id ){
		return redirect()->route('accountOrders');
	}

        return view('account.order')->with('order', $order)->with('order_items', $order_items);

    }
    
    
    public function orders()
    {
    
	/* get all orders for logged in user using relationships $user->order() */
	
	$orders = auth()->user()->order()->get();

        return view('account.orders')->with('orders', $orders);

    }

}
