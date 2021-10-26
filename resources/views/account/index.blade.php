@extends('app')

@section('content')


    <div class="container-fluid page-heading">
        <h1>ACCOUNT - WELCOME {{ auth()->user()->first_name }}</h1>
    </div>

<div class="container">

<br>
<br>
<br>
<p>You can manage your orders and details here ...</p>

<br>
<br>
<br>


</div>



@endsection