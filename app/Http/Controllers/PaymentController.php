<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Config;

class PaymentController extends Controller
{
    public function checkout()
    {
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        
        $params = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => 10000,],
            'customer_details' => [
                'first_name' => 'Faris',
                'email' => 'faris@example.com',
                'phone' => '081234567890',
            ],
        ];


        $snapToken = \Midtrans\Snap::getSnapToken($params);


        return view('checkout', compact('snapToken'));
    }
}