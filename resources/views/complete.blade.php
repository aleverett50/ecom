@extends('app')


@section('content')

    <div class="container-fluid page-heading">
        <h1>ORDER COMPLETE</h1>
    </div>
    


<div class="container pt-50 pb-50">

@if( session()->has('order_number') )
  
  <p>Dear {{ $order->user->first_name }},<br><br>Thank you for your order. Your order number is {{ session('order_number') }}. Please use this order number in any future correspondance. Please see below your order details.</p>
  
  <br />
  
  <div class="table-responsive">
  
	{!! $cart !!}  
  
  </div>
  
@else

<p class="mb-100">Your session has expired. If you need assistance please contact customer service.</p>
  
@endif

</div>



@endsection