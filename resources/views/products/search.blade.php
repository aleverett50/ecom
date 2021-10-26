@extends('app')

@section('content')


    <div class="container-fluid page-heading">
        <h1>YOU SEARCHED FOR ... `{{ $search }}`</h1>
    </div>

<div class="container pt-30">
	
@if ( count($products) )

	@foreach ( $products as $product )

	@include('includes.products')


	@endforeach

@else

<p class="mt-10 mb-40">There are no results for that search term. </p>

@endif



</div>











@endsection