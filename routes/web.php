<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;


Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{slug}', [CategoryController::class, 'singleCategory'])->name('singleCategory');


Route::get('/', [ProductController::class, 'index'])->name('products');
Route::get('product_details/{slug}', [ProductController::class, 'product_details']);

Route::get('/product_search', [ProductController::class, 'product_search'])->name('product_search');

Route::get("/remove_cart/{id}", [CartController::class, 'remove_cart']);

//Lane's defined route for order page
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');

//Route::get('/checkout', function () {
//    return 'Checkout route is working!';
//});



//Increase + Decrease Quantity
// Route::put('increase_cart_quantity{id}', [CartController::class, 'increase_cart_quantity'])->name('increase.quantity');
// Route::put('decrease_cart_quantity{id}', [CartController::class, 'decrease_cart_quantity'])->name('decrease.quantity');

// Route::get('/dashboard', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/add_cart/{id}', [CartController::class, 'add_cart'])->name('add_cart');

Route::get("/my_cart", [CartController::class, 'my_cart'])->name('cart.items');

Route::get('/dashboard', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/add_cart/{id}', [CartController::class, 'add_cart'])->middleware(['auth', 'verified'])->name('add_cart');

Route::post('/confirm_order', [OrderController::class, 'confirm_order'])->middleware(['auth', 'verified'])->name('confirm_order');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


