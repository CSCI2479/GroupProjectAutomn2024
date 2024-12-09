<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
use App\Models\User;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $categories = Category::get();
      $user_id = Auth()->user()?->id;
      $count = Cart::where('userid',$user_id)->count();

      return view('partials/categories', compact('categories', 'count'));
    }
    public function singleCategory($slug){
        $category = Category::where('slug', $slug)->first();

        $user_id = Auth()->user()?->id;
        $count = Cart::where('userid',$user_id)->count();

        if($category){
            $products = $category->products()->get();
            return view('partials/singlecategory', compact('products', 'category', 'count'));
        } else{
            return redirect()->back();
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
