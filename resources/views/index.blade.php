@extends('layout')
@section('main')
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/index.css') }}">
    <title>LUSH - Luxury Travel</title>
  </head>
    <div id="video" class="container-fluid">
      <video autoplay muted loop id="myVideo">
      <source src="{{asset('/storage/videomp4.mp4')}}" type="video/mp4">
      </video>
    </div>
    <div class="icons row">
      <div class="col-12 col-md-12 col-lg-4 text-center">
        <img class="imagen" src="{{asset('/storage/servicio.png')}}" alt="foto">
        <h2>service</h2>
        <div class="feature_divider">
        </div>
        <p>Tailor-made packages designed by our team of specialists, including flights, accommodation and transfers. Imagine your trip anywhere around the world and we will create it for you.<br>"Leave it with us!"</p>
      </div>
      <div class="col-12 col-md-12 col-lg-4 text-center">
        <img class="imagen" src="{{asset('/storage/comfort.png')}}" alt="foto">
        <h2>comfort</h2>
        <div class="feature_divider">
        </div>
        <p>First class flights, 5* and 6* accommodation at the most exotic and exclusive locations in the world, and concierge services available to you 24/7. Experience seamless service from our dedicated team.<br>"Just sit back and relax!"</p>
      </div>
      <div class="col-12 col-md-12 col-lg-4 text-center">
        <img class="imagen" src="{{asset('/storage/exclusividad.png')}}" alt="foto">
        <h2>exclusivity</h2>
        <div class="feature_divider">
        </div>
        <p>A wide range of unique experiences, such as Michelin-star dining, private yacht sailing, all-inclusive safari adventures and VIP access to some of the exclusive events.<br>"Live like a king!"</p>
      </div>
    </div>
    <div id="destinations" class="container-fluid" style="background-image: url({{asset('/storage/pool.jpg')}})">
      <div class="row">
        <div class="boton col-12 button text-center">
            <h2 id="h2">explore</h2>
            <p>The most exclusive locations around the globe</p>
            <button type="button" onclick="window.location.href='/destinos'" class="btn btn-light">Destinations</button>
        </div>
      </div>
    </div>
@endsection
