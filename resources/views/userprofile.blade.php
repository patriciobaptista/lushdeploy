@extends('layout')
@section('title')

  <meta charset="utf-8">
  <link rel="stylesheet" type = "text/css" href="{{ asset('css/userprofile.css') }}">
  <title>LUSH - My Account</title>

@endsection

@section('main')

  <body class="body">

    <main id="main" class="container-fluid main">
      <div class="page-title row pt-5">
        <div class="title col-12 text-center pt-5 mb-4">
          <h1>My Account</h1>
          <div id="feature" class="feature_divider">
          </div>
        </div>
      </div>
    </div>
    <form  id="form" action="/perfil" method="post" class="mb-0 d-flex" enctype="multipart/form-data">
      @csrf

    <section id="section-left"class="row d-flex">
      <div id= "profile-pic" class="col-12 col-md-4 col-lg-4 text-center m-0">
        <img class="align-self-center col-10" src="/uploads/avatars/{{ $user->avatar }}" alt="Profile">

        <div id="changephoto" class="flex-md-column col-12">
            <label for="avatar" class="mt-3" for="avatar">Click here to change your profile photo</label>
            <input type="file" style="display:none" name="avatar" id="avatar">
            <br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-primary mb-3" type="submit" name="submitprofile">upload photo</button>
        </div>

      </div>
      <div class="section-right col-12 col-md-6 col-md-6 rounded pr-5">
        <h2>My details</h2>
          <div class="row border rounded">
            <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-3">
              <p>First Name</p>
            </div>
            <div class="value col-sm-12 col-m-7 col-lg-7 border-top pt-2">
                <p>{{ $user->name }}</p>
            </div>
            <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-3">
              <p>Surname</p>
            </div>
            <div class="value col-sm-12 col-m-7 col-lg-7 border-top pt-2">
                <p>{{ $user->surname }}</p>
            </div>
            <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-3">
              <p>e-mail address</p>
            </div>
            <div class="value col-sm-12 col-m-7 col-lg-7 border-top pt-2">
              <p>{{ $user->email }}</p>
            </div>
          </div>
          <div class="section-right mt-3">
            <h2>My address</h2>
              <div class="row border rounded">
                     <div class="field col-sm-12 col-m-5 col-lg-5 pt-3">
                       <p>Street Name</p>
                     </div>
                     <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                         <input type="text" class="form-control transparent" name="calle" id="calle" value="@if($user->direccion == null){{'Enter your street name'}}@else{{$user->direccion->street}}@endif" rows="1"></input>
                     </div>
                    <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-3">
                      <p>Floor/Apt#</p>
                    </div>
                    <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                        <input type="text" class="form-control transparent" name="apartment" id="apartment" value="@if($user->direccion == null){{'Enter your floor/apartment number'}}@else{{$user->direccion->apartment}}@endif" rows="1"></input>
                    </div>
                    <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-3">
                      <p>Postcode</p>
                    </div>
                    <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                        <input type="text" class="form-control transparent" name="postcode" id="postcode" value="@if($user->direccion == null){{'Enter your postcode'}}@else{{$user->direccion->postcode}}@endif" rows="1"></input>
                    </div>

              </div>
            </div>


          <div class="section-right mt-3">
            <h2>Card details</h2>
              <div class="row border rounded mb-4">
                <div class="field col-sm-12 col-m-5 col-lg-5 pt-3">
                  <p>Bank Name</p>
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                    <input type="text" class="form-control transparent" name="bank" id="bank" value="@if($user->carddetail == null){{'Enter your bank'}}@else{{$user->carddetail->bank}}@endif" rows="1"></input>
                </div>
                <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-3">
                  <p>Account holder</p>
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                    <input type="text" class="form-control transparent" name="owner" id="owner" value="@if($user->carddetail == null){{"Enter the account holder's name as shown on the card"}}@else{{$user->carddetail->owner}}@endif" rows="1"></input>
                </div>
                <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-3">
                  <p>card number</p>
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                    <input type="text" class="form-control transparent" name="card_number" id="card_number" value="@if($user->carddetail == null){{'Enter your 16-digit card number'}}@else{{$user->carddetail->number}}@endif" rows="1"></input>
                </div>
              </div>
              <button type="submit" name="updateDetails" class="btn btn-primary mb-4">Save My Details</button>
          </div>


          <div class="section-right mt-3">
            <h2>Change password</h2>
              <div class="row border rounded mb-4">
                <div class="field col-sm-12 col-m-5 col-lg-5 pt-3">
                  <p>Old password</p>
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">

                    <input type="password" class="form-control transparent" name="old_password" id="old_password" placeholder="Fill old password here" rows="1"></input>
                </div>


                <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-3">
                  <p>New password</p>
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                    <input type="password" class="form-control transparent" name="new_password" id="new_password" placeholder="New password" rows="1"></input>
                </div>
                <div class="field col-sm-12 col-m-5 col-lg-5 border-top pt-3">
                  <p>Repeat new password</p>
                  @if(session()->has('status'))
                      <span>
                          <strong class="sesError">{{ session('status') }}</strong>
                      </span>
                  @endif
                  @if(session()->has('success'))
                      <span>
                          <strong class="sesSuc">{{ session('success') }}</strong>
                      </span>
                  @endif
                  @if($errors->any())
                    @foreach($errors->all() as $error)
                      <span role="alert">
                          <strong class="sesError">{{ $error }}</strong>
                      </span>
                    </br>
                    @endforeach
                  @endif
                </div>
                <div class="form-group value col-sm-12 col-m-7 col-lg-7 pt-2">
                    <input type="password" class="form-control transparent" name="new_password_confirmation" id="new_password_confirmation" placeholder="Please repeat your new password" rows="1"></input>
                </div>


              </div>
              <button type="submit" name="changepassword" class="btn btn-primary mb-4">Save password</button>

          </div>



        </div>
      </section>
      </form>
    </main>
  </body>
@endsection
