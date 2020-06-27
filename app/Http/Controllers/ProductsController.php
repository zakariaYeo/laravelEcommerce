<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(6)->get();
        return view('products.index')->with('products',$products);
    }

    public function show($slug)
    {
        $product = product::where('slug',$slug)->firstOrFail();
        return view('products.show')->with('product',$product);
    }
}
