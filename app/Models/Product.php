<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    
    public function category()
    {

        return $this->belongsTo(Category::class);

    }
    
    
    public function setFilesAttribute($value)
    {

        $this->attributes['files'] = json_encode($value);

    }
    
    
    public function getFilesAttribute($value)
    {
    
	/* create an array from the json string */

        return json_decode($value, true);

    }
    

    
}
