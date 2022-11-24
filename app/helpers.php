<?php

use App\Models\Userdetail;
use Illuminate\Http\Request;

if (!function_exists('userinfo'))
{

    function userinfo($username)
    {
        //$username = $request->route('username');
        $userthis = Userdetail::where('username', $username)->first();
        return $userthis;
    }
}




?>
