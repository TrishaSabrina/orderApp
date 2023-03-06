<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;

class ProductController extends Controller
{
    


public function index()
{
    $orders = Order::with('product')->get();
    $products = Product::all();
    return view('index', compact('orders', 'products'));
}




public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    $product = new Product;
    $product->name = $request->name;
    $product->size = $request->size;
    $product->save();

    return redirect()->route('products.index');
}













}
