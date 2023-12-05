<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::query()->with('category');

        $name = $request->input('name');
        if (!empty($name)) {
            $product->where('name', 'like', "%{$name}%");
        }

        $category = $request->input('categories');
        if (!empty($category)) {
            $product->where('category_id', $category);
        }

        $min = $request->input('min');
        if (!empty($min)) {
            $product->where('price', '>=', $min);
        }

        $max = $request->input('max');
        if (!empty($max)) {
            $product->where('price', '<=', $max);
        }

        $products = $product->paginate(18); // Paginate the results with 2 items per page

        $categories = Category::query()->with('products')->has('products')->get();

        // $prices = $products->pluck('price')->all();
        // $priceOption = new \stdClass();
        // $priceOption->minPrice = 0;
        // $priceOption->maxPrice = 0;

        // if (!empty($prices)) {
        //     $priceOption->minPrice = min($prices);
        //     $priceOption->maxPrice = max($prices);
        // }

        return view('store.index', [
            'productsget' => $products,
            'categories' => $categories,
            // 'priceOption' => $priceOption
        ]);
    }
}

