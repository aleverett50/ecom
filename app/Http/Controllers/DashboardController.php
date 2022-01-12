<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use App\Traits\UploadImage;

class DashboardController extends Controller
{

	use UploadImage;

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

	return redirect('dashboard/products');
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
	
            $product = new Product;
	    
	    /* uploadImages comes from UploadImage trait */
	    
	    $product->files = $this->uploadImages($product, $request, 2,  'product-images', 'add');
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
	    
		$product->files = $this->uploadImages($product, $request, 2, 'product-images', 'update');
		
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
