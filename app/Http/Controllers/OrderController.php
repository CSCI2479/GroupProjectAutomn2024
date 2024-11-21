<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use Auth;


class OrderController extends Controller
{
    public function confirm_order(Request $request){
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone; 
        $userid = Auth()->user()?->id;
        $cart = Cart::where('userid', $userid)->get();

        // code for post method
        //$order = Order::find($request->order_id);
        //$order->status = 'confirmed';
        //$order->save();
    


        foreach($cart as $carts){
            $order = new Order;
            $order->name = $name;
            $order->address = $address;
            $order->phone = $phone;
            $order->user_id = $userid;
            $order->product_id=$carts->id;
            $order->save();
            return redirect()->back();
        }
        
        //return redirect()->route('order_success'); // Redirect to a success page after confirmation
    }
}
