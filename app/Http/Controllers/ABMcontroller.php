<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\support\Facades\Storage;
use App\Product;
use App\Imageproduct;
use App\Highlight;
use App\Tripinclude;

class ABMcontroller extends Controller
{

public function index(){
  $products = Product::all();

  return view('ABM.main', [
    'products' => $products
  ]);
}

public function ABMdirect($id){


  $product = Product::find($id);
  $highlights = $product->highlights;
  $includes = $product->includes;
  $photos = $product->photos;

return view('ABM.edit', [
  "product" => $product,
  "highlights" => $highlights,
  "includes" => $includes,
  "photos" => $photos
]);
}


public function edit(Request $request){


//SECCION MUCHAS FOTOS
  if($request->file('photos')){


    $this->validate($request, [
                  'photos' => 'required',
                  'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'

          ]);

      $imagename = Str::slug("$request->destination");

        foreach($request->file('photos') as $key => $image)
          {
            $extension = $image->getClientOriginalExtension();

              $name = $imagename.($request->counter + $key). "." . $extension;
              $image->move(public_path().'/storage/DestinationPhoto', $name);
              $data[] = $name;
          }
        foreach($data as $one){
          $newphoto = new Imageproduct;
          $newphoto->id = null;
          $newphoto->name = $one;
          $newphoto->product_id = $request->id;
          $newphoto->save();
        }
  }

  //SECCION INCLUDES

  if($request->has('includes')){
    foreach ($request->get('includes') as $key => $value) {
        $tripinclude = Tripinclude::find($key);
        $tripinclude->includes = $value;
        $tripinclude->save();
    }
  }

  if($request->has('newinclude')){
    foreach ($request->get('newinclude') as $key => $value) {
      $include = new Tripinclude;
      $include->id = null;
      $include->includes = $value;
      $include->product_id = $request->id;
      $include->save();

    }
  }

//SECCION HIGHLIGHTS
  if($request->has('highlights')){
    foreach ($request->get('highlights') as $key => $value) {
        $triphighlight = Highlight::find($key);
        $triphighlight->includes = $value;
        $triphighlight->save();
    }
  }
  if($request->has('newhighlight')){
    foreach ($request->get('newhighlight') as $key => $value) {
      $highlight = new Highlight;
      $highlight->id = null;
      $highlight->includes = $value;
      $highlight->product_id = $request->id;
      $highlight->save();

    }
  }
  return redirect()->back();


}

Public function borrarFoto($id){
  $foto = Imageproduct::find($id);

  $file= $foto->name;
  $filename = public_path().'/storage/DestinationPhoto'. $file;
  Storage::delete($filename);

  Imageproduct::destroy($id);

  return redirect()->back();

}
public function borrarHighlight($id){
  Highlight::destroy($id);
  return redirect()->back();

}
public function borrarInclude($id){
  Tripinclude::destroy($id);
  return redirect()->back();

}

public function add(Request $request){

  $product = new Product;
  $product->id = null;
  $product->destination = $request->destination;
  $product->description = $request->description;
  $product->price = $request->price;
  $product->stay_length = $request->stay;
  $product->stock = $request->stock;
  $product->save();


  if($request->file('photos')){


    $this->validate($request, [
                  'photos' => 'required',
                  'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'

          ]);

      $imagename = Str::slug("$product->destination");

        foreach($request->file('photos') as $key => $image)
          {
            $extension = $image->getClientOriginalExtension();

              $name = $imagename.($key+1). "." . $extension;
              $image->move(public_path().'/storage/DestinationPhoto', $name);
              $data[] = $name;
          }
        foreach($data as $one){
          $newphoto = new Imageproduct;
          $newphoto->id = null;
          $newphoto->name = $one;
          $newphoto->product_id = $product->id;
          $newphoto->save();
        }
  }
  if($request->has('newhighlight')){
    foreach ($request->get('newhighlight') as $key => $value) {
      if(!empty($value)){
      $highlight = new Highlight;
      $highlight->id = null;
      $highlight->includes = $value;
      $highlight->product_id = $product->id;
      $highlight->save();
    }
    }
  }
  if($request->has('newinclude')){
    foreach ($request->get('newinclude') as $key => $value) {
      if(!empty($value)){
      $include = new Tripinclude;
      $include->id = null;
      $include->includes = $value;
      $include->product_id = $product->id;
      $include->save();
    }
    }
  }
  return redirect('/ABM/main');
}

public function delete($id){

  $product = Product::find($id);
  $product->highlights()->delete();
  $product->includes()->delete();

  $photos = $product->photos;

  foreach($photos as $key => $photo){

  $file= $photo->name;
  $filename = public_path().'/storage/DestinationPhoto'. $file;
  Storage::delete($filename);

  Imageproduct::destroy($photo->id);
}
Product::destroy($id);

return redirect()->back();
}




}
