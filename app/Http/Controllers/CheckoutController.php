<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function show()
    {
        return view('checkout');
    }

    public function confirmPayment(Request $request)
    {
        // Handle payment confirmation logic here
        // You might want to validate the phone number and process the payment

        return redirect()->route('homepage')->with('success', 'Payment confirmed successfully!');
}
}
