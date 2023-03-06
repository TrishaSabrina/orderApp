<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    

    public function index()
    {
        $orders = Order::with('product')->get();
        $products=Product::all();
        return view('index', compact('orders','products'));
    }


    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }
    


    public function store(Request $request)
    {
        $order = new Order;
        $order->product_id = $request->product_id;
        $order->amount = $request->amount;
        $order->customer = $request->customer;
        $order->save();
    
        return redirect()->route('orders.index');
    }



}
