@extends('app')

@section('content')


    <div class="container-fluid page-heading">
        <h1>CHANGE PASSWORD</h1>
    </div>

<div class="container pb-100">

@include('includes.accountNav')

	<form class="form-horizontal form-light" method="post" action="/account/change-password">
	@csrf
						<div class="panel panel-default">
						<div class="panel-heading">CHANGE PASSWORD</div>
						<div class="panel-body">
						
								<div class="form-group">
									<label class="col-md-4 control-label">Current Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="current_password">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">New Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="password">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Confirm Password</label>
									<div class="col-md-6">
										<input type="password" class="form-control" name="confirm_password">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary"> CHANGE PASSWORD </button>
									</div>
								</div>
							
						</div>
					</div>
		
		
	</form>


</div>



@endsection