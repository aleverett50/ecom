@extends('app')


@section('content')


    <div class="container-fluid page-heading">
        <h1>RESET PASSWORD</h1>
    </div>



<div class="container pt-40 pb-30">

<p>Please reset your password here. <br /><br /></p>
		
		<form class="form-horizontal form-light" method="post" action="/reset-password">
			@csrf
			
			<input type="hidden" name="token" value="{{ $token }}">

					<div class="panel panel-default">
						<div class="panel-body">

								<div class="form-group">
									<label class="col-md-4 control-label">Email Address</label>
									<div class="col-md-6">
										<input type="email" class="form-control" id="email" name="email" value="{{ $email }}">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" id="password" name="password">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Confirm Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn-primary pt-5 pb-5" style="font-size:16px"> RESET PASSWORD </button>
									</div>
								</div>
								
							
						</div>
					</div>
			
		
		</form>
		
</div>











@endsection