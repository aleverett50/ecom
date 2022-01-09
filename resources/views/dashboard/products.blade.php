@extends('dashboard.app')

@section('content')

<div class="container">

<h1>PRODUCTS</h1>
<br>
<a href="/dashboard/product/add" class="btn btn-primary">ADD PRODUCT <i class="fa fa-plus"></i></a>

<br><br><br>

@if(count($products))

<div class="table-responsive">

	<table class="table table-hover">

	<tr><td><strong>Title</strong></td><td><strong>Category</strong></td><td><strong></strong></td></tr>
	
	@foreach($products as $product)
	
	<tr><td> {{ $product->title }}</td><td>{{ $product->category->title }} </td><td><a class="btn btn-primary" href="/dashboard/product/{{ $product->id }}">Edit <i class="fa fa-edit"></i></a></td></tr>
	
	@endforeach
	
	</table>

</div>	

@else

<p>You currently have no products.</p>

@endif


</div>


@endsection