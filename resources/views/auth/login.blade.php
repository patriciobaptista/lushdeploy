@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/login.css') }}">
    <title>Log in</title>
  </head>
  <body>
    <div class="foto container-fluid" style="background-image: url({{asset('/storage/plane2.jpg')}})">
      <div class="row pl-5 pt-5">
        <div class="col-8 col-md-5 col-lg-4 offset-1 pt-5">
          <form class="formulario" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form pt-5">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Ingrese su e-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
              <small id="emailHelp" class="form-text text-muted">Lush Luxury Travel does not share personal information with third parties.</small>
            <div class="form pt-3">
              <label for="password">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Ingrese su contrasena" value="" required autocomplete="current-password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
             </br>
             <div class="form-group form-check">
               <input class="remember"type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
               <label class="form-check-label remember" for="remember">Remember me</label>
             </div>
            <br>
            <button type="submit" name="login" class="btn btn-primary">log in</button>
            @if (Route::has('password.request'))
                <a class="forgot btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
          </form>
        </div>
      </div>
    </div>
  </body>

@endsection
