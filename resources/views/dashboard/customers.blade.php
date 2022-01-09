@extends('dashboard.app')

@section('content')

<div class="container">

<h1>CUSTOMERS</h1>


@if(count($customers))

<div class="table-responsive">

	<table class="table table-hover">

	<tr><td><strong>Date</strong></td><td><strong>Customer</strong></td><td><strong>Postcode</strong></td><td><strong></strong></td></tr>
	
	@foreach($customers as $customer)
	
	<tr><td>{{ date('d/m/Y', strtotime($customer->created_at)) }}</td><td>{{ $customer->first_name }} {{ $customer->last_name }}</td><td>{{ $customer->postcode }} </td><td><a class="btn btn-primary" href="/dashboard/customer/{{ $customer->id }}">View <i class="fa fa-arrow-right"></i></a></td></tr>
	
	@endforeach
	
	</table>

</div>	

@else

<p>You currently have no customers.</p>

@endif


</div>


@endsection