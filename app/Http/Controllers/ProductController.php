<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Product;
use App\Models\Productcategory;
use App\Models\Productimage;
use App\Models\Redeem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mockery\Matcher\Type;

class ProductController extends Controller
{
    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Product::where("uniqueId", "=", $code)->first());

        return $code;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('application.product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = $request->type;
        $categories = Productcategory::where('type', $type)->where('parent_id', null)->get();
        return view('application.addproduct', compact('categories', 'type'));
    }

    public function select()
    {
        return view('application.selecttype');
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
            'name' => 'required|unique:products,name',
            'desc' => 'required',
            'images' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $featuredimage = time().'.'.$request->featuredimage->extension();
        $request->featuredimage->move(public_path('products/featuredimage'), $featuredimage);


        $images = [];




        $productID = Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'desc' => $request->desc,
            'price'=> $request->price,
            'discount'=> $request->discount,
            'url'=> $request->url,
            'user_id'=> auth()->user()->id,
            'qty'=> $request->qty,
            'uniqueId'=> $this->generateUniqueCode(),
            'featureimage'=> $featuredimage,
            'resourcetype_id'=> $request->type,
            'plantype_id'=> $request->type,
            'time_offer'=> $request->timedoffer,
            'time_offer_ends'=> $request->offerends,
            'productcategory_id'=> $request->category,
            'keypoints'=> $request->keypoints,
            'short_summary' => $request->short_discription,
            'access' => $request->access,
            'ideal_for' => $request->ideal_for,
            'alternative_to' => $request->alternative_to,
            'redeem_url' => $request->redeem_url,
            'redeem_instructions' => $request->redeem_instructions,
            'integrations' => $request->integrations,
            'downloadable' => $request->link,

        ]);

        if ($request->images){
            foreach($request->images as $key => $image)
            {
                $imageName = time().rand(1,99).'.'.$image->extension();
                $image->move(public_path('products/productimage'), $imageName);
                $images['name'] = $imageName;

                Productimage::create([
                    'name' => $imageName,
                    'slug' => $imageName,
                    'product_id' => $productID->id,
                ]);
            }

        }

        if($request->itemforredeem){

            $file = $request->itemforredeem ;

            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            //$valid_extension = array("csv");

            // 2MB in Bytes
            $maxFileSize = 2097152;

            // Check file extension
            if(in_array(strtolower($extension), array("csv"))){

                // Check file size
                if($fileSize <= $maxFileSize){

                // File upload location
                $location = 'uploads';

                // Upload file
                $file->move($location,$filename);

                // Import CSV to Database
                $filepath = public_path($location."/".$filename);

                // Reading file
                $file = fopen($filepath,"r");

                $importData_arr = array();
                $i = 0;

                while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                    $num = count($filedata );

                    // Skip first row (Remove below comment if you want to skip the first row)
                    /*if($i == 0){
                        $i++;
                        continue;
                    }*/
                    for ($c=0; $c < $num; $c++) {
                        $importData_arr[$i][] = $filedata [$c];
                    }
                    $i++;
                }
                fclose($file);

                // Insert to MySQL database
                foreach($importData_arr as $importData){

                    Redeem::create([
                        'user_id' => auth()->user()->id,
                        'item' => $importData[0],
                        'redeemed' => 'no',
                        'code_or_file' => 'code',
                        'upload_method' => "bulk_upload",
                        'product_id' => $productID->id,
                    ]);

                }
                Session::flash('message','Import Successful.');
        }else{
          Session::flash('message','File too large. File must be less than 2MB.');
        }

      }
      // Check file extension
      if(in_array(strtolower($extension), array("zip")))
        {
            $fileName = Str::slug($productID->name).time().rand(1,99).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('products/files'), $fileName);


            Redeem::create([
                'user_id' => auth()->user()->id,
                'item' => $fileName,
                'redeemed' => 'no',
                'code_or_file' => 'file',
                'upload_method' => "upload",
                'product_id' => $productID->id,
            ]);

            Product::where('id', $productID->id)->update(['downloadable' => 'yes']);
        }


        }


        return redirect()->route('product.index')
        ->with('message','Product submitted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('application.editproduct');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


    public function data(Request $request){

        if($request->has('type_id')){
            $parentId = $request->get('type_id');
            $data = Productcategory::where('type',$parentId)->get();
            return ['success'=>true,'data'=>$data];
        }

    }


    public function editorupload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('products/editorimage'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('products/editorimage/'.$fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
