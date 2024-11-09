<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Product1Controller extends Controller
{
    public function product1(){
        $products=Product::all();
        return view('products.product',compact('products'));
    }
    public function detail_product($id){
        $product = Product::findOrFail($id);
        return view('products.product-detail',compact('product'));
    }
}
