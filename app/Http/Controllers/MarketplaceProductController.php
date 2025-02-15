<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\MarketplaceProduct;

class MarketplaceProductController extends Controller
{
    public function index()
    {
        $categories = Category::with('MarketplaceProduct')->get();
        return view('marketplace.marketplace', compact('categories'));
    }

    public function show($id)
    {
        // Ambil data produk berdasarkan ID
        $product = MarketplaceProduct::findOrFail($id);

        // Tampilkan halaman deskripsi produk
        return view('marketplace.deskripsi', compact('product'));
    }

    public function kategori($kategoriId)
    {
        $category = Category::findOrFail($kategoriId);
        $books = MarketplaceProduct::where('category_id', $kategoriId)->get();

        return view('marketplace.kategori', compact('category', 'books'));
    }

    public function create()
    {
        return view('marketplace.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock' => 'required|integer|min:0',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('products', 'public') : null;

        MarketplaceProduct::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
            'stock' => $request->stock,
        ]);

        return redirect()->route('marketplace.products.index')->with('success', 'Product added successfully.');
    }



    public function edit(MarketplaceProduct $marketplaceProduct)
    {
        return view('marketplace.products.edit', compact('marketplaceProduct'));
    }

    public function update(Request $request, MarketplaceProduct $marketplaceProduct)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock' => 'required|integer|min:0',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $marketplaceProduct->image = $imagePath;
        }

        $marketplaceProduct->update($request->only(['name', 'description', 'price', 'stock']));

        return redirect()->route('marketplace.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(MarketplaceProduct $marketplaceProduct)
    {
        $marketplaceProduct->delete();
        return redirect()->route('marketplace.products.index')->with('success', 'Product deleted successfully.');
    }
}
