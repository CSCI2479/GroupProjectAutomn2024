<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>E-Mart Shopping</title>
<style>
  .header-flex{
    width: 100%;
  }
  .div-header{
    padding: 10px;
  }
i.fab.fa-twitter, i.fab.fa-facebook-f, i.fab.fa-youtube, i.fab.fa-instagram, i.fab.fa-pinterest{
  color: white;
  font-size: large;
}
form.header_search-box{
  display: flex;
}
span.col-md-2.margin{
  margin-top: 25px;
}
div.col-md-2.margin{
  margin-top: 25px;
}
div.col-md-4.display-flex.margin{
  margin-top: 25px;
}
div.col-md-1.margin{
  margin-top: 25px;
}
.title-emartshop{
  font-size: large;
  font-weight: bold;
}
#search{
  width: 250px;
  padding: 7px;
}
body{
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}
footer {
  margin-top: auto;
}
a{
   color: rgb(56,56,56);
}
a:hover{
    color: rgb(56,56,56);
    text-decoration: none; 
}
h5.text-uppercase.text-white{
  color: white;
  font-size: medium;
}
a.text-white{
  color: white;
  font-size: medium;
}
h5.text-uppercase.mb-0{
  color: white;
  font-size: medium;
}
a.fab.fa-twitter, a.fab.fa-facebook, a.fab.fa-youtube, a.fab.fa-instagram, a.fab.fa-pinterest{
  color: white;
  font-size: large;
}
@media only screen and (max-width: 991px) {
  div.col-md-2.margin{
    display: inline;
  }
div.col-md-4.display-flex.margin{
  margin-top: 2px;
  padding-bottom: 7px;
}
div.row.align-items-start.header-flex{
  display: inline;
}
div.col-md-1{
  margin-right: -20px;
  display:inline;
}
div#screensize.container-div.bg-info.text-dark{
  padding-bottom: 1em;
}
}
.bg-info{
  background-color: #17a2b8;
}
.bg-primary{
  background-color: #007bff;
}
a.title-emartshop{
  color: white;
}
ul.list-unstyled{
  padding-top: 1em;
}
@media(min-width:768px){
  div.col-md-2{
    max-width: 100%;
}
}


</style>

</head>
<body>
   <!-- header start -->
   <header class="header">
    <div class="div-header bg-primary text-white">
        <div class="container">
            <div class="row align-items-start header-flex">

              <div class="col-md-2"><i class="fa-solid fa-location-dot"></i>
                Store Location
              </div>

              <div class="col-md-2"><i class="fa fa-truck"></i>
                Track Your Order
              </div>

              <div class="col-md-2"><i class="fa fa-phone"></i>
              Call Us For Enquiry
            </div>

              <div class="col-md-4"><i class="fa fa-heart"></i>
              Welcome to E-MartShop.
            </div>

              <div class="header-right">
              <span class="p-2">
              <a href="#!"><i class="fab fa-facebook-f"></i></a>
              </span>
              <span class="p-2">
              <a href="#!"><i class="fab fa-twitter"></i></a>
              </span>
              <span class="p-2"> 
              <a href="#!"><i class="fab fa-instagram"></i></a>
              </span>
              <span class="p-2"> 
              <a href="#!"><i class="fab fa-youtube"></i></a>
              </span> 
              <span class="p-2"> 
              <a href="#!"><i class="fab fa-pinterest"></i></a>
              </span>
          </div>

          </div>
        </div>
    </div>


    <div class="container-div bg-info text-dark" id="screensize">
        <div class="container">
            <div class="row align-items-start header-flex">

            <div class="col-md-1">
              <a href="{{URL('/')}}">   <img src = "{{ URL('images/logo.png')}}"
              style="width: 80px;" alt="logo"> </a>
              </div>

              <div class="col-md-2 margin">
               <a href="/" class="title-emartshop"> E-MartShop </a>
            </div>
          <div class="col-md-2 margin">
               <a href="/categories" class="all-categories text-white"> Our Categories </a>
              @if (Route::has('login'))
          </div>
    
         <!--  <div class="col-md-4 display-flex margin"> 
              <form class="header_search-box" action="{{url('product_search')}}">
                <input type="text" name="search" id="search" placeholder="Search For Products"
                    required />
               <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i>
                </button>
            </form> 
            </div> -->
            <div class="col-md-1 icon wishlist-icon margin">
                <a href="#!"> <i class="fa fa-heart text-light" style="font-size:20px"></i>
                          <span class="count text-white" style="font-size:18px" >0</span>
                </a>
            </div>             

            <div class="col-md-1 margin">
            @auth
                <a href="{{ url('my_cart') }}"> <i class="fa fa-cart-plus mr-2 text-light" style="font-size:20px"></i>
                    <span class="cart-count text-white" style="font-size:18px">{{$count}}</span>
                </a>
              </div>  

              <div class="col-md-2 margin">
                <form method="POST" action="{{route('logout')}}">
                  @csrf
                  <input class="logout btn btn-primary" type="submit" value="Logout"> 
                </form>
            </div>

            <div class="col-md-1 margin">
                @else
                  <a href="{{ route('login') }}" class="login btn btn-primary"> Log in </a>
            </div>

            <div class="col-md-1 margin">
            @if (Route::has('register'))
            <span><a href="{{ route('register') }}" class="btn btn-primary"> Register </a></span>
            </div>
            
            @endif
            @endauth
            @endif
          </div>
        </div>
    </div>
</header>


<div class="container">
 @yield('content')
</div>

<footer class="text-center text-lg-start"  style="background-color: rgb(80, 121, 109);">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase text-white">Quick Links</h5>

        <ul class="list-unstyled mb-0">
        <li>
            <a class="text-white" href="/">Home</a>
        </li>
        <li>
            <a class="text-white" href="{{ route('login') }}">Login</a>
        </li>
        <li>
            <a class="text-white" href="{{ route('register')}}">Sign Up</a>
        </li>
        <li>
            <a class="text-white" href="#!">Products</a>
        </li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mb-md-0 footer__social mt-15">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="fab fa-facebook"> </a>
          </li>

          <li>
            <a href="#!" class="fab fa-instagram"></a>
          </li>

          <li>
          <a href="#!" class="fab fa-twitter"></a>
        </li>

        <li>
        <a href="#!" class="fab fa-pinterest"></a>
        </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="text-dark text-center p-3 bg-info">
        &copy; 2024 Copyright:
    <a class="text-dark" href="/">E-MartShop. All Rights Reserved.</a>
  </div>
  <!-- Copyright -->
</footer>


</body>
</html>