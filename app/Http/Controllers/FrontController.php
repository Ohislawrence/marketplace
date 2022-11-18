<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('frontviews.home', compact('products'));
    }


    public function singleproduct($productslug)
    {
        $product = Product::where('slug', $productslug)->first();
        if ($product) {
            return view('frontviews.singleproduct', compact('product'));
        } else {
            return view('frontviews.singleproducterror');
        }


    }
}
