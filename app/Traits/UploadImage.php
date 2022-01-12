<?php

namespace App\Traits;

trait UploadImage
{

	
	public function validateImages($request)
	{
	
		foreach( $request->files as $key => $file ){
		
			$this->validate($request, [
			    
				$key => 'mimes:jpg,jpeg,png|max:2048000000',
				
			]);
		
		}
	
	}
	
	
	public function getFileNames($request, $product, $image_count, $action, $folder)
	{
	
		$files = [];
	
		for($i = 1; $i < ($image_count+1); $i++){
		
			if( $request->hasfile( 'image-'.$i ) ){
					
					$files[] = $this->saveImage($request, $i, $folder);
			
			}else{
			
					$files[] = $action == 'add' ? '' : $product->files[$i-1];					
			
			}
		
		}
		
		return $files;
	
	}
	
	
	public function saveImage($request, $i, $folder)
	{
	
		$file = $request->file('image-'.$i);
	
		$name = time().'-'.$i.'.'.$file->extension();
		
		$file->move(public_path($folder), $name);
		
		return $name;
	
	}
	
	
	
	public function uploadImages($product, $request, $image_count, $folder, $action)
	{

		$this->validateImages($request);
		
		return $this->getFileNames($request, $product, $image_count, $action, $folder);
	
	}

}
