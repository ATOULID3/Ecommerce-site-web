<?php

namespace App\Http\Controllers;

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
        $validatedData = $request->validate([
            'product_id' => 'exists:products,id',
            'quantity' => 'integer|min:1',
            'address' => 'string',
            'code_promo' => 'nullable|string',
        ]);

        $product = Product::find($validatedData['product_id']);
        $totalPrice = $product->price * $validatedData['quantity'];

        $checkout = Ckeckout::create([
            'product_id' => $validatedData['product_id'],
            'quantity' => $validatedData['quantity'],
            'total_price' => $totalPrice,
            'code_promo' => $validatedData['code_promo'],
            'address' => $validatedData['address'],
        ]);

        return response()->json([
            'message' => 'Checkout successfully created!',
            'data' => $checkout,
        ]);
    }
}
