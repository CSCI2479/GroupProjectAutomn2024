<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>E-Mart Shopping</title>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-Mart</a>
    </div>
    <ul class="nav navbar-nav">
    @if (Route::has('login'))
      <li class="active"><a href="{{ url('/')}}" class="home"> Home </a></li>
     @auth
     <a href="{{ url('/dashboard') }}" class="dashboard-nav"> Dashboard</a>
     @else
        <li><a href="{{ route('login') }}" class=""> Log in </a></li>
      @if (Route::has('register'))
                <li><a href="{{ route('register') }}"> Register </a></li>
      @endif
      @endauth
      </ul>
      @endif
  </div>
</nav>
<div class="dropdown">
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#Home">Aspirin</a>
    <a href="#Help">Bottle</a>
    <a href="#Item #1">Microphone</a>
    <a href="#Item #2">Tablet</a>
    <a href="#Item #3">Watch</a>
    <a href="#Item #4">Book</a>
    <a href="#Item #5">Bookbag</a>
  </div>
</div> 
<!--CSS-->
<style>

  .dropdown {
       position: relative;
       display: inline-block;
       float: right;
    }

  .dropdown-content {
       position: absolute;
       background-color: #f6f6f6;
       min-width: 230px;
       border: 1px solid #ddd;
       z-index: 1;
}

  .dropdown-content a {
       color: black;
       padding: 12px 16px;
       text-decoration: none;
       display: block;
}

  .dropdown-content a:hover {
       background-color: #f1f1f1;
}

   #myInput {
       box-sizing: border-box;
       background-image: url('search-512.webp');
       background-position: 14px 12px;
       background-repeat: no-repeat;
       font-size: 16px;
       padding: 14px 20px 12px 45px;
       border: none;
       border-bottom: 1px solid #ddd;
       
}

   #myInput:focus {
       outline: 3px solid #ddd;
}

   .show {
       display:block;
}

</style>
    <!--Javascript-->
<script>

    function filterFunction() {

        var input, filter, ul, li, a, i;

        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");

           for (i = 0; i < a.length; i++) {
              txtValue = a[i].textContent || a[i].innerText;
           if (txtValue.toUpperCase().indexOf(filter) > -1) {
              a[i].style.display = "";
    } else {
        a[i].style.display = "none";
    }
  }
} 
  
    </script>
</body>
</html>
