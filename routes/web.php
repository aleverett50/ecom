<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartItemController;

Route::get('/', [PagesController::class, 'index'] )->name('home');
Route::get('/product/{slug}', [ProductController::class, 'show'] )->name('product');
Route::post('/cart', [CartItemController::class, 'store'] )->name('insert-product');