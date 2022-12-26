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
        $price_filter = $request->price_filter;
        $alternativetos = $request->alternativeto;
        $idealfor = $request->idealfor;
        $access = $request->access;
        $pricerange = $request->pricerange;
        $Ptype = Type::where('slug', $type)->first();
        //dd($request->pricerange);

        $allproducts = Product::where('plantype_id', $Ptype->id)->where('is_approved', '1');

        if($request->shop_search_form == 'submit')
        {
            $products = $allproducts->query();
        }else{
            $products = $allproducts;
        }



        if($alternativetos != null)
        {
            foreach($alternativetos as $alternativeto)
            {
                $products->where('alternative_to' , $alternativeto );
            }
        }

        if($idealfor != null)
        {
            foreach($idealfor as $ideal)
            {
                $products->where('ideal_for' , $ideal );
            }
        }

        if($access != null)
        {
            foreach($access as $accesses)
            {
                $products->where('access' , $accesses );
            }
        }

        if($pricerange != null)
        {
            $pric = $pricerange;
            $price = explode(',', $pricerange);
            $minprice = number_format($price[0]);
            $maxprice = number_format($price[1]);
            $products->where('price', '>=', $minprice)->where('price', '<=', $maxprice);
        }




        $category = Productcategory::all();
        if($request->category != null)
        {
            $catID = $category->where('slug', $request->category)->first();
            $catID = $catID->id;
            $products->where('productcategory_id', $catID );

        }


        //prices
        if( $price_filter =='desc' )
        {
            $products->orderBy('price' , 'desc' );
        }
        elseif($price_filter =='asc')
        {
            $products->orderBy('price' , 'asc' );
        }
        else{
            $products->orderBy('created_at' );
        }

        $products = $products->paginate(12);


        return view('frontviews.types' , compact('products', 'Ptype', 'category','allproducts'));

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
