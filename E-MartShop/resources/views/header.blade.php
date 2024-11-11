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

