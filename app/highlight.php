<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class highlight extends Model
{
  public $table = 'highlights';
  public function product(){
  return $this->belongsTo('App\Product', 'product_id');
  }

}
