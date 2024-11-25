<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('stock', '>', 0)->get();

        return view('products.index', compact('products'));
    }
    public function decreasestock(product $product)
    {
        if ($product->stock > 0) {
            $product->stock--;
            $product->save();
        }

        return redirect()->route('products.index')->with('success', 'stock disminuido correctamente.');
    }

    public function increaseStock(Product $product)
    {
        $product->stock++;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Stock disminuido correctamente.');
    }
}
