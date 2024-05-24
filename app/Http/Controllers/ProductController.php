<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $product = new Product();
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->price = $data['price'];

        $product->save();

        return redirect()->route('products.index')->with('success', 'Продукт успешно создан!');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->price = $data['price'];

        $product->save();

        return redirect()->route('products.index')->with('success', 'Продукт успешно обновлен!');
    }

    public function destroy($id)
    {
       {
           $product = Product::findOrFail($id);
           $product->delete();

           return redirect()->route('products.index')->with('success', 'Продукт успешно удален!');
        }
    }
}

