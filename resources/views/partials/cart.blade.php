<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>E-Mart Shopping</title>

</head>

<body> 
@extends('layouts/index')

@section('title', 'Cart')

@section('content')

<?php 
$total_price = 0;
?>
<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart Items</h5>
          </div>
          <div class="card-body">
          @foreach($data as $data)
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="{{asset('assets/websiteImages/'.$data->image)}}"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>{{$data->name}}</strong></p>
                <p>Price:     <strong>${{$data->price}}</strong> </p>
                <p>Quantity:     <strong>{{$data->quantity}}</strong> </p>


                <a href="{{url('remove_cart', $data->id)}}" alt=""> 
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm me-1 mb-2" data-mdb-tooltip-init
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                </a>

                
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-sm mb-2" data-mdb-tooltip-init
                  title="Move to the wish list">
                  <i class="fas fa-heart"></i>
                </button>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                
                </div>
                <!-- Quantity -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />

            <?php 
            $total_price = $total_price + $data->price;
            ?>
            @endforeach
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
              src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg"
              alt="PayPal acceptance mark" />
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center">Summary</h5>
          </div>
          <div class="card-body">
<!-- addting correct route for checkout below -->
<form class="mt-4" method="POST" action="{{ route('confirm_order') }}">
    @csrf
<!-- end of change -->
      <div data-mdb-input-init class="form-outline form-white mb-4">
      <label class="form-label" for="typeName">Name</label>
        <input type="text" id="typeName" class="form-control form-control-lg" size="25" name="name" />
      </div>

      <div data-mdb-input-init class="form-outline form-white mb-4">
      <label class="form-label" for="typeText">Address</label>
        <input type="text" id="typeText" class="form-control form-control-lg" size="50" name="address" />
      </div>

      <div class="row mb-4">
        <div class="col-md-6">
          <div data-mdb-input-init class="form-outline form-white">
          <label class="form-label" for="typeExp">Phone</label>
            <input type="text" name="phone" class="form-control form-control-lg"/>
          </div>
        </div>
  </div>

 <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                </div>
                <span><strong>${{$total_price}}</strong></span>
              </li>
            </ul>

            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">
              Place Order
            </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

@endsection
</body>

