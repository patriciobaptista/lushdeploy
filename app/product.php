<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $PrimaryKey = 'id';
    public $guarded = [];


public function photos(){
    return $this->hasMany("App\Imageproduct", 'product_id');
}
public function includes(){
  return $this->hasMany("App\Tripinclude", 'product_id');
}
public function highlights(){
  return $this->hasMany('App\Highlight', 'product_id');
}


}
