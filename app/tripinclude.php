<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tripinclude extends Model
{
  public $table = 'tripincludes';
public function product(){
  return $this->belongsTo('App\Product', 'product_id');
  }
}
