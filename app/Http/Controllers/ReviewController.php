<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function reviews(Product $product){
        $reviews=Review::all();
        return view('admin.review.review',['product' => $product],compact('reviews'));
    }
    public function add_review(){
        $clients=Client::all();
        $products=Product::all();
        return view('admin.review.add_review',compact('clients'),compact('products'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
        ]);

        Review::create([
            'client_id' => $request->client_id,
            'product_id' => $request->product_id,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return redirect()->route('reviews')->with('success', 'Review added successfully!');
    }

}
