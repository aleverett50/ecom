<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\CartItem;

class CartValues
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        /*
        $cart = CartItem::where('unique_id', session('unique_id'))->get();
        $sub_total = 0;

        foreach($cart as $row){

            $sub_total += $row->quantity * $row->price;

        }

        $request->merge adds values to the request to be used in controllers
        $request->merge(['sub_total' => number_format($sub_total, 2)]);
        */

        return $next($request);
    }
}
