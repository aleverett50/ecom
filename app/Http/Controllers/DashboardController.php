<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;

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

	return redirect('dashboard/orders');
        return view('dashboard.home');

    }
    

    public function orders()
    {
	
	$orders = Order::all();
	
        return view('dashboard.orders')->with('orders', $orders);

    }
    

    public function customers()
    {
	
	$customers = User::where('user_role', '!=' , 2)->get();
	
        return view('dashboard.customers')->with('customers', $customers);

    }
    
    
	public function store(Request $request)
	{

		$files = [];
		
		for($i = 1; $i < 3; $i++){
		
			if( $request->hasfile( 'image-'.$i ) ){			
			
				    $this->validate($request, [
				    
					 'image-'.$i => 'mimes:jpg,jpeg,png|max:2048000000',
					
				    ]);
					
					$file = $request->file('image-'.$i);
				
					$name = time().'-'.$i.'.'.$file->extension();
					
					$file->move(public_path('product-images'), $name);
					
					$files[] = $name;
			
			}else{
			
					$files[] = '';
			
			}
		
		}

		
            $product = new Product;
	    
	    $product->files = $files;
	    $product->category_id = $request->category_id;
	    $product->title = $request->title;
	    $product->slug = $request->slug;
	    $product->price = $request->price;
	    $product->description = $request->description;
	    $product->save();
	    
	    return redirect('dashboard/products')->withSuccess('The product has been added');
	    

	}
	
	
	public function updateProduct(Request $request, $id)
	{
		
            $product = Product::findOrFail($id);
	    
		$files = [];
		
		for($i = 1; $i < 3; $i++){
		
			if( $request->hasfile( 'image-'.$i ) ){			
			
				    $this->validate($request, [
				    
					 'image-'.$i => 'mimes:jpg,jpeg,png|max:2048000000',
					
				    ]);
					
					$file = $request->file('image-'.$i);
				
					$name = time().'-'.$i.'.'.$file->extension();
					
					$file->move(public_path('product-images'), $name);
					
					$files[] = $name;
			
			}else{
			
					$files[] = $product->files[$i-1];
			
			}
		
		}
	    
		$product->files = $files;
		$product->category_id = $request->category_id;
		$product->title = $request->title;
		$product->slug = $request->slug;
		$product->price = $request->price;
		$product->description = $request->description;
		$product->save();
	    
	    return redirect('dashboard/products')->withSuccess('The product has been updated');
	    

	}
    
    
    public function addProduct()
    {
    
	$categories = Category::all();
	
        return view('dashboard.product')->with('categories', $categories);

    }
    

    public function product($id)
    {
	
	$categories = Category::all();
	$product = Product::findOrFail($id);
	
        return view('dashboard.product')->with('product', $product)->with('categories', $categories);

    }
    
    
    public function products()
    {
	
	$products = Product::all();
	
        return view('dashboard.products')->with('products', $products);

    }
    
    
    public function order($id)
    {
    
	$order = Order::findOrFail($id);
	
	/* get order items by relationship  */
	
	$order_items = $order->order_item()->get();

        return view('dashboard.order')->with('order', $order)->with('order_items', $order_items);

    }
    
    
    
}
