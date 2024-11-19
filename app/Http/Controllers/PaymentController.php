<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(){
        $clients = Client::all();
        $products = Product::all();
        return view('admin.payment.payment', compact('clients', 'products'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'product_id' => 'required|exists:products,id',
            'payment_method' => 'required|exists:payment_methods,id',
        ]);

        // Process payment logic here (e.g., save to the database)

        return redirect()->route('payment')->with('success', 'Payment processed successfully!');
    }
}
