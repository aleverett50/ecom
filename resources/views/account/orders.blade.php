@extends('app')

@section('content')


    <div class="container-fluid page-heading">
        <h1>MY ORDERS</h1>
    </div>

<div class="container">

@include('includes.accountNav')

<br>
<br>
<div class="table-responsive">

	<table class="table table-hover">

	<tr><td><strong>Date</strong></td><td><strong>Status</strong></td><td><strong>Order Number</strong></td><td><strong>Total</strong></td><td width="200"><strong>Action</strong></td></tr>
	
	@foreach($orders as $order)
	
	<tr><td>{{ date('d/m/Y', strtotime($order->created_at)) }}</td><td>{{ $order->status }} - {{ $order->user_id }}</td><td>{{ $order->order_number }}</td><td>&pound;{{ number_format($order->sub_total + $order->shipping, 2) }}</td><td><a class="btn btn-primary" href="/account/order/{{ $order->id }}">View <i class="fa fa-arrow-right"></i></a></td></tr>
	
	@endforeach
	
	</table>

</div>	


<br>
<br>
<br>


</div>



@endsection