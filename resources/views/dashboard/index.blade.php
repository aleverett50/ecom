@extends('dashboard.app')

@section('content')


<div class="container">

<h1>DASHBOARD LOGIN</h1>

<p>Please login to your admin panel here. <br /><br /></p>

		
		
		<form class="form-horizontal" method="post" action="/login">
		@csrf
			
					<div class="panel panel-default">
						<div class="panel-heading">ADMIN LOGIN</div>
						<div class="panel-body">
								
								<div class="form-group">
									<label class="col-md-4 control-label">Username</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="email" name="email" value="alexe@wts-group.com">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password" value="pass">
									</div>
								</div>
								

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary"> LOGIN </button>
										
									</div>
								</div>
							
						</div>
					</div>
			
	
			
			

		
		</form>

	
		

</div>



@endsection