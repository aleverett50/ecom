@extends('dashboard.app')

@section('content')


    <div class="container">
        <h1>@isset($product) EDIT @else ADD @endisset PRODUCT</h1>
    </div>



<div class="container pb-40">


					<form enctype="multipart/form-data" class="form-horizontal" method="post" action="/dashboard/product/add">
					
					@csrf
					
											<div class="panel panel-default">
						<div class="panel-heading">@isset($product) EDIT @else ADD @endisset PRODUCT</div>
						<div class="panel-body">
						
								<div class="form-group">
									<label class="col-md-4 control-label">Category</label>
									<div class="col-md-6 pt-7">
									
									<select class="form-control" name="category_id">
										<option value="">Select Category</option>
										@foreach( $categories as $category )
										<option value="{{ $category->id }}">{{ $category->title }}</option>
										@endforeach
									</select>
									
									</div>
								</div>
						
												
								<div class="form-group">
									<label class="col-md-4 control-label">Title</label>
									<div class="col-md-6 pt-7"><input class="form-control" type="text" name="title" value="{{ $product->title ?? 'Product Title' }}"></div>
								</div>			
																
						
												
								<div class="form-group">
									<label class="col-md-4 control-label">Slug URL</label>
									<div class="col-md-6 pt-7"><input class="form-control" type="text" name="slug" value="{{ $product->slug ?? 'product-title' }}"></div>
								</div>
								
																
								<div class="form-group">
									<label class="col-md-4 control-label">Price</label>
									<div class="col-md-6 pt-7"><input class="form-control" type="text" name="price" value="{{ $product->price ?? '12' }}"></div>
								</div>								
								

								<div class="form-group">
									<label class="col-md-4 control-label">Description</label>
									<div class="col-md-6 pt-7">
									<textarea name="description" class="form-control">{{ $product->description ?? 'Desc' }}</textarea>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Image 1</label>
									<div class="col-md-6 pt-7">
									<input class="form-control" type="file" name="image-1">
									</div>
								</div>								
								
								
								<div class="form-group">
									<label class="col-md-4 control-label">Image 2</label>
									<div class="col-md-6 pt-7">
									<input class="form-control" type="file" name="image-2">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label"></label>
									<div class="col-md-6 pt-7">
									<button type="submit" class="btn btn-primary">SUBMIT</button>
									</div>
								</div>
								


															
						</div>
					</div>
		

						

						</form>	
						
						
		
	
</div>


@endsection