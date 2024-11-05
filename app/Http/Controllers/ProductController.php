<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $products = Product::all();
        return view('admin.product.product-admin', compact('products'));
    }
    public function add_product(){
        $categories = Category::all();
        return view('admin.product.add_product',compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required',
            'barcode' => 'required|string|unique:products,barcode',
            'description' => 'nullable|string',
            'image' => 'required|image',
            'size' => 'nullable|string',
            'color' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'vendor' => 'nullable|string|max:255',
            'collection' => 'nullable|string|max:255',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->status = $request->status;
        $product->barcode = $request->barcode;
        $product->description = $request->description;
        $product->size = $request->size;
        $product->color = $request->color;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->vendor = $request->vendor;
        $product->collection = $request->collection;

        // Handle image upload
        if ($request->hasFile('image')) {
            $uniqueId = Str::uuid();
            $imageName = $uniqueId . '.' . $request->image->extension();
            $request->image->move(public_path('product'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('product')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive,archived',
            'barcode' => 'required|string|unique:products,barcode,' . $product->id,
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'size' => 'nullable|string',
            'color' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'vendor' => 'nullable|string|max:255',
            'collection' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $uniqueId = Str::uuid();
            $imageName = $uniqueId . '.' . $request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
            $product->image = $imageName;
        }

        $product->update($request->except(['image']));

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
    // Find the category by its ID
    $products = Product::findOrFail($id);

    // Check if there's an associated image file and delete it
    if ($products->image && file_exists(public_path('product/' . $products->image))) {
        unlink(public_path('product/' . $products->image));
    }

        $products->delete();

        return redirect()->route('product')->with('success', 'Product deleted successfully.');
    }
}

