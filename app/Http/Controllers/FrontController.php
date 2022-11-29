<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];

        return view('frontviews.home', compact('products', 'cart'));
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

    public function checkout()
    {
        return view('frontviews.checkout');
    }


    public function buynow(Request $request)
    {
        $userId = auth()->user()->id;
        \Cart::session($userId)->add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
                'slug' => $request->slug,
                'type' => $request->type,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        return view('frontviews.checkout');
    }


    public function favourite()
    {
        return view('frontviews.favourite');
    }
}
