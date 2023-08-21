<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Address;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //show customer order
    public function showOrder()
    {
        $seller_id = auth()->id();
        $orders = Order::latest('orders.created_at')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.seller_id', $seller_id)
            ->filter(request(['search']))
            ->paginate(10);

        return view('/seller/customerOrder', [
            'orders' => $orders
        ]);
    }
}
