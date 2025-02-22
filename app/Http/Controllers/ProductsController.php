<?php

namespace App\Http\Controllers;

use App\Http\Controllers\request\FilterRequest;
use App\Models\Category;
use App\Models\product;
use App\Queries\ProductQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class ProductsController
{
    public function index(Request $request)
    {
        $products = product::filter($request);
        $categories = Category::all();
        if (Auth::check() == true) {
            return view('product.index', [
                'products' => $products,
            ], [
                'categories' => $categories,
            ]);
        } else {
            return view('auth.index');
        }
    }

    public function create()
    {
        $categories = Category::all();
        if (Auth::check() == true) {
            return view('product.create', ['categories' => $categories]);
        } else {
            return view('auth.index');
        }
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
            'price' => 'integer',
            'category_id' => 'integer'
        ]);
        product::create($data);
        return redirect()->route('product.index');
    }

    public function show(product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(product $product)
    {
        $categories = Category::all();
        if (Auth::check() == true) {
            return view('product.edit', ['categories' => $categories], compact('product'));
        } else {
            return view('auth.index');
        }
    }

    public function update(product $product)
    {
        $data = request()->validate([
            'name' => 'string',
            'price' => 'integer',
            'category_id' => 'integer'
        ]);
        $product->update($data);
        return redirect()->route('product.show', $product->id);
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
