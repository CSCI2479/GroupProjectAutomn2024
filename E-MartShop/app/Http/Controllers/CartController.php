<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{

    // show the cart page with the products
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('products.cart', compact('cart'));
    }


    // this will add the products to cart
    public function addToCart(Request $request, $productId)
    {
        $product = Product::find($productId);
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return response()->json(['totalItems' => array_sum(array_column($cart, 'quantity'))]);
    }


    // will update the price and quantity with total
    public function update(Request $request)
    {
        $productId = $request->product_id;
        $quantity = $request->quantity;

        // Assume the cart is stored in the session
        $cart = session('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            session(['cart' => $cart]);

            $newSubtotal = $cart[$productId]['price'] * $quantity;
            return response()->json([
                'success' => true,
                'newSubtotal' => $newSubtotal,
                'message' => 'Cart updated'
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Product not found in cart']);
    }

    // remove product from cart
    public function remove(Request $request)
    {
        $cart = session()->get('cart', []);
        $productId = $request->product_id;

        if (isset($cart[$productId])) {
            unset($cart[$productId]); // Remove the item
            session()->put('cart', $cart); // Update the session
            $total = array_sum(array_column($cart, 'quantity', 'price')); // Recalculate total

            return response()->json([
                'success' => true,
                'total' => $total
            ]);
        }

        return response()->json(['success' => false]);
    }


    // get totals for the cart and show it there down in the page
    public function getTotals()
    {
        $cart = session()->get('cart', []);
        $subtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $total = $subtotal;

        return response()->json([
            'subtotal' => $subtotal,
            'total' => $total
        ]);
    }


}
