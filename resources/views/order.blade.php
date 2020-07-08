@extends('layout')

@section('title')

    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/order.css') }}">
    <title>Order Confirmation</title>

@endsection
@section('main')


    <main id="main" class="container-fluid">
      <section class="container pt-3">
        <div class="row pt-2">
          <div class="col-12 text-center title pt-5">
            <h1 id="h1">order confirmation</h1>
            <div class="feature_divider mt-3">
            </div>
          </div>
        </div>
        <div class="row pt-2">
          <div class="col-12">
            <p>Thank you for booking your holiday with Lush Luxury Travel! Now it is time to just sit back and relax, we will take care of the rest...<br>
            We have sent you an email confirmation, with the order details as below. Please do not hesitate to contact us via the <a href="/contacto">contact us</a> page</p>
          </div>
        </div>
        <article class="box mt-2 p-4">
          <table style="width:100%">
  <tr class="text-center" style="border-bottom: 1px solid black">
    <th>Item</th>
    <th>Quantity</th>
    <th>Price</th>
  </tr>
  @foreach ($cart as $product)
  <tr style="border-bottom: 1px solid black">
    <td class="text-left" >{{$product['destination']}}</td>
    <td class="text-center">{{$product['quantity']}}</td>
    <td class="text-center">{{$product['price']*$product['quantity']}}</td>
  </tr>
  @endforeach
  <tr>
    <td class="total text-left" style="font-size: 20px">TOTAL</td>
    <td class="total text-center" style="font-size: 20px">{{$totalQuantity}}</td>
    <td class="total text-center" style="font-size: 20px">{{$totalPrice}}</td>
  </tr>
</table>
        </article>
        <div class="row mt-4 mb-2">
          <div class="col-12 text-center">
              <form class="" action="/order" method="post">
                @csrf
            <button class="btn btn-primary" name="back" value="back" type="submit">Back to Home Page</button>
            </form>
          </div>
        </div>

      </section>
    </main>
@endsection
