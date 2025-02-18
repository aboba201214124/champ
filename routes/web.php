<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('main');
});


Route::get('/product', [ProductsController::class, 'index'])->name('product.index');

Route::get('/product/create', [ProductsController::class, 'create'])->name('product.create');
Route::post('/product', [ProductsController::class, 'store'])->name('product.store');

Route::get('/product/{product}', [ProductsController::class, 'show'])->name('product.show');

Route::get('/product/{product}/edit', [ProductsController::class, 'edit'])->name('product.edit');
Route::patch('/product/{product}', [ProductsController::class, 'update'])->name('product.update');

Route::delete('/product/{product}', [ProductsController::class, 'destroy'])->name('product.destroy');

Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::patch('/category/{category}', [CategoryController::class, 'update'])->name('category.update');

Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
