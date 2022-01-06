@extends('app')

@section('content')

    <div class="container-fluid page-heading">
        <h1>CONTACT US</h1>
    </div>

<div class="container pb-70 pt-20">

                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p>DEMO SITE<br />
			<br/>
				
                                </p>
                            </div>
			    
			<hr class="visible-xs visible-sm" />

                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Email Us</h3>
                                <p> <strong><a style="color:#CB889A" href="mailto:info@demosite.com">info@demosite.com</a></strong>  </p>
                            </div>
			    
			<hr class="visible-xs visible-sm" />

                            <div class="col-sm-4">
                                <h3><i class="fa fa-comment"></i> Web Form Support</h3>
                                <p>Please feel free to use our web form.</p>
                                
                            </div>

                        </div>
			
			<hr />

		<div class="row">
		
			<div class="col-md-12 pb-20">
			
		<form action="" method="post">

                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Telephone</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
				    
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>


                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea style="height:100px" name="message" id="message" rows="4" class="form-control"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary form-control"><i class="fa fa-envelope"></i> Send Message</button>

		</form>
			
			</div>
			
		
		
		</div>


            </div>



@endsection