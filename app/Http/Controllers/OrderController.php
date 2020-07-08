<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Sale;
use Auth;

class OrderController extends Controller
{
  public function index()
  {
    $products = Product::all();
    $cart = session()->get('cart');

    $totalPrice = 0;
    $totalQuantity = 0;
      if(session()->has('cart')){
       $cart = (session()->get('cart'));
       foreach($cart as $product){
          $totalPrice += $product['price']*$product['quantity'];
          $totalQuantity += $product['quantity'];
        }
     }

    foreach ($cart as $product) {
      $sale = new Sale;
      $sale->id = null;
      $sale->destination = $product['destination'];
      $sale->price = $product['price'];
      $sale->quantity = $product['quantity'];
      $sale->user_id = Auth::user()->id;
      $sale->save();
    }


    return view('/order', [
      'products' => $products,
      'cart' => $cart,
      'totalQuantity' => $totalQuantity,
      'totalPrice' => $totalPrice
    ]);
  }

  public function back(Request $request)
  {
    if($request->has('back')){
      $request->session()->forget('cart');
      return redirect('/');
    }
  }
}
