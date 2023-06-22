<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    
    public function show($id){
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
    
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
    
        return redirect()->route('products.index')->with('success', 'Продукт успішно додано.');
    }

    public function create() {
        return view('products.create');
    }
}
