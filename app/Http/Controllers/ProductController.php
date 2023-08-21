<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    //show all products in index
    public function index()
    {
        return view('user/index', [
            'products' => Product::latest()
                ->filter(request(['search']))
                ->paginate(12)
        ]);
    }

    //show all products in cake category
    public function cake()
    {
        return view('user/cake', [
            'products' => DB::table('products')
                ->where('category', 'Cake')
                ->paginate(12)
        ]);
    }

    //show all products in baking tools category
    public function bakingTools()
    {
        return view('user/bakingTools', [
            'products' => DB::table('products')
                ->where('category', 'Baking tools')
                ->paginate(12)
        ]);
    }

    //show all products in baking equipment category
    public function bakingEquipment()
    {
        return view('user/equipment', [
            'products' => DB::table('products')
                ->where('category', 'Baking equipments')
                ->paginate(12)
        ]);
    }

    //show all products in baking supplies category
    public function bakingSupplies()
    {
        return view('user/bakingSupplies', [
            'products' => DB::table('products')
                ->where('category', 'Baking supplies')
                ->paginate(12)
        ]);
    }

    //show single product 
    public function show(Product $product)
    {
        return view('user/product', [
            'product' => $product
        ]);
    }

    //show create form
    public function create()
    {
        return view('seller/addProduct');
    }

    //store product data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'product_image' => 'required',
            'category' => 'required',
            'stock' => 'required'
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_images', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Product::create($formFields);

        Alert::success('Success', 'Product added successfully');

        return redirect('/sellerProduct');
    }

    //Show edit form
    public function edit(Product $product)
    {
        //make sure logged in user is owner
        if ($product->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action!');
        }

        return view('seller/editProduct', ['product' => $product]);
    }

    //Update product
    public function update(Request $request, Product $product)
    {
        //make sure logged in user is owner
        if ($product->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action!');
        }

        $formFields = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required',
            'stock' => 'required'
            // 'product_image' => 'required',
        ]);

        if ($request->hasFile('product_image')) {
            $formFields['product_image'] = $request->file('product_image')->store('product_images', 'public');
        }

        $product->update($formFields);

        Alert::success('Success', 'Product updated successfully!');
        return redirect('/seller');
    }

    //Delete product
    public function destroy(Product $product)
    {
        //make sure logged in user is owner
        if ($product->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action!');
        }

        $product->delete();

        Alert::success('Success', 'Product deleted successfully!');
        return back();
    }

    //Delete address
    public function destroyAddress(Address $address)
    {
        //make sure logged in user is owner
        if ($address->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action!');
        }

        $address->delete();
        Alert::success('Success', 'Address updated successfully!');
        return redirect('/checkout');
    }

    //Manage product
    public function sellerProduct()
    {
        $user_id = auth()->id();
        $products = Product::latest('created_at')
            ->where('user_id', $user_id)
            ->filter(request(['search']))
            ->paginate(10);

        return view('/seller/sellerProduct', [
            'products' => $products
        ]);
    }

    //add to cart
    public function addToCart(Request $request)
    {
        $cart = new Cart;
        $cart->user_id = auth()->id();
        $cart->product_id = $request->product_id;
        $cart->save();

        // toast('The item has been added to your cart!', 'success');
        Alert::success('Success', 'The item has been added to your cart!');
        return redirect('/');
    }

    //count cart items display cart count on nav
    public static function cartItem()
    {
        return Cart::where('user_id', auth()->id())->count();
    }

    //show cart
    public function showCartList()
    {
        $user_id = auth()->id();
        $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $user_id)
            ->select('products.*', 'carts.id as cart_id')
            ->get();

        return view('user/cart', ['products' => $products]);
    }

    //delete cart item
    public function destroyCartItem($cartId)
    {
        Cart::destroy($cartId);

        toast('Item have been removed to your cart!', 'success');

        return redirect('/cart');
    }

    //checkout count total price and show user address
    public function checkout()
    {
        $user_id = auth()->id();
        $productOrdered = DB::table('carts')
            ->where('user_id', $user_id)
            ->get();

        if ($productOrdered->isEmpty()) {
            abort(403, 'Empty Items!');
        }

        // Calculate the sum of product prices for the user's cart
        $totalPrice = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $user_id)
            ->sum('products.price');

        //show users address
        $userAddress = DB::table('addresses')
            ->select('*')
            ->where('user_id', $user_id)
            ->get();

        // Retrieve the cart items for the user
        $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $user_id)
            ->get();

        return view('user/checkout', [
            'products' => $products,
            'totalPrice' => $totalPrice,
            'userAddress' => $userAddress
        ]);
    }

    //buy now function
    public function buyNow(Product $product)
    {
        $user_id = auth()->id();

        $userAddress = DB::table('addresses')
            ->select('*')
            ->where('user_id', $user_id)
            ->get();

        return view('user/buyNow', [
            // 'user_id' => $user_id,
            'userAddress' => $userAddress,
            'products' => $product
        ]);
    }

    //place order in 'buy now'
    public function buyNowPlaceOrder(Request $request)
    {
        //validate if the customer have address
        $request->validate([
            'customer_name' => 'required',
            'address' => 'required'
        ]);

        //save order
        $user_id = auth()->id();
        $order = new Order;

        //get the seller id from product table
        $seller_id = Product::select('user_id')
            ->where('id', $request->product_id)
            ->first();

        $order->product_id = $request->product_id;
        $order->user_id = $user_id;
        $order->seller_id = $seller_id->user_id;
        $order->status = "Pending";
        $order->payment_method = $request->payment;
        $order->payment_status = "Pending";
        $order->customer_name = $request->customer_name;
        $order->address = $request->address;
        $order->save();

        $request->input();

        Alert::success('Success', 'Your order has been placed!');
        return redirect('/');
    }

    //save added address on order
    public function buyNowAddAddress(Request $request)
    {
        //save address
        $address = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'purok' => 'required',
            'zip_code' => 'required',
            'landmark' => 'required'
        ]);
        $address['user_id'] = auth()->id();
        Address::create($address);

        Alert::success('Success', 'You have added a new address!');
        return back();
    }


    //save added address on order
    public function addAddress(Request $request)
    {
        //save address
        $address = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'purok' => 'required',
            'zip_code' => 'required',
            'landmark' => 'required'
        ]);
        $address['user_id'] = auth()->id();
        Address::create($address);

        Alert::success('Success', 'You have added a new address!');
        return redirect('/checkout');
    }

    //place order
    public function placeOrder(Request $request)
    {
        //save order
        $user_id = auth()->id();
        $cartItem = Cart::where('user_id', $user_id)->get();

        $request->validate([
            'customer_name' => 'required',
            'address' => 'required'
        ]);

        foreach ($cartItem as $item) {
            $order = new Order;
            $order->product_id = $item->product_id;

            //get the seller id from product table
            $seller_id = Product::select('user_id')
                ->where('id', $item->product_id)
                ->get();
            foreach ($seller_id as $id) {
                $seller = $id->user_id;
            }

            $order->user_id = $item->user_id;
            $order->seller_id = $seller;
            $order->status = "Pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "Pending";
            $order->customer_name = $request->customer_name;
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id', $user_id)->delete();
        }

        $request->input();

        Alert::success('Success', 'Your order has been placed!');
        return redirect('/');
    }

    //show orders in user
    public function orders()
    {
        $user_id = auth()->id();
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $user_id)
            ->get();

        return view('user/orders', ['orders' => $orders]);
    }

    //show add product menu
    public function addProductMenu()
    {

        return view('/seller/addProductMenu');
    }
}
