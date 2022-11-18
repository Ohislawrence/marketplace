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
}
