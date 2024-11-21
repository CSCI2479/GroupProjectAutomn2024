<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
<style>
    .mt-2{
        list-style: none;
        color:red;
    }
</style>
</head>

<section class="vh-60" style="background-color: #508bfc;">

<div class="container py-5 h-80">
    <div class="row d-flex justify-content-center align-items-center h-110">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

    <div class="text-center">
     <a href="{{URL('/')}}">   <img src = "{{ URL('images/logo.png')}}"
     style="width: 115px;" alt="logo"> </a>
    </div>
    
    <h3 class="mb-5">Register</h3>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="form-outline mb-4">
            <x-input-label for="name" :value="__('Name')" class="form-label"/>
            <x-text-input id="name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="form-outline mb-3">
            <x-input-label for="email" :value="__('Email')" class="form-label"/>
            <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="form-outline mb-2">
            <x-input-label for="password" :value="__('Password')" class="form-label"/>

            <x-text-input id="password" class="form-control form-control-lg"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="form-outline mb-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label"/>

            <x-text-input id="password_confirmation" class="form-control form-control-lg"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="btn btn-primary btn-lg btn-block">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

</section>
</div>
</div>
</div>
</div>
</div>