<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();

      return view('product.destinations', [
        'products' => $products
      ]);
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('product.product', [
          'product' => $product
        ]);
    }


    public function update(Request $request, $id)
    {
      $cart = $request->session()->get('cart');

      dd($cart);
    }

}
