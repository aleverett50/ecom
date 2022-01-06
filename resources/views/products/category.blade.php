@extends('app')

@section('content')


    <div class="container mb-30 pt-50 pb-0">
    
    <h1>{{ $title }}</h1><br><br>

        <div class="row" style="grid-auto-flow: column;">

        @foreach($products as $product)
		
        	@include('includes.products')

        @endforeach

		
		    
        </div>

    </div>


@endsection