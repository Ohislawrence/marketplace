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
        $products = Product::where('is_approved','=', '1')->orderBy('created_at')->paginate(12);
        return view('frontviews.items', compact('products'));
    }



    public function type(Request $request, $types) {
        $type= $request->types;
        $Ptype = Type::where('slug', $type)->first();
        $products = Product::where('plantype_id', $Ptype->id)->where('is_approved','=', '1')->orderBy('created_at')->paginate(12);
        $category = Productcategory::all();
        return view('frontviews.types' , compact('products', 'Ptype', 'category'));

    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('is_approved', '1')
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('desc', 'LIKE', "%{$search}%")
            ->orderBy('created_at')->paginate(12);

        // Return the search view with the resluts compacted
        return view('frontviews.search', compact('products'));
    }

    public function homepagesearch(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        $type= $request->input('types');
        //$Ptype = Type::where('slug', $type)->first();
    //dd($type);
        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('plantype_id', $type)
            ->where('is_approved', '1')
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('desc', 'LIKE', "%{$search}%")
            ->orderBy('created_at')->paginate(12);

        // Return the search view with the resluts compacted
        return view('frontviews.search', compact('products'));
    }
}
