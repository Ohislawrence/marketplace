<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\OrderPayment;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Order::where("uniqueId", "=", $code)->first());

        return $code;
    }


    public function index()
    {
        $products = Product::get();

        $cart = session()->get('cart');
        if ($cart == null)
            $cart = [];

        return view('store.index')->with('products', $products)->with('cart', $cart);
    }

    public function addToCart(Request $request)
    {
        session()->put('cart', $request->post('cart'));

        return response()->json([
            'status' => 'added'
        ]);
    }

    public function affiliatelink(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->amount = 0;
        $order->uniqueId = $this->generateUniqueCode();
        $order->save();

        $orderItem = new OrderItem();
        $orderItem->order_id = $order->id;
        $orderItem->product_id = $request->productID;
        $orderItem->quantity = 1;
        $orderItem->amount = 0;
        $orderItem->save();

        $orderPayment = new OrderPayment();
        $orderPayment->user_id = auth()->user()->id;
        $orderPayment->order_id = $order->id;
        $orderPayment->invoice_id = $order->uniqueId;
        $orderPayment->amount = 0;
        $orderPayment->provider = 'acarty';
        $orderPayment->status = 'paid';
        $orderPayment->save();


        return redirect(route('purchases.page',['username' => auth()->user()->userdetail->username]));
    }
}
