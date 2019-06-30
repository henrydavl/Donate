<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinMobile extends Model
{
    protected $fillable = ['jadwal_mobile_id','utd_id','status','keterangan'];

    public function utd(){
        return $this->belongsTo('App\Utd');
    }

    public function jadwalmobile(){
        return $this->belongsTo('App\JadwalMobile');
    }

    public function transaction(){
        return $this->hasMany('App\Transaction');
    }
}
