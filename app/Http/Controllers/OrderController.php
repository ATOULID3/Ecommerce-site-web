<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){
        $orders=Order::all();
        return view('admin.order.order',compact('orders'));
    }
    public function add_order(){
        $products=Product::all();
        $clients=Client::all();
        return view('admin.order.add_order',compact('products','clients'));
    }
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'method_Pay' => 'required|string',
            'status' => 'required|string',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        // Créer la commande
        Order::create($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('order')->with('success', 'Order has been added successfully.');
    }
    public function order_detail($id){
        // Récupérer la commande par ID
        $order = Order::findOrFail($id);
        return view('admin.order.order_detail',compact('order'));
    }
    public function destroy($id)
    {
        // Find the order by ID
        $order = Order::findOrFail($id);

        // Delete the order
        $order->delete();

        // Redirect back with a success message
        return redirect()->route('order')->with('success', 'Order deleted successfully.');
    }
}
