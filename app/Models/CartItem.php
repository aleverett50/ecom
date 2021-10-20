<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'unique_id', 'price', 'quantity', 'title'];

    public static function bespokeFunction()
    {

        return 'value';
        // in controller - CartItem::bespokeFunction();

    }


}
