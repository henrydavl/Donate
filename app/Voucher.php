<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['nama','mitra_id','image','price','startPromo','endPromo'];

    public function mitra(){
        return $this->belongsTo('App\Mitra');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function transaction(){
        return $this->hasMany('App\Transaction');
    }
}
