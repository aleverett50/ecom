<?php

namespace App\Traits;

trait UploadImage
{

	public function uploadImages($product, $request, $image_count, $folder, $action){
		
		$files = [];
		
		for($i = 1; $i < ($image_count+1); $i++){
		
			if( $request->hasfile( 'image-'.$i ) ){
			
			$this->validate($request, [
			    
				 'image-'.$i => 'mimes:jpg,jpeg,png|max:2048000000',
				
			]);
					
					$file = $request->file('image-'.$i);
				
					$name = time().'-'.$i.'.'.$file->extension();
					
					$file->move(public_path($folder), $name);
					
					$files[] = $name;
			
			}else{
					
					if( $action == 'add' ){
					
						$files[] = '';
					
					}else{
					
						$files[] = $product->files[$i-1];
					
					}
			
					
			
			}
		
		}
		
		return $files;
	
	}

}
