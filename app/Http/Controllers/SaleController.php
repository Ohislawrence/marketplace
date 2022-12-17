<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;

class SaleController extends Controller
{
    public function index()
    {
        $orders = OrderItem::latest()->paginate(10);
        return view('application.sales', compact('orders'));
    }
}

