<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;

class TypeController extends Controller
{
    public function items()
    {
        $products = Product::all();
        return view('frontviews.items', compact('products'));
    }

    public function software()
    {
        return view('frontviews.software');
    }

    public function learning()
    {
        return view('frontviews.learning');
    }

    public function templates()
    {
        return view('frontviews.templates');
    }

    public function creative()
    {
        return view('frontviews.creative');
    }

    public function tickets()
    {
        return view('frontviews.tickets');
    }
}
