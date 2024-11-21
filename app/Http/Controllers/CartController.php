<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;

use Auth;


class CartController extends Controller
{

    public function add_cart(Request $request, $id)
    {
        if(Auth::id()){
            $product = Product::find($id);
            $cart_name = $product->name;
            $cart_description = $product->description; 
            $cart_price = $product->price;
            $cart_image = $product->image;

            $data = new Cart;
            $data->name = $cart_name;
            $data->description = $cart_description;
            $data->price = $cart_price * $request->qty;
            $data->image = $cart_image;
            $data->quantity = $request->qty;
            $data->userid = Auth()->user()?->id;

            $data->save();
            return redirect()->back();

        } else{
            return redirect("/login");
        }

    }

    public function my_cart(){
        $user_id = Auth()->user()?->id;

        $data = Cart::where('userid', "=", $user_id)->get();
        $count = Cart::where('userid',$user_id)->count();

        return view('partials/cart', compact('data', 'count'));
    }

    public function remove_cart($id){
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    // public function increase_cart_quantity($rowId){
    //    $data = Cart::get($rowId);
    //    $quantity = $data->quantity + 1;

    //    Cart::update($rowId, $quantity);
    // }

    // public function decrease_cart_quantity($rowId){
    //     $data = Cart::get($rowId);
    //     $quantity = $data->quantity - 1;
 
    //     Cart::update($rowId, $quantity);
    // }
    
}
