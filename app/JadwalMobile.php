<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalMobile extends Model
{
    protected $fillable = ['utd_id','tipe','city_id','lokasi','startmob','endmob'];
}
