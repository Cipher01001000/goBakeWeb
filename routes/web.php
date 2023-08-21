<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
//Common Resource Routes:
//index - Show all products
//show - Show single product
//create - Show form to create new product
//store - Store new product
//edit - Show form to edit product
//update - Update product
//destroy - Delete product

// Costumer

//all products
Route::get('/', [ProductController::class, 'index']);

//single product
Route::get('/products/{product}', [ProductController::class, 'show']);

//ceate new user
Route::post('/users', [UserController::class, 'store']);

//user logout
Route::post('/logout', [UserController::class, 'logout']);

//show login form
Route::get('/login', [UserController::class, 'login']);

//login user
Route::post('/user/authenticate', [UserController::class, 'authenticate']);

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

Route::get('/forgot_password', function () {
    return view('user/forgotPassword');
});

Route::get('/change_password', function () {
    return view('user/changePassword');
});

Route::get('/qr_code_payment', function () {
    return view('user/qrCode');
});

Route::get('/equipment', function () {
    return view('user/equipment');
});

Route::get('/cancellation_reason', function () {
    return view('user/cancellationReason');
});

Route::get('/baking_supplies', function () {
    return view('user/bakingSupplies');
});

Route::get('/baking_tools', function () {
    return view('user/bakingTools');
});

//Seller

Route::get('/seller', function () {
    return view('seller/index');
});

Route::get('/start_selling', function () {
    return view('seller/startSelling');
});

Route::get('/seller_info', function () {
    return view('seller/sellerInfo');
});

Route::get('/otp', function () {
    return view('seller/otp');
});

//show create form
Route::get('/add_product', [ProductController::class, 'create']);

//store product data
Route::post('/seller', [ProductController::class, 'store']);

//display data in seller inventory
Route::get('/seller', [ProductController::class, 'seller_product']);

//show edit form
Route::get('/seller/{product}/edit', [ProductController::class, 'edit']);

//update product
Route::put('/seller/{product}', [ProductController::class, 'update']);

//delete product
Route::delete('/seller/{product}', [ProductController::class, 'destroy']);

Route::get('/customize_product', function () {
    return view('seller/customizeProducts');
});

//admin
Route::get('/admin', function () {
    return view('admin/admin');
});
