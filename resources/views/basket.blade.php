@extends('app')

@section('content')


<script>

$(function(){

	$('#shipping').change(function(){
	
		$('#shipping-form').submit();
	
	});

});

</script>

    <div class="container-fluid page-heading">
        <h1>SHOPPING BASKET</h1>
    </div>

<div class="container pb-70 pt-20">

@if ( !count($cart) )

<p>Your basket is currently empty.</p>

@else
	
<hr />


	<div class="row mb-10 hidden-xs hidden-sm">
	
		<div class="col-md-1"> <strong>Product</strong> </div>
		<div class="col-md-1 col-md-offset-6"> <strong>Price</strong> </div>
		<div class="col-md-1"> <strong>Quantity</strong> </div>
		<div class="col-md-1"> <strong>Total</strong> </div>
	
	</div>


	@foreach($cart as $row)
							
							
	<div class="row mb-10">
	
		<div class="col-md-1 col-xs-3 col-sm-3">  <img src="/product-images/{{$row->product_id}}.jpg"  class="img-responsive" /> </div>
		<div class="col-md-6 col-xs-6 col-sm-6">  

			<h4 class="mt-0">{{ strtoupper($row->title) }}</h4>
	
		</div>
		
		<div class="col-xs-3 visible-xs visible-sm">	&pound;{{ $row->price }}</div>
	 	
		<div class="col-md-1 hidden-xs hidden-sm"> 
		
		&pound;{{ $row->price }}</div>
		
		<div class="col-xs-12 visible-xs visible-sm mt-10">Qty:</div>
		
		<form action="cart/{{$row->id}}" method="post" style="display:inline">

		@csrf
		@method('PUT')

		<div class="col-md-1 col-xs-3 col-sm-3">  
		<input type="number" class="form-control text-center" name="quantity" value="{{ $row->quantity }}"> </div>
		<div class="col-md-1 hidden-xs hidden-sm">&pound;{{ number_format($row->price * $row->quantity, 2) }}</div>
		<div class="col-xs-6 visible-xs visible-sm"></div>
		<div class="col-md-2 col-xs-9 col-sm-9 text-right">
		
		<button title="Update" type="submit" class="btn btn-primary btn-sm"><i class="fas fa-sync"></i></button>

		</form>

		<form action="cart/{{$row->id}}" method="post" style="display:inline">

		@csrf
		@method('DELETE')

		<button title="Remove" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></button>

		</form>
		
		</div>
	
	</div>
	
						
	
	<hr />

@endforeach
	
	<div class="row"> 
	<div class="col-md-6"> 
	
		<div class="row">
		
			<div class="col-md-12">

		
	<form action="basket" method="post" id="shipping-form">
	@csrf
	<select class="form-control" name="shipping" id="shipping">
	
	<option value="">Please Select Your Shipping Method</option>
	<option value="3.99"@if($shipping == 3.99) selected @endif>UK Mainland - Standard &pound;3.99</option>
	<option value="4.99"@if($shipping == 4.99) selected @endif>UK Mainland - Tracked &pound;4.99</option>
	<option value="0.00"@if($shipping == 0.00) selected @endif>Collect in Store - FREE</option>
					
	</select>
	</form>
	
		
					
				
			</div>
			
			<div class="col-md-12 mt-10 mb-20 hide">
			
				<form action="" method="post">
				
				<div class="row">
			
					<div class="col-md-9 col-xs-6 col-sm-9"> <input type="text" class="form-control" name="code" placeholder="Enter promo code..."> </div>
					<div class="col-md-3 col-xs-6 col-sm-3">  <button class="btn btn-primary form-control more-info">REDEEM</button> </div>
				
				</div>
				
				</form>				
			
			</div>
		
		</div>
		
	
	</div> 
	
	<div class="col-md-6 text-right mb-10 mt-40-mob"><strong>Sub Total &pound;{{ number_format($sub_total, 2) }}</strong></div> 

		
	
	<div class="col-md-6"></div> 
	<div class="col-md-6 text-right mb-10"><strong>Shipping &pound;{{ number_format($shipping, 2) }}</strong>
	</div> 
	
	
	<div class="col-md-6"></div> 
	<div class="col-md-6 text-right mb-10"><strong>Total &pound;{{ number_format($shipping + $sub_total, 2) }}</strong></div> 
	</div>
	
	<div class="col-md-6 pull-left col-xs-12 pr-0 pl-0 mt-20 visible-md visible-lg">
	
	<a href="/" class="btn btn-primary"><i class="fa fa-chevron-left"></i> CONTINUE SHOPPING</a>
	
	</div>
	
	<div class="col-md-6 col-xs-12 pr-0 pl-0 mt-20">
	
	<a href="checkout" class="btn btn-primary pull-right">CHECKOUT <i class="fa fa-chevron-right"></i></a>
	
	</div>


@endif

</div>














@endsection