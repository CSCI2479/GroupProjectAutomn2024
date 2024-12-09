<html> 
<head>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
</head> 

<style>
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
a.fa.fa-twitter, a.fa.fa-facebook, a.fa.fa-youtube, a.fa.fa-instagram, a.fa.fa-pinterest{
  color: white;
  font-size: large;
}
</style> 

<footer class="text-center text-lg-start"  style="background-color: rgb(80, 121, 109);">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
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
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0 footer__social mt-15">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="fa fa-facebook"> </a>
          </li>

          <li>
            <a href="#!" class="fa fa-instagram"></a>
          </li>

          <li>
          <a href="#!" class="fa fa-twitter"></a>
        </li>

        <li>
        <a href="#!" class="fa fa-pinterest"></a>
        </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-dark text-center p-3 bg-info">
        &copy; 2024 Copyright:
    <a class="text-dark" href="/">E-MartShop. All Rights Reserved.</a>
  </div>
  <!-- Copyright -->
</footer>
</html>