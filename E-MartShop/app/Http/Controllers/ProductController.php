<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;

use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(9);
        
        $user_id = Auth()->user()?->id;
        
        $count = Cart::where('userid',$user_id)->count();

        return view('partials/products', compact('products', 'count'));

    }

    public function product_details($slug){
        $productDetail = Product::where('slug', $slug)->first();
        $user_id = Auth()->user()?->id;
        $count = Cart::where('userid',$user_id)->count();

        return view('partials/product_details', compact('productDetail', 'count'));
    }

    public function product_search(Request $request) {
        $search = $request->input('search');
        
        if (empty($search)) {
            
            return redirect()->route('products');
        }
        
        $products = Product::where('name', 'LIKE', '%' . $search . '%')->paginate(9);
        $user_id = auth()->user()?->id;
        $count = Cart::where('userid', $user_id)->count();
    
        return view('partials.products', compact('products', 'count'));
    }

    public function addToCart(Request $req){

        // $product = Product::findorfail($id);
        // $cart = session()->get('cart', []);

        // if(isset($cart[$id])){
        //     $cart[$id]['quantity']++;
        // } else{
        //     $cart[$id] = [
        //      'product_name'=>$product->name,
        //      'image'=>$product->image,
        //      'price'=> $product->price,
        //      'quantity'=>1,
        //     ];
        // }
        // session()->put('cart', $cart);
        // return redirect()->back()->with('success', 'Product added to cart successfully!');

        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }else{
            return redirect('/login');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
