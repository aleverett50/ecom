<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;

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
    
    
    public function changePasswordPost(Request $request)
    {
    
	$user = auth()->user();
	
	$userPassword = $user->password;
	
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password',
            'confirm_password' => 'required',

        ]);



        if ( ! Hash::check( $request->current_password, $userPassword ) ) {
	
            return back()->withError('The current password you entered was incorrect');

	}
	
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('accountHome')->withSuccess('Your password has been changed');

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

        return redirect()->route('accountOrders')->withSuccess('Your details have been updated');

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
	
	$orders = auth()->user()->order()->where('status', '!=', 'Pending')->get();

        return view('account.orders')->with('orders', $orders);

    }

}
