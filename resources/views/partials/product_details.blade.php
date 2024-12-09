<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>E-Mart Shopping</title>

</head>
<style>
.img{
    width: 200px;
}
div.container.py-5{
    width: 80%;
}
button.btn{
    margin: .3em;
}
</style>
<body>

@extends('layouts/index')

@section('title', '{{$products->name}}')

@section('content')


<h3 class="text-center"> Product Details </h3>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="justify-content-center mb-3">
        <div class="card">
          <div class="card-body">
            <div class="">
              <div class="">
                <div class="img">
                  <img src="{{asset('assets/websiteimages/'.$productDetail->image)}}"
                    class="w-100" />
                  <a href="#!">
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="">
                <h5>{{$productDetail->name}}</h5>
                </div>
                <p class="">
                {{$productDetail->description}}
                </p>
              </div>
              <div class="">
                <div class="">
                  <h4 class="">${{$productDetail->price}}</h4>
                </div>
                <div class="">       

                    <form action="{{url('add_cart', $productDetail->id)}}" method="POST">
                                @csrf
                                <input class="" value="1" type="number" min="1" name="qty" required>
                                <button type="submit" class="btn btn-primary bg-cart">
                                <i class="fa fa-cart-plus text-light"></i> 
                                Add to Cart </a>
                                </button>
                      </form>

                <button type="button" class="btn btn-primary bg-wishlist">
                    <i class="fa fa-heart text-light"></i> 
                             Add to WishList
                </button>
                </div>
              </div>
            </div>
          </div>
        </div>
  
 
  </div>
</section>



@endsection

</body>
</html>