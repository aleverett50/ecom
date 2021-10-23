@extends('app')


@section('content')


    <div class="container-fluid page-heading">
        <h1>ORDER COMPLETE</h1>
    </div>

<div class="container pt-50 pb-50">
  
  <p>Thank you for your order. Your order number is {{ session('order_number') }}.</p>

</div>



@endsection