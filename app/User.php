<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Direccion;
use App\Carddetail;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password','is_admin','avatar', 'country', 'province',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function direccion(){
      return $this->hasOne('App\Direccion', 'id_user');
    }

    public function carddetail(){
      return $this->hasOne('App\Carddetail', 'id_user');
    }

    public function isAdmin(){
      return $this->is_admin;
    }
    public function buyer(){
      return $this->belongsTo('App\Sales', 'user_id');
    }

}
