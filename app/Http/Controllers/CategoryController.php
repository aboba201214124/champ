<?php

namespace app\Http\Controllers;

use App\Models\Category;

class CategoryController
{
    public function index(){
        $category = category::all();

        return view('category.index',[
            'category'=>$category,
        ]);
    }
    public function create(){
        return view('category.create');
    }
    public function store(){
        $data = request()->validate([
            'name' => 'string',
        ]);
        category::create($data);
        return redirect()->route('category.index');
    }
    public function show(Category $category){
        return view('category.show', compact('category'));
    }
    public function edit(Category $category){
        return view('category.edit', compact('category'));
    }
    public function update(Category $category){
        $data = request()->validate([
            'name' => 'string',
        ]);
        $category->update($data);
        return redirect()->route('category.show',$category->id);
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('category.index');
    }
}
