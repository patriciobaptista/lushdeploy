<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  public $table = 'sales';
  public $PrimaryKey = 'id';
  public $guarded = [];


public function user(){
  return $this->hasMany("App\User", 'user_id');
}


}
