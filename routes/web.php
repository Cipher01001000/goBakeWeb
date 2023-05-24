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
