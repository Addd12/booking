<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment.payment');
    }

    public function processPayment(Request $request)
    {
        $apiKey = env('STRIPE_SECRET');
        echo $apiKey;
        //dd($apiKey);
        Stripe::setApiKey($apiKey);

        try {
            Charge::create([
                'amount' => 1000, // Amount in cents
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'Test Payment',
            ]);

            return redirect()->route('payment.success')->with('success', 'Payment successful!');
        } catch (\Exception $e) {
            return redirect()->route('payment.failure')->with('error', $e->getMessage());
        }
    }
}
