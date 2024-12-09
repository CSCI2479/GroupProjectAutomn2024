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
div.container.d-flex.justify-content-center.mt-50.mb-50{
    padding-bottom: 1em;
    padding-top: 1em;
}
div.nav-flow-div{
    font-size: medium;
    padding-top: 1em;
}
img.card-img.img-fluid{
    height: 10em;
    width: 15em;
    text-align: center;
}
div.card.my-auto{
    align-items: center;
}
button.btn{
    margin: .3em;
}
.products{
    margin-left: 675px;
    margin-bottom: 15px;
    margin-top: 15px;
    font-weight: bold;
    font-style: italic;
}
</style> 

</head>
<body>
@extends('layouts/index')

@section('title', 'All Products')

@section('content')   


<h3 class="text-center"> Our Products </h3>

<div class="search-bar"> 
              <form class="text-center" action="{{ route('product_search') }}" method="GET" novalidate>
                @csrf
                <input type="text" name="search" id="search" style="width:400;" placeholder="Search For Products"
                    required />
               <button class="btn btn-primary" type="submit"><i class="fas fa-search p-2"></i>
                </button>
            </form>
</div>

<div class="container d-flex justify-content-center mt-50">
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

                                <button type="submit" class="btn btn-primary bg-cart">
                                <i class="fa fa-cart-plus text-light"></i> 
                                Add to Cart </a>
                                </button>
                                
                            </form>

                             <button type="button" class="btn btn-primary bg-wishlist">
                             <i class="fa fa-heart text-light"></i> 
                             Add to WishList
                            </button>

                            <button type="button" class="btn btn-primary">
                                <a href="{{url('product_details/'.$productItem->slug)}}" alt="" class="text-light"> Details </a>
                            </button>
                         </div>
                </div>       
           </div>
           @endforeach
     </div>
</div>


</div>
<div class="products">
    {{ $products->links() }}
</div>




@endsection
</body>
</html>