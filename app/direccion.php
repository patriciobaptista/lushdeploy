<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class Direccion extends Model
{
  public $table = 'direccion';
  public $guarded = [];

  public function direccion(){
    return $this->belongsTo('App\User', 'id_user');
  }

}
