<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Order;
use App\Notifications\CustomPasswordResetNotification;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'address_1',
        'address_2',
        'town',
        'postcode',
        'country',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function order()
    {

        return $this->hasMany(Order::class);        

    }


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomPasswordResetNotification($token));
    }


	public function isAdmin(){
	
		if( isset($this->user_role) && $this->user_role === 2 ){
		
			return true;
		
		}
		
		return false;
	
	}
	
	
/*
    public function setPasswordAttribute($value)
    {

        $this->attributes['password'] = Hash::make($value);

    }
*/



}
