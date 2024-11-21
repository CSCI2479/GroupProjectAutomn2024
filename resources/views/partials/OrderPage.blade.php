
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>E-Mart Shopping</title>
<style> 
@media (min-width: 1025px) {
    .h-custom {
    height: 100vh !important;
    }
    }
</style>
</head>

<body> 

@extends('layouts/index')

@section('title', 'Orders')

@section('content')

<!-- resources/views/order_confirmation.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h2>Order Confirmation</h2>

            <!-- Order Details -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Order Details</h5>
                </div>
                <div class="card-body">
                    <p><strong>Order ID:</strong> {{ $order->id }}</p>
                    <p><strong>Name:</strong> {{ $order->name }}</p>
                    <p><strong>Address:</strong> {{ $order->address }}</p>
                    <p><strong>Phone:</strong> {{ $order->phone }}</p>
                    <p><strong>Order Date:</strong> {{ $order->created_at->format('d M, Y') }}</p>
                </div>
            </div>

            <!-- Shipping Information -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Shipping Information</h5>
                </div>
                <div class="card-body">
                    <p><strong>Shipping Address:</strong> {{ $order->address }}</p>
                    <p><strong>Shipping Phone:</strong> {{ $order->phone }}</p>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="card mb-4">
                <div class="card-header">
                    <h5>Order Summary</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($order->products as $product)
                        <li class="list-group-item">
                            {{ $product->name }} ({{ $product->quantity }}) - ${{ $product->price * $product->quantity }}
                        </li>
                        @endforeach
                    </ul>
                    <hr>
                    <p class="text-right"><strong>Total:</strong> ${{ $order->total_price }}</p>
                </div>
            </div>

            <!-- Back to Orders Button -->
            <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Orders</a>
        </div>

        <div class="col-md-4">
            <!-- User Information (Optional) -->
            <div class="card">
                <div class="card-header">
                    <h5>User Information</h5>
                </div>
                <div class="card-body">
                    <p><strong>User ID:</strong> {{ $order->user_id }}</p>
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

  </body>