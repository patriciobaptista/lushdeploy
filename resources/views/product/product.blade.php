@extends('layout')
@section('title')
  <link rel="stylesheet" type ="text/css" href="{{asset('css/product.css') }}">
  <title>Destinos</title>
@endsection

@section('main')


  <div class="container-fluid prodcont row pt-5">
            <div class="photos col-12 col-md-12 col-lg-6 pt-2">
              <div class="photo-big mb-3 p-3">
                <img src="{{asset('storage/DestinationPhoto/' . $product->photos->first()["name"]) }}" alt="{{$product->photos->first()->name}}">
              </div>
              <div class="photo-small mb-3 pt-4 col-12">
                <div class="row mb-3">
                   @foreach ($product->photos as $photo)



                  <div class="col-4">
                    <img id="myImg{{$loop->index}}" src="{{asset('storage/DestinationPhoto/' . $photo->name)}}" alt="{{$product->destination}} ">
                    <div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

    <!-- The Close Button -->
    <span class="close">&times;</span>


    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img{{$loop->index}}">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
  </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="description col-12 col-md-12 col-lg-6">
              <form class="" action="/destinos{id}" method="post">
                @csrf
                @method('POST')
              <div class="row pt-4">
                <div class="col-12 text-center">
                  <h1>{{$product->destination}} </h1>
                  <div id="feature" class="feature_divider">
                  </div>
                </div>
                <div class="col-12 p-3">
                  <div class="row description_details p-3">
                    <div class="col-4">
                      <h2>Highlights</h2>
                    </div>
                    <div class="col-8">
                      <ul>
                        @foreach($product->highlights as $highlight)
                        <li>{{$highlight->includes}}</li>
                      @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="row description_details p-3">
                    <div class="col-4">
                      <h2>Full Description</h2>
                    </div>
                    <div class="col-8 pl-5">
                      <p>{{$product->description}} </p>
                    </div>
                  </div>
                  <div class="row description_details p-3">
                    <div class="col-4">
                      <h2>Includes</h2>
                    </div>
                    <div class="col-8">
                      <ul>
                      @foreach($product->includes as $include)
                        <li>{{$include->includes}}</li>
                      @endforeach
                      </ul>
                    </div>
                  </div>

                  <div class="row price-submit">
                    <div class="col-5 p-3">
                      <button class="btn btn-primary" type="submit" name="cart">add to cart</button>
                      <input type="hidden" name="createsession" value="0">
                      <input type="hidden" name="product_id" value="{{$product->id}}">
                    </div>
                    <div class="p-3 col-7">
                      <h2>Total price: ${{$product->price}}</h2>
                    </div>

                  <div class="p-3 col-7">
                    <h2>Total price: ${{$product->price}}</h2>

                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <script src="{{ asset('js/product.js') }}"></script>
@endsection
