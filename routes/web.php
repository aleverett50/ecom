<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartItemController;

Route::get('/', [PagesController::class, 'index'] )->name('home');
Route::get('/product/{slug}', [ProductController::class, 'show'] )->name('product');
Route::get('/basket', [CartItemController::class, 'index'] )->name('basket');
Route::post('/cart', [CartItemController::class, 'store'] )->name('insertCartItem');
Route::delete('/cart/{id}', [CartItemController::class, 'destroy'] )->name('deleteCartItem');
Route::put('/cart/{id}', [CartItemController::class, 'edit'] )->name('updateCartItem');