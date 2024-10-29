<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = Category::all();
        return view('admin.product.category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'image_path' => 'required|image',
            'description' => 'nullable|string',
            'status' => 'required',
        ]);

        // Create a new Category instance
        $category = new Category();

        // Handle file upload
        if ($request->hasFile('image_path')) {
            $uniqueId = Str::uuid();
            $imageName = $uniqueId . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('categories'), $imageName);
            $category->image_path = $imageName;
        }

        // Set other fields
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->status = $request->status;
        // Save the category
        $category->save();

        return redirect()->route('category')->with('success', 'Category added successfully.');
    }
    public function destroy($id)
{
    // Find the category by its ID
    $category = Category::findOrFail($id);

    // Check if there's an associated image file and delete it
    if ($category->image_path && file_exists(public_path('categories/' . $category->image_path))) {
        unlink(public_path('categories/' . $category->image_path));
    }

    // Delete the category
    $category->delete();

    return redirect()->route('category')->with('success', 'Category deleted successfully.');
}
}
