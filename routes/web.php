<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Costumer
Route::get('/', function () {
    return view('user/index');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/register', function () {
    return view('user/register');
});

Route::get('/shop', function () {
    return view('user/shop');
});

Route::get('/orders', function () {
    return view('user/orders');
});

Route::get('/contact', function () {
    return view('user/contact');
});

Route::get('/cart', function () {
    return view('user/cart');
});

Route::get('/product_review', function () {
    return view('user/product_review');
});

Route::get('/seller_shop', function () {
    return view('user/seller_shop');
});

Route::get('/cake_customization', function () {
    return view('user/cake_customization');
});

Route::get('/profile', function () {
    return view('user/profile');
});

//Seller
Route::get('/seller', function () {
    return view('seller/index');
});
