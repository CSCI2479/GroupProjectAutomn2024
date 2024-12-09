
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Checkout</title>
<style> 
@media (min-width: 1025px) {
    .h-custom {
    height: 100vh !important;
    }
    }
</style>
</head>

<body> 

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif


@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container">
    <h1>New Checkout View</h1>
    
    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
    <p><strong>Total:</strong> ${{ number_format($order->total, 2) }}</p>
</div>
@endsection
