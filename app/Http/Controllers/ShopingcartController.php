<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Ckeckout;
use Illuminate\Http\Request;

class ShopingcartController extends Controller
{
    public function shoping(){
        return view('shoping.shoping-cart');
    }
    public function checkout(){
        $products = Product::all(); // Fetch all available products
        return view('checkout.checkout',compact('products'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'status' => 'required|string',
            'method_pay' => 'required|string',
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1'
        ]);

        $order = Order::create([
            'client_name' => $data['client_name'],
            'client_email' => $data['client_email'],
            'status' => $data['status'],
            'method_pay' => $data['method_pay'],
        ]);

        foreach ($data['products'] as $product) {
            $order->products()->attach($product['id'], ['quantity' => $product['quantity']]);
        }

        return response()->json(['success' => true]);
    }
}
