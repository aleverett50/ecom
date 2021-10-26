    <div class="product-item col-md-3 pc-product-holder pb-50" style="position:relative">
	    
	    
	<div class="pc-product-image">
		<a href="/product/{{ $product->slug }}">
		<img src="/product-images/{{ $product->id }}.jpg" class="img-responsive">
		</a>
	</div>
      
		
		<div class="pc-product-title-holder">
		
        <p class="pc-product-title pb-20 text-center pt-20" style="font-size: 13px;font-weight: 600">{{ $product->title }}</p>
						
		</div>
		    
		    
		    <div class="row mb-30">
		    
				<div class="col-md-6"> &pound;{{ $product->price }}  </div>
				<div class="col-md-6"> 
				
				<a href="/product/{{ $product->slug }}" style="width:100%" class="btn btn-primary">VIEW</a>
							
				</div>
			    
			    </div>


            </div>