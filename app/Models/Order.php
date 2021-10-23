<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number', 'shipping', 'sub_total'
    ];

    public function user()
    {

        return $this->hasOne(User::class);        

    }

    public function order_item()
    {

        return $this->hasMany(OrderItem::class);

    }

}
