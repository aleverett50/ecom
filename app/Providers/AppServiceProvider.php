<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CartItem;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // 'app' is app.blade.php file. Use * to make available in all views.
        View::composer('app', function ($view) {

            $cartCount = CartItem::where('unique_id', session('unique_id'))->sum('quantity');
            
            $view->with('cartCount', $cartCount);

        });


        View::composer('basket', function ($view) {

            $cartItems = CartItem::where('unique_id', session('unique_id'));

            $cart = $cartItems->get();
            $sub_total = $cartItems->sum(DB::raw('price * quantity'));

            $view->with('cart', $cart)->with('sub_total', $sub_total);
            
        });


    }
}
