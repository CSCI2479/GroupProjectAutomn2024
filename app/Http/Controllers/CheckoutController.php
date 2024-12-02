<?php

namespace App\Http\Controllers;
use App\Models\Order;


class CheckoutController extends Controller
{
    public function index()
    {
            // Fetch the order with ID 1
    $order = Order::find(1);
    // dd($order); 

    // Check if the order exists
    if (!$order) {
        return redirect('/')->with('error', 'Order not found.');
    }

    // Pass the order to view
    return view('partials.checkout', compact('order'));
    }
    
}


