<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use App\Models\Productcategory;

class TypeController extends Controller
{
    public function items()
    {
        $products = Product::all();
        return view('frontviews.items', compact('products'));
    }

    public function software()
    {
        $products = Product::where('plantype_id', 1)->get();
        return view('frontviews.software', compact('products'));
    }

    public function learning()
    {
        $products = Product::where('plantype_id', 3)->get();
        return view('frontviews.learning', compact('products'));
    }

    public function templates()
    {
        $products = Product::where('plantype_id', 4)->get();
        return view('frontviews.templates', compact('products'));
    }

    public function creative()
    {
        $products = Product::where('plantype_id', 5)->get();
        return view('frontviews.creative', compact('products'));
    }

    public function tickets()
    {
        $products = Product::where('plantype_id', 6)->get();
        return view('frontviews.tickets', compact('products'));
    }

    public function type(Request $request, $types) {
        $type= $request->types;
        $Ptype = Type::where('slug', $type)->first();
        $products = Product::where('plantype_id', $Ptype->id)->get();
        return view('frontviews.' . $Ptype->slug , compact('products'));

}
}
