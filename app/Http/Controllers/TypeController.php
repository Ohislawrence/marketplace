<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
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
