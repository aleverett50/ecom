@extends('dashboard.app')

@section('content')


    <div class="container">
        <h1>VIEW ORDER</h1>
    </div>


<div class="container pb-40">


					<form class="form-horizontal" method="post" action="" >
											<div class="panel panel-default">
						<div class="panel-heading">VIEW ORDER</div>
						<div class="panel-body">
						
												
								<div class="form-group">
									<label class="col-md-4 control-label">Status</label>
									<div class="col-md-6 pt-7">{{ $order->status }}</div>
								</div>			
																
						
												
								<div class="form-group">
									<label class="col-md-4 control-label">Order Number</label>
									<div class="col-md-6 pt-7">{{ $order->order_number }}</div>
								</div>
								
																
								<div class="form-group">
									<label class="col-md-4 control-label">Order Date</label>
									<div class="col-md-6 pt-7">{{ date('d/m/Y H:i:s', strtotime($order->created_at)) }}</div>
								</div>								
								
																
											

								<div class="form-group">
									<label class="col-md-4 control-label">Sub Total</label>
									<div class="col-md-6 pt-7">
										&pound;{{ $order->sub_total }}	
									</div>
								</div>
								
																
								
								
								<div class="form-group">
									<label class="col-md-4 control-label">Shipping</label>
									<div class="col-md-6 pt-7">&pound;{{ $order->shipping }}</div>
								</div>								
								
								<div class="form-group">
									<label class="col-md-4 control-label">Total Cost</label>
									<div class="col-md-6 pt-7">&pound;{{ number_format($order->sub_total+$order->shipping, 2) }}</div>
								</div>


															
						</div>
					</div>
		
					<!--

						<div class="panel panel-default form-horizontal">
						<div class="panel-heading">CUSTOMER DETAILS</div>
						<div class="panel-body">
								
								<div class="form-group">
									<label class="col-md-4 control-label">Customer Name</label>
									<div class="col-md-6 pt-7">
										Alex (IGNORE) Everett									</div>
								</div>
								
																
								<div class="form-group">
									<label class="col-md-4 control-label">Address</label>
									<div class="col-md-6 pt-7">
Add1, Add2, Leeds, LS28 6HE, GB									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Email</label>
									<div class="col-md-6 pt-7">
										alexe@wts-group.com									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Phone</label>
									<div class="col-md-6 pt-7">
										0113									</div>
								</div>
							
						</div>
						</div>
				
						-->

						<div class="panel panel-default form-horizontal">
						<div class="panel-heading">ORDER DETAILS 
						
												
						</div>
						<div class="panel-body">
						
								@foreach($order_items as $order_item)
															
								<div class="form-group">
									<label class="col-md-4 control-label">Product</label>
									<div class="col-md-6 pt-7">{{ $order_item->title }}</div>
								</div>
								
								
								<div class="form-group">
									<label class="col-md-4 control-label">Quantity</label>
									<div  class="col-md-6 pt-7">{{ $order_item->quantity }}</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Individual Price</label>
									<div class="col-md-6 pt-7">
										&pound;{{ $order_item->price }}					
												
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Image</label>
									<div class="col-md-6 pt-7">
									
								<img style="width:150px" class="order-img" src="/product-images/{{ $order_item->product_id }}.jpg" alt="Thumbnail Product 1">					

									</div>
								</div>								
								
								<hr />

							@endforeach
								
														
						</div>
						</div>
						
						
												
						</form>	
						
						
		
	
</div>


@endsection