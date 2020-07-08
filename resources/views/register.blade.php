@extends('layout')
@section('title')
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/register.css') }}">
    <title>Registro</title>

@endsection
@section('main')

    <body>
      <section class="">
          <article class="container-fluid px-0"> <!-- Background photo -->

              <div class="row photobackground px-0" style="background-image: url({{asset('/storage/star_wp.jpg')}})">

                  <div class="col-12 formcontain d-flex">
                    <form class="formAll" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"id="name" aria-describedby="nameHelp" required autocomplete="name" value="{{ old('name') }}" autofocus>
                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>
                        <div id="divName" class="form-group">

                        </div>
                        <div class="form-group">
                            <label for="surname">{{ __('Surname') }}</label>
                            <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" name="surname" id="apellido" aria-describedby="apellidoHelp" placeholder="Escribir Apellido" value="{{ old('surname') }}"required autocomplete="surname" autofocus>
                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" required autocomplete="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password" value="">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password-confirm" required autocomplete="new-password"value="">
                        </div>
                        <div class="form-group">
                            <label for="profilepic">Subir foto de perfil: </label>
                            <input type="file" class="form-control" id="profilepic" name="profilepic" aria-describedby="nameHelp" value="">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="checkfinal" name="checkfinal" value="">
                            <label class="form-check-label"  for="checkfinal" required>He leído los términos y condiciones</label>
                        </div>
                            <small id="idHelp" class="form-text text-muted">Lush Luxury Travel no comparte informacion personal con terceros. </br></small>
                            </br>
                            <button id="submitbottom" type="submit" name="submit" class="btn btn-primary">{{ __('Register') }}</button>
                       </form>
                  </div>
              </div>
          </article>
      </section>
    </body>
@endsection
