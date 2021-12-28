<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LARAVEL - Admin</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="/css/jquery-ui.css" rel="stylesheet">
	<link href="/css/admin-styles.css" rel="stylesheet">
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/jquery-ui.js"></script>
	<script src="/js/bootstrap.min.js"></script>
<script>

$(function(){

	$('#status').change(function(){
	
		$('#status_form').submit();
	
	});


});

</script>
</head>
<body>
	<nav class="navbar navbar-default no-border">
		<div class="container-fluid bg-main" style="padding-left:5%;padding-right:5%">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a target="_blank" href="/">ECOM ADMIN</a></li>
						
					</ul>

					<ul class="nav navbar-nav navbar-right">
					
					@auth
					
						<li><a href="/dashboard/orders">ORDERS</a></li>
						<li><a href="/dashboard/customers">CUSTOMERS</a></li>
						<li><a href="/dashboard/products">PRODUCTS</a></li>
						<li><a href="/logout">SIGN OUT</a></li>
						
					@endauth	
					
					</ul>
				</div>
		
		</div>
	</nav>
	
@if(session()->has('success'))
<div class="container">
    <p class="alert alert-success mt-20 mb-30">{{ session('success') }} <i class="fa fa-check"></i></p>
</div>
@endif


@if(session()->has('error'))
<div class="container">
    <p class="alert alert-danger mt-20 mb-30"><i class="fa fa-times"></i> {{ session('error') }} </p>
</div>
@endif


@if (count($errors) > 0)
<div class="container">
<div class="alert alert-danger mt-20 mb-30">
        @foreach ($errors->all() as $error)
            <p><i class="fa fa-times"></i> {{ $error }}</p>
        @endforeach
</div>
</div>
@endif
	

@yield('content')



<script>
$(function(){
	screenHeight = $( document ).height();
	var p = $( "footer" );
	var bottom = p.position().top + p.outerHeight(true);
	if( screenHeight > bottom ){
		var diff = screenHeight - bottom + 20;
		$('footer').css({ 'margin-top' : diff + 'px' });
	}
});
</script>

<footer class="footer bg-main color-white">
	<div class="container padding-top-10 padding-bottom-10 text-center">
		
		LARAVEL ADMIN PANEL
			
	</div>
</footer>

</body>
</html>