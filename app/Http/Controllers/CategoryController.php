<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::query()
            ->withCount(['products' => fn ($query) => $query->available()])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        $products = Product::query()
            ->available()
            ->with('category')
            ->orderBy('sort_order')
            ->get();

        return view('categories.index', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function show(Category $category): View
    {
        $products = $category->products()
            ->available()
            ->with('category')
            ->orderBy('sort_order')
            ->get();

        $otherCategories = Category::query()
            ->whereKeyNot($category->getKey())
            ->orderBy('sort_order')
            ->get();

        return view('categories.show', [
            'category' => $category,
            'products' => $products,
            'otherCategories' => $otherCategories,
        ]);
    }
}
