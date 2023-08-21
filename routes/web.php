<?php

use App\Http\Controllers\OrderController;
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

//guest
Route::group(['middleware' => 'guest'], function () {

    //show login form
    Route::get('/login', [UserController::class, 'login'])->name('login');
    //show register create form
    Route::get('/register', [UserController::class, 'create']);
    //login user
    Route::post('/user/authenticate', [UserController::class, 'authenticate']);
});

//auth
Route::group(['middleware' => 'auth'], function () {

    //buyer
    Route::group(['middleware' => 'role:buyer'], function () {
        //show cart
        Route::get('/cart', [ProductController::class, 'showCartList']);
        //add to cart
        Route::post('/add_to_cart', [ProductController::class, 'addToCart']);
        //delete cart item
        Route::delete('/cart/{cartId}', [ProductController::class, 'destroyCartItem']);
        //checkout count total price
        Route::get('/checkout', [ProductController::class, 'checkout']);
        //checkout count total price
        Route::get('/checkout', [ProductController::class, 'checkout']);
        //buy now
        Route::get('/buyNow/{product}', [ProductController::class, 'buyNow']);
        //'buy now' place order
        Route::post('/buyNowPlaceOrder', [ProductController::class, 'buyNowPlaceOrder']);
        //place order
        Route::post('/placeOrder', [ProductController::class, 'placeOrder']);
        //add user address
        Route::post('/addAddress', [ProductController::class, 'addAddress']);
        //add user address
        Route::post('/buyNowAddAddress', [ProductController::class, 'buyNowAddAddress']);
        //show orders
        Route::get('/orders', [ProductController::class, 'orders']);
        //show equipment
        Route::get('/baking_equipment', [ProductController::class, 'bakingEquipment']);
        //show cake
        Route::get('/cake', [ProductController::class, 'cake']);
        //show baking supplies
        Route::get('/baking_supplies', [ProductController::class, 'bakingSupplies']);
        //show baking tools
        Route::get('/baking_tools', [ProductController::class, 'bakingTools']);

        Route::get('/product_review', function () {
            return view('user/product_review');
        });

        Route::get('/seller_shop', function () {
            return view('user/seller_shop');
        })->middleware('auth');

        Route::get('/cake_customization', function () {
            return view('user/cake_customization');
        });

        Route::get('/profile', function () {
            return view('user/profile');
        });

        Route::get('/qr_code_payment', function () {
            return view('user/qrCode');
        });

        Route::get('/cancellation_reason', function () {
            return view('user/cancellationReason');
        });
    });

    //seller
    Route::group(['middleware' => 'role:seller'], function () {

        //show create form
        Route::get('/add_product', [ProductController::class, 'create']);

        //store product data
        Route::post('/seller', [ProductController::class, 'store']);

        //show and manage product
        Route::get('/sellerProduct', [ProductController::class, 'sellerProduct']);

        //show edit form
        Route::get('/seller/{product}/edit', [ProductController::class, 'edit']);

        //update product
        Route::put('/seller/{product}', [ProductController::class, 'update']);

        //delete product
        Route::delete('/seller/{product}', [ProductController::class, 'destroy']);

        //delete address
        Route::delete('/checkout/{address}', [ProductController::class, 'destroyAddress']);

        //show customer order
        Route::get('/customerOrder', [OrderController::class, 'showOrder']);

        //show add product menu
        Route::get('/addProductMenu', [ProductController::class, 'addProductMenu']);

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

        Route::get('/customize_product', function () {
            return view('seller/customizeProducts');
        });
    });

    //admin
    Route::group(['middleware' => 'role:admin'], function () {
        Route::get('/admin', function () {
            return view('admin/admin');
        });
    });
});

//all products
Route::get('/', [ProductController::class, 'index']);
//single product
Route::get('/products/{product}', [ProductController::class, 'show']);
//ceate new user
Route::post('/users', [UserController::class, 'store']);
//user logout
Route::post('/logout', [UserController::class, 'logout']);
//user sellerlogout
Route::post('/sellerLogout', [UserController::class, 'sellerLogout']);

Route::get('/forgot_password', function () {
    return view('user/forgotPassword');
});

Route::get('/change_password', function () {
    return view('user/changePassword');
});

Route::get('/contact', function () {
    return view('user/contact');
});
