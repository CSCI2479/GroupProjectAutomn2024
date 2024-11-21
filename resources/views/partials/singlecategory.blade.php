<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Products</title>

<style>
div.card-body{
    height: 18em;
}
div.container.d-flex.justify-content-center.mt-50.mb-50{
    padding-bottom: 1em;
    padding-top: 1em;
}
div.nav-flow-div{
    font-size: medium;
    padding-top: 1em;
}
button.btn{
    margin: .3em;
}

img.card-img.img-fluid{
    height:15em;
}
@media only screen and (max-width: 991px) {
    div.card.my-auto{
        height: 40em;
    }
}
</style> 

</head>
<body>
@extends('layouts/index')

@section('title', 'Products')

@section('content')   


<div class="py-3 b-4 shadow-sm bg-secondary border-top mt-2">
    <div class="container">
        <span class="padding-right text-white"><a href="{{ url('/categories') }}" class="text-white"> Categories</a> / </span>
        <span><a href="{{ url('/') }}" class="text-white"> Products </a> </span>
    </div>
</div>

<h3 class="text-center"> {{$category->name}}</h3>

<div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        @foreach($products as $productItem)
           <div class="col-md-4 mt-2">
                <div class="card my-auto">
                        <div class="card-body">
                             <div class="card-img-actions">         
                                 <img src="{{asset('assets/websiteimages/'.$productItem->image)}}" class="card-img img-fluid" width="96" height="350" alt="">
                             </div>
                        </div>
                      <div class="card-body bg-light text-center">
                           <div class="mb-2">
                               <h6 class="font-weight-semibold mb-2">
                                      <a href="#" class="text-default mb-2" data-abc="true">{{$productItem->name}}</a>
                                </h6>
                                     <a href="#" class="text-muted" data-abc="true">{{$productItem->category->name}}</a>
                            </div>
                                 <h3 class="mb-0 font-weight-semibold">${{$productItem->price}}</h3>

                                <form action="{{url('add_cart', $productItem->id)}}" method="POST">
                                @csrf
                                <input class="" value="1" type="number" min="1" name="qty" required>
                                <button type="submit" class="btn btn-primary bg-cart btn-sm mt-2">
                                <i class="fa fa-cart-plus text-light"></i> 
                                Add to Cart </a>
                                </button>
                                </form>

                                <button type="button" class="btn btn-primary bg-wishlist btn-sm mt-2">
                                    <i class="fa fa-heart text-light"></i> 
                                            Add to WishList
                                </button>
                                <button type="button" class="btn btn-primary btn-sm mt-2">
                                <a href="{{url('product_details/'.$productItem->slug)}}" alt="" class="text-light"> Details </a>
                            </button>
                         </div>
                </div>       
           </div>
           @endforeach
     </div>
</div>







@endsection
</body>
</html>