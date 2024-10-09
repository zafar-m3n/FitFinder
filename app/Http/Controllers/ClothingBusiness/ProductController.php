<?php

namespace App\Http\Controllers\ClothingBusiness;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('clothingbusiness.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('clothingbusiness.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'image' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'size' => 'nullable|string',
            'color' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('product_images', 'public');
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'category_id' => $request->category_id,
            'size' => $request->size,
            'color' => $request->color,
            'image' => $imagePath ?? null,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('clothingbusiness.products.index')->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('clothingbusiness.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('clothingbusiness.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'image' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
            'size' => 'nullable|string',
            'color' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }
            $imagePath = $request->file('image')->store('product_images', 'public');
            $product->image = $imagePath;
        }

        $product->update($request->only('name', 'description', 'price', 'stock_quantity', 'category_id', 'size', 'color'));

        return redirect()->route('clothingbusiness.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }

        $product->delete();

        return redirect()->route('clothingbusiness.products.index')->with('success', 'Product deleted successfully.');
    }
}
