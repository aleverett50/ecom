@extends('dashboard.app')

@section('content')

<div class="container">

<h1>ORDERS</h1>


@if(count($orders))

<div class="table-responsive">

	<table class="table table-hover">

	<tr><td><strong>Date</strong></td><td><strong>Customer</strong></td><td><strong>Status</strong></td><td><strong>Order Number</strong></td><td><strong>Total</strong></td><td width="200"><strong>Action</strong></td></tr>
	
	@foreach($orders as $order)
	
	<tr><td>{{ date('d/m/Y', strtotime($order->created_at)) }}</td><td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td><td>{{ $order->status }} </td><td>{{ $order->order_number }}</td><td>&pound;{{ number_format($order->sub_total + $order->shipping, 2) }}</td><td><a class="btn btn-primary" href="/dashboard/order/{{ $order->id }}">View <i class="fa fa-arrow-right"></i></a></td></tr>
	
	@endforeach
	
	</table>

</div>	

@else

<p>You currently have no orders.</p>

@endif


</div>


@endsection