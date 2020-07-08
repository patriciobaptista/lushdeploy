@extends('layout')

@section('title')
  <link rel="stylesheet" type = "text/css" href="{{ asset('css/cart.css') }}">
  <title>Shopping Cart</title>
@endsection
@section('main')
    <main id="main" class="container-fluid foto" style="background-image: url({{asset('/storage/carrito.jpg')}})">
      <div class="row">
        <div class="col-12 text-center mt-5 pt-5">
          <h1>Shopping Cart</h1>
          </div>
          <div id="feature"class="feature_divider">
          </div>
        </div>


          @if(session()->has('cart') &&  count(session()->get('cart')) !==0)

            @php

              $total= 0;
            @endphp


        <div class="row">
          <div class="products col-12 col-m-6 col-lg-6">
            <h2>Items</h2>
            @foreach (session('cart') as $product)


            @php

            $total += ($product["price"] * $product["quantity"]);
            $photo1 = $product["photos"]->first()["name"];
            @endphp
          <div class="detalle mb-3">
                <img src="{{asset('storage/DestinationPhoto/' . $photo1)}}" alt="{{$product["destination"]}}">
                <form class="" action="/carrito" method="post">
                  @csrf
                  <ul>
                    <li class="product-name mb-2">{{$product["destination"]}}</li>
                    <li class="description">Price:${{$product["price"]}}</li>
                    <li class="description">Quantity: {{$product["quantity"]}}</li>
                    <button class="btn btn-primary" name="id" value="{{$product["id"]}}" type="submit">Delete</button>
                  </ul>

            </div>
            @endforeach
          </div>
            <div class="total col-12 col-m-6 col-lg-6">
              <h2>Subtotal</h2>
              <p>${{$total}}</p>
              <button class="btn btn-primary" type="submit" value= "confirm_order" name="confirm_order" id="confirm">Confirm order</button>
            </div>
          </div>
              @else
            <div class="container-fluid row text-center mt-5">
              <div class="vacio col-12">
                  <h1>Your cart is empty</h1>
                  <a href="/destinos" class="btn btn-primary">back</a>
              </div>
            </div>
              @endif
          </form>
      </main>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <script src="{{ asset('js/cart.js') }}"></script>
    </body>
@endsection
