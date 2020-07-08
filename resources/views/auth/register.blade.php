@extends('layout')

@section('main')

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/register.css') }}">
    <title>Registro</title>
  </head>
  <body>
    <section class="">
        <article class="container-fluid px-0"> <!-- Background photo -->

            <div class="row photobackground px-0" style="background-image: url({{asset('/storage/star_wp.jpg')}})">

                <div class="col-12 formcontain d-flex">

                  <form class="formAll" id="formall" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                      @csrf


                      <div class="form-group" id="divName">
                          <label for="name">{{ __('Name') }}</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"id="name" aria-describedby="nameHelp" autocomplete="name" value="{{ old('name') }}" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                      <div class="form-group" id="divSurname">
                          <label for="surname">{{ __('Surname') }}</label>
                          <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" name="surname" id="apellido" aria-describedby="apellidoHelp" value="{{ old('surname') }}" autocomplete="surname" autofocus>
                          @error('surname')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="form-group" id="divEmail">
                          <label for="email">{{ __('E-Mail Address') }}</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp"  autocomplete="email" value="{{ old('email') }}">
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <div class="form-group" id="divPass">
                          <label for="password">{{ __('Password') }}</label>
                          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" autocomplete="new-password" value="">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="form-group">
                          <label for="password-confirm">{{ __('Confirm Password') }}</label>
                          <input type="password" name="password_confirmation" class="form-control" id="password-confirm"  autocomplete="new-password"value="">
                      </div>
                      <div class="form-group">
                        <select name="country">
                          <option value="-1">Select Country</option>
                        </select>
                      </div>
                      <div id="provinces" class= "form-group">

                      </div>
                      <div class="form-group">
                          <label style="display:none" for="avatar">Subir foto de perfil: </label>
                          <input type="file" style="display:none" class="form-control" id="profilepic" name="avatar" aria-describedby="nameHelp" value="">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="checkfinal" name="checkfinal" value="">
                          <label class="form-check-label"  for="checkfinal" required>I agree to the terms and condition</label>
                      </div>
                          <small id="emailHelp" class="form-text text-muted">Lush Luxury Travel does not share personal information with third parties. </br></small>
                          </br>
                          <button id="submitbottom" type="submit" name="submit1" class="btn btn-primary">{{ __('Register') }}</button>
                     </form>
                </div>
            </div>
        </article>
    </section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('js/register.js') }}"></script>
  </body>

@endsection
