@extends('app')

@section('content')





<div class="container">
	<ul class="breadcrumb mb-0 pb-0 mt-20">
		<li><a href="/"><i class="fa fa-home"></i> HOME</a></li>
		<li><a href="">SBM SHOP</a></li>
		<li><a href="">TOOLS</a></li>
		<li>STAMPS BY ME TAG PUNCH - 240921Z</li>
	</ul>
</div>
	
<div class="container pb-50 pt-50">
			    
		<div class="row">
				
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" >

						
	<div class="left-thumbnail-holder">
		
		<ol class="carousel-indicators">

			<li data-target="#myCarousel" data-slide-to="0" class="active">
			<img class="img-responsive hidden-xs hidden-sm" src="/product-images/1.jpg" alt="Thumbnail Product 1">
			</li>
			
						
			<li data-target="#myCarousel" data-slide-to="1">
			<img class="img-responsive hidden-xs hidden-sm" src="/product-images/2.jpg" alt="Thumbnail Product 2">
			</li>										
						
		</ol> 
	
	</div>

						    
						    <div class="col-md-5 pb-40 mb-40">

		  <div class="carousel-inner" role="listbox">
		  
			    <div class="item active">
			     <a href="/product-images/1.jpg" data-lightbox="example-set" data-title="{{$product->title}}"> <img class="img-responsive" style="width:100%" src="/product-images/1.jpg" alt="Product 1">  </a>
			    </div>
			    
			    			    
			    <div class="item">
			     <a href="/product-images/2.jpg" data-lightbox="example-set" data-title="{{$product->title}}"> <img class="img-responsive" src="/product-images/2.jpg" alt="Product 2">  </a>
			    </div>

		  </div>
		

											
											  <!-- Controls -->
											  <a class="left carousel-control" href="/#myCarousel" role="button" data-slide="prev">
											    <i class="fa fa-chevron-left"></i>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right carousel-control" href="/#myCarousel" role="button" data-slide="next">
											    <i class="fa fa-chevron-right"></i>
											    <span class="sr-only">Next</span>
											  </a>
											  
											  

						    
						    </div>
						    
		
						    
						    
						</div>
						    
						<div class="col-md-6 description-div">
						
						<div class="row">
						
	
		</div>

		<h1 class="mt-0 mt-20-mob">{{$product->title}}</h1>							    
							
		<h2 class="mb-20">

		Price: 

		&pound;{{$product->price}}
		</h2>
		
		{{$product->description}}


														
								<form action="{{route('insert-product')}}" method="post">
							
								@csrf
								<input type="hidden" name="product_id" value="{{$product->id}}">
								<div class="row mt-20">
							
									<div class="col-md-6 col-xs-6">							

									<select name="quantity" class="form-control mb-40" style="height:40px">
									
										<option value="1">QTY - 1</option>
										<option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>									
									</select>
									
									</div>
									
									<div class="col-md-6 col-xs-6">
										<button style="width:100%;font-size:16px;height:40px" type="submit" class="btn form-control btn-primary"><i class="fa fa-shopping-cart"></i> ADD <span class="hidden-xs">TO BAG</span></button>
									</div>
								
								</div>
								
								</form>
							
								

						</div>

					
				

		</div>



</div>  <!-- End of container div -->




@endsection