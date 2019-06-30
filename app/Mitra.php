<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $fillable = ['nama','city_id','alamat','npwp','status'];

    public function voucher(){
        return $this->hasMany('App\Voucher');
    }

    public function city(){
        return $this->belongsTo('App\City');
    }
}
