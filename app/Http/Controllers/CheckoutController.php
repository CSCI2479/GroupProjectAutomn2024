<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    public function show()
    {
        $order = Order::latest()->first();
    
  
        if (!$order) {
            return redirect('/')->with('error', 'Order not found.');
        }
        return view('partials.checkout', compact('order'));
    }

    public function confirm_order(Request $request)
{
    // Validation
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
    ]);


    $order = Order::create([
        'customer_name' => $validated['name'],
        'address' => $validated['address'],
        'phone' => $validated['phone'],
        'total' => session('total_price', 0),
    ]);


    return redirect()->route('checkout')->with('success', 'Order placed successfully!');
}

    
}