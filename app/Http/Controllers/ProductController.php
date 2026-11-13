<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(Product $product): View
    {
        abort_unless($product->is_available, 404);

        $product->load('category');

        $relatedProducts = Product::query()
            ->available()
            ->with('category')
            ->where('category_id', $product->category_id)
            ->whereKeyNot($product->getKey())
            ->orderBy('sort_order')
            ->limit(3)
            ->get();

        return view('products.show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }
}
