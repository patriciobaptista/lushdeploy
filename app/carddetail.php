<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class Carddetail extends Model
{
    public $table = "carddetails";
    public $guarded = [];

    public function carddetail(){
      return $this->belongsTo('App\User', 'id_user');
    }

}
