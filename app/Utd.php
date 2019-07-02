<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utd extends Model
{
    protected $fillable = ['nama','city_id','alamat','status','akred'];

    public function transactions (){
        return $this->hasMany('App\Transaction');
    }

    public function joinmobile () {
        return $this->hasMany('App\JoinMobile');
    }

    public function jadwalmobile () {
        return $this->hasMany('App\JadwalMobile');
    }

    public function users(){
        return $this->hasMany('App\User');
    }

    public function city(){
        return $this->belongsTo('App\City');
    }
}
