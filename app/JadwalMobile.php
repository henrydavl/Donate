<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalMobile extends Model
{
    protected $fillable = ['utd_id','tipe','city_id','lokasi','startmob','endmob','status'];

    public function city(){
        return $this->belongsTo('App\City');
    }

    public function utd(){
        return $this->belongsTo('App\Utd');
    }
}
