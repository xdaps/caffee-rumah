<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::query()
        ->available()
        ->with('category')
        ->orderBy('sort_order')
        ->limit(6)
        ->get();

    return view('home', [
        'products' => $products,
    ]);
})->name('home');

Route::get('/kategori', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/kategori/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/produk/{product:slug}', [ProductController::class, 'show'])->name('products.show');
