<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Auth;

class CartController extends Controller
{

    public function index() {
      return view('/cart');
    }

        public function store(Request $request)
        {

          $product = Product::find($request->product_id);

          $id = $product->id;

          if(!$product):
            abort(404);
          endif;

          $cart = $request->session()->has('cart');


          if(!$cart){
            $request->session()->put("cart.$id", [
             'id' => $id,
            'destination' => $product->destination,
            'quantity' => 1,
            'price' => $product->price,
            'stay_length' => $product->stay_length,
            'photos' => $product->photos
          ]
            );

            return back();
          }



          elseif($request->session()->has("cart.$id")){

            $update = $request->session()->get("cart.$id");

            $update["quantity"]++;

            $request->session()->put("cart.$id", $update);


            return redirect()->back();
    }

        else{

            $request->session()->put("cart.$id", [
              'id' => $id,
            'destination' => $product->destination,
            'quantity' => 1,
            'price' => $product->price,
            'stay_length' => $product->stay_length,
            'photos' => $product->photos
            ]
          );

          return back();
        }
      }




    public function destroy(Request $request)
    {

        if($request->has('id')){
        $id = $request->id;
        $request->session()->forget("cart.$id");

        return redirect()->back();
      }

      elseif ($request->has('confirm_order')) {


        if(Auth::check() && Auth::user()){
      return redirect()->action('OrderController@index');
      }else{
        return redirect('login');
      }

    //  if($request->session()->has('cart')){
    //    $request->session()->forget("cart" ."[$position]");
    //  }

      }
}
}
