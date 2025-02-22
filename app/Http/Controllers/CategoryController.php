<?php

namespace app\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController
{
    public function index()
    {
        $category = category::all();
        if (Auth::check() == true) {
            return view('category.index', [
                'category' => $category,
            ]);
        } else {
            return view('auth.index');
        }
    }

    public function create()
    {
        if (Auth::check() == true) {
            return view('category.create');
        } else {
            return view('auth.index');
        }
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
        ]);
        category::create($data);
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        if (Auth::check() == true) {
            return view('category.edit', compact('category'));
        } else {
            return view('auth.index');
        }
    }

    public function update(Category $category)
    {
        $data = request()->validate([
            'name' => 'string',
        ]);
        $category->update($data);
        return redirect()->route('category.show', $category->id);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
