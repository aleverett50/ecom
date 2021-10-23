@extends('app')


@section('content')



    <div class="container-fluid page-heading">
        <h1>LOGIN</h1>
    </div>

<div class="container pt-40 pb-30">

<p>Please login to your account here. <br /><br /></p>
		
		<form class="form-horizontal form-light" method="post" action="/login">
			@csrf
			
					<div class="panel panel-default">
						<div class="panel-body">
								
								<div class="form-group">
									<label class="col-md-4 control-label">Email Address</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="email" name="email">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password">
									</div>
								</div>
								

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn-primary pt-5 pb-5" style="font-size:16px"> LOGIN </button>
										<a style="color:#108B9A;font-size:12px" href="/forgot-password">Forgotten Your Password?</a>
									</div>
								</div>
							
						</div>
					</div>
			
		
		</form>
		
</div>











@endsection