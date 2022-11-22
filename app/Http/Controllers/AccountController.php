<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account($username)
    {


        $userdetail = Userdetail::where('username', $username)->first();
        if ($userdetail === null) {
            # code...
        } else {
            return view('frontviews.accountpage', compact('userdetail'));
        }

    }


    public function accountsettings()
    {


            return view('application.accountsetting');


    }


    public function accountsettingsave(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:userdetails,name',
            'desc' => 'required',
        ]);


        $profileimage = time().'.'.$request->featuredimage->extension();
        $request->featuredimage->move(public_path('users/profileimages'), $profileimage);

        $productID = Userdetail::create([
            'name' => $request->name,
            'coverimage' => $request->desc,
            'profileimage'=> $request->price,
            'location'=> $request->discount,
            'website'=> $request->discount,
        ]);


        return redirect()->back();


    }
}
