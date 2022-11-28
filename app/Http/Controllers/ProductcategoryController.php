<?php

namespace App\Http\Controllers;

use App\Models\Productcategory;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productcategory = Productcategory::all();
        return view('application.productcategory', compact('productcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        $parentcategory = Productcategory::where('parent_id', null)->orderby('name', 'asc')->get();
        return view('application.addproductcategory', compact('types', 'parentcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:productcategories,name',
            'desc' => 'required',
            'type' => 'required',
            'parentcategory' => 'nullable',
        ]);

        Productcategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'desc' => $request->desc,
            'type' => $request->type,
            'parent_id' => $request->parentcategory,

        ]);

        return redirect()->route('product-category.index')
        ->with('success','Blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Productcategory $productcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Productcategory $productcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productcategory $productcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productcategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productcategory $productcategory)
    {
        //
    }
}
