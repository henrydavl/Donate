<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoucherOwner extends Model
{
    protected $fillable = ['voucher_id', 'user_id'];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function voucher(){
        return $this->hasMany('App\Voucher');
    }
}
