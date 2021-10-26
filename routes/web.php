<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerAccountController;

Route::get('/', [PagesController::class, 'index'] )->name('home');
Route::get('/product/{slug}', [ProductController::class, 'show'] )->name('product');
Route::get('/basket', [CartItemController::class, 'index'] )->name('basket');
Route::get('/checkout', [CartItemController::class, 'checkout'] )->name('checkout');
Route::post('/checkout', [OrderController::class, 'store'] )->name('createOrder');
Route::get('/complete', [OrderController::class, 'complete'] )->name('complete');
Route::post('/basket', [CartItemController::class, 'setShipping'] )->name('setShipping');
Route::post('/cart', [CartItemController::class, 'store'] )->name('insertCartItem');
Route::delete('/cart/{id}', [CartItemController::class, 'destroy'] )->name('deleteCartItem');
Route::put('/cart/{id}', [CartItemController::class, 'edit'] )->name('updateCartItem');
Route::get('/login', [LoginController::class, 'index'] )->name('loginPage');
Route::post('/login', [LoginController::class, 'store'] )->name('login');
Route::get('/logout', [LoginController::class, 'logout'] )->name('logout');
Route::get('/account', [CustomerAccountController::class, 'index'] )->name('accountHome');
Route::get('/search', [ProductController::class, 'search'] )->name('search');