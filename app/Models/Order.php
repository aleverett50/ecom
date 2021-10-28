<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
use App\Notifications\SendConfirmationEmail;

class Order extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'order_number', 'shipping', 'sub_total'
    ];

    public function user()
    {

        return $this->belongsTo(User::class);        

    }

    public function order_item()
    {

        return $this->hasMany(OrderItem::class);

    }




}
