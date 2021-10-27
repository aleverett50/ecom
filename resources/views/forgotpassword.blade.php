@extends('app')


@section('content')


    <div class="container-fluid page-heading">
        <h1>FORGOT PASSWORD</h1>
    </div>

<div class="container pt-40 pb-30">

<p>Please enter your email address for reset link. <br /><br /></p>
		
		<form class="form-horizontal form-light" method="post" action="/forgot-password">
			@csrf
			
					<div class="panel panel-default">
						<div class="panel-body">
								
								<div class="form-group">
									<label class="col-md-4 control-label">Email Address</label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="email" name="email" value="aleverett50@hotmail.com">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn-primary pt-5 pb-5" style="font-size:16px"> SUBMIT </button>
									</div>
								</div>
								
							
						</div>
					</div>
			
		
		</form>
		
</div>











@endsection