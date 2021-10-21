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

            if(session()->has('unique_id')){

                $cartCount = CartItem::where('unique_id', session('unique_id'))->sum('quantity');

            }else{

                $cartCount = 0;                

            }
            
            $view->with('cartCount', $cartCount);

        });


        View::composer('basket', function ($view) {

            if(session()->has('unique_id')){

                $cart = CartItem::where('unique_id', session('unique_id'))->get();
                $sub_total = CartItem::where('unique_id', session('unique_id'))
                            ->sum(DB::raw('price * quantity'));

            }else{

                $cart = [];
                $sub_total = 0;
                
            }

            $view->with('cart', $cart)->with('sub_total', $sub_total);

            
            
        });


    }
}
