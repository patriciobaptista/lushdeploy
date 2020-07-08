<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imageproduct extends Model
{
  public $table = 'imagesproduct';

  public function product(){
     return $this->belongsTo("App\Product", 'product_id');
     }
}
