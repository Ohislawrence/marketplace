<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function accountsettings($username)
    {
        $userdetail = Userdetail::where('username', $username)->first();
            return view('frontviews.accountsetting', compact('userdetail'));
    }

    public function accountsettingsave(Request $request)
    {
        $this->validate($request, [
            'profileimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'coverimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $profileimage = time().rand(50,99).'.'.$request->profileimage->extension();
        $request->profileimage->move(public_path('users/profileimages'), $profileimage);

        $coverimage = time().rand(1,49).'.'.$request->coverimage->extension();
        $request->coverimage->move(public_path('users/coverimages'), $coverimage);

        $update2 = Userdetail::where('user_id', Auth::user()->id)->first();
        $update1 = $update2->user;

        $update1 ->update([
            'name' => $request->name,
        ]) ;

        $update2->update([
            'username' => $request->username,
            'coverimage' => $coverimage,
            'profileimage'=> $profileimage,
            'location'=> $request->location,
            'website'=> $request->website,
            'zip' => $request->zip,
            'company' => $request->company,
            'about_me' => $request->about,
        ]);


        return redirect()->back();
    }


    public function purchases($username)
    {
        $userdetail = Userdetail::where('username', $username)->first();
        return view('frontviews.purchases', compact('userdetail'));
    }

    public function followers($username)
    {
        $userdetail = Userdetail::where('username', $username)->first();
        return view('frontviews.followers', compact('userdetail'));
    }

    public function following($username)
    {
        $userdetail = Userdetail::where('username', $username)->first();
        return view('frontviews.following', compact('userdetail'));
    }

    public function followbutton($username)
    {
        $userdetail = Userdetail::where('username', $username)->first();
        Auth::user()->follow($userdetail->user);
        return back();
    }

    public function unfollowbutton($username)
    {
        $userdetail = Userdetail::where('username', $username)->first();
        Auth::user()->unfollow($userdetail->user);
        return back();
    }
}
