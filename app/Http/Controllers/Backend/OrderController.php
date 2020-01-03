<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Product;

class OrderController extends Controller
{
    public function showProducts($order_id){
    	$orders = Order::find($id);
        $products = $orders->products;
        dd($products);
    }
}
