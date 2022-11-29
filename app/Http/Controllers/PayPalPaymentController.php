<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderPayment;
use Illuminate\Support\Facades\Auth;

class PayPalPaymentController extends Controller
{
    public function generateUniqueCode()
    {
        do {
            $code = random_int(100000, 999999);
        } while (Order::where("uniqueId", "=", $code)->first());

        return $code;
    }


    public function handlePayment()
    {
        $userId = auth()->user()->id;
        $cart = \Cart::session($userId)->getContent();

        $totalAmount = 0;

        foreach ($cart as $item) {
            $totalAmount += $item['price'] * $item['quantity'];
        }

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->amount = $totalAmount;
        $order->uniqueId = $this->generateUniqueCode();
        $order->save();

        $data = [];

        foreach ($cart as $item) {
            $data['items'] = [
                [
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'desc'  => $item['name'],
                    'quantity' => $item['quantity'],
                ]
            ];

            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item['id'];
            $orderItem->quantity = $item['quantity'];
            $orderItem->amount = $item['price'];
            $orderItem->save();
        }

        $orderpayment = new OrderPayment();
        $orderpayment->order_id= $order->id;
        $orderpayment->user_id = Auth::user()->id;
        $orderpayment->amount = $totalAmount;
        $orderpayment->invoice_id = $order->uniqueId;
        $orderpayment->provider = 'Paypal';
        $orderpayment->status = 'unpaid';
        $orderpayment->save();


        $data['invoice_id'] = $order->uniqueId;
        $data['invoice_description'] = "Your Order #{$order->uniqueId}";
        $data['return_url'] = route('paypal.success');
        $data['cancel_url'] = route('paypal.cancel');
        $data['total'] = $totalAmount;

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.success'),
                "cancel_url" => route('paypal.cancel'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $totalAmount,
                    ],
                    "invoice_id" => $order->uniqueId,
                    "final_capture" => true,
                ]
            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return redirect()
                ->route('cart.index')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('cart.index')
                ->with('error', $response['message'] ?? 'Something went wrong.');


        }

    }

    public function paymentCancel()
    {
        return redirect()
            ->route('cart.index')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }

    public function paymentSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();

        $response = $provider->capturePaymentOrder($request['token']);
        if (isset($response['status']) && $response['status'] == 'COMPLETED')
        {

            $paid = OrderPayment::where('invoice_id', $response['invoice_id'] )->update(['status' => 'paid']);
            //$paid->update(['status' => 'paid']);
            //$paid->status = 'paid';
            //$paid->save();
            return redirect()
                ->route('purchases.page')
                ->with('success', 'Transaction complete.');
        } else {
            return redirect()
                ->route('cart.index')
                ->with('error', $response['message'] ?? 'Something went wrong.');
    }
    }
}
