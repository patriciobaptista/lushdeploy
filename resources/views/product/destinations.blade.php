@extends('layout')

@section('title')
  <link rel="stylesheet" type ="text/css" href="{{asset('css/destinations.css') }}">
  <title>Destinos</title>
@endsection
@section('main')


      <div class="container-fluid contphot pt-5" id="background">

        <div class="row mb-2">
          <div class="col-12 text-center mt-3 pt-3">
            <h1>Destinations</h1>
            </div>
            <div id="feature"class="feature_divider">
            </div>
          </div>

      <section class="dad d-flex">

        <div class="row embodiment w-100">

            @foreach($products as $product)


            <div class="col-12 col-md-5 carouselparent">
        <div id="carouselhead{{$loop->index}}" class="carousel slide w-100" data-interval="0" data-ride="carousel"> <!-- First slideshow -->


              <ol class="carousel-indicators">
                 @foreach ($product->photos as $photo)



                <li data-target="#carouselhead{{$loop->parent->index}}" data-slide-to="{{$loop->index}}" class="@if($loop->index < 1){{"active"}}@endif"></li>

                @endforeach
              </ol>
              <div class="carousel-inner">

                @foreach ($product->photos as $photo)

                    <div class="carousel-item @if($loop->index < 1){{"active"}}@endif">
                      <img class="img-thumbnail rounded d-block innerphoto" src="{{asset('storage/DestinationPhoto/' . $photo->name)}}" alt="{{$product->destination . $loop->index}}">
                    </div>


                  @endforeach

              </div>

                  <a class="carousel-control-prev" href="#carouselhead{{$loop->index}}" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselhead{{$loop->index}}" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
                </div>

                <div class="col-12 bottomtext py-3">

                  <h2 class="photoheader">{{$product->destination}}</h2>
                    <p class="">{{$product->description}}</p>
                    <a href="destinos/{{$product->id}}">Read More</a>

                </div>
            </div>
          @endforeach


            </div>

      </section>

      </div>


@endsection
