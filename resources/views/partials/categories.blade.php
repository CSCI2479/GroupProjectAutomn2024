<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>E-Mart Shopping</title>
<style>
div.card{
    text-align:center;
    width:23em;
    align-items:center;
}
img.card-img-top{
    height:15em;
}
div.card.my-auto{
    padding: 3em;
}
div.card.my-auto:hover{
    background-color: #DCE1E0;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}
</style>

</head>
<body>
@extends('layouts/index')

@section('title', 'All Categories')

@section('content')

<h3 class="text-center"> Our Categories </h3>


<div class="container">
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4 p-3 d-flex"> 
                <div class="card my-auto"> 
                        <a href="{{url('/categories/'. $category->slug)}}">
                        <img class="card-img-top" src="{{asset('assets/websiteimages/'.$category->image)}}" alt="Card image cap"/>
                        <div class="card-body">
                        <h5 class="card-title">{{$category->name}}</h5>
                        </div>
                        </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

</body>
</html>

