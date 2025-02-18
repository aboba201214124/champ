<?php

namespace App\Http\Controllers;

use app\Http\Controllers\request\FilterRequest;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductsController
{
    public function index(Request $request){
        $products = product::filter($request);
        $categories = Category::all();
        return view('product.index',[
            'products'=>$products,
        ],[
            'categories'=>$categories,
        ]);
    }
    public function filter(FilterRequest $request){
        $data = $request->validated();

        $query = product::query();
        if(isset($data['category_id'])){
            $query->where('category_id',$data['category_id']);
        }
        $product = $query->get();
    }
    public function create(){
        $categories = Category::all();
        return view('product.create', ['categories'=>$categories]);
    }
    public function store(){
        $data = request()->validate([
            'name' => 'string',
            'price' => 'integer',
            'category_id'=>'integer'
        ]);
        product::create($data);
        return redirect()->route('product.index');
    }
    public function show(product $product){
        return view('product.show', compact('product'));
    }
    public function edit(product $product){
        $categories = Category::all();
        return view('product.edit', ['categories'=>$categories], compact('product'));
    }
    public function update(product $product){
        $data = request()->validate([
            'name' => 'string',
            'price' => 'integer',
            'category_id'=>'integer'
        ]);
        $product->update($data);
        return redirect()->route('product.show',$product->id);
    }

    public function destroy(product $product){
        $product->delete();
        return redirect()->route('product.index');
    }
}
