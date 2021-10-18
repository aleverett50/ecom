<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CartItem;

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

        View::composer('*', function ($view) {

            if(session()->has('unique_id')){

                $cartCount = CartItem::where('unique_id', session('unique_id'))->sum('quantity');

            }else{

                $cartCount = 0;                

            }
            
            $view->with('cartCount', $cartCount);

        });


    }
}
