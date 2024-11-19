<!DOCTYPE html>
<html>
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
<style>
  .mt-2{
        list-style: none;
        color:red;
    }
</style>
</head>
<body>

<section class="vh-60" style="background-color: #508bfc;">

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-110">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

    <div class="text-center">
     <a href="{{URL('/')}}">   <img src = "{{ URL('images/logo.png')}}"
     style="width: 115px;" alt="logo"> </a>
    </div>

        <h3 class="mb-5">Sign in</h3>
         <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

     <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div data-mdb-input-init class="form-outline mb-4">
            <x-input-label class="label" for="email" :value="__('Email')" class="form-label" />
            <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div data-mdb-input-init class="form-outline mb-3">
            <x-input-label class="label" for="password" :value="__('Password')" class="form-label"/>

            <x-text-input id="password" class="form-control form-control-lg"
                            type="password"
                            name="password"
                            required autocomplete="current-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="form-check d-flex justify-content-start mb-4">
            <label for="remember_me" class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>
        </div>

        <div>
            <x-primary-button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="flex items-center justify-end mt-4">
            <p>Don't have an account? <a href= "{{ __('register') }}"
                class="link-danger">Register</a></p>
          </div>

        </form>
        </div>    
    </div>
</div>
</div>
</div>

</section>  


</body>
</head>
</html>