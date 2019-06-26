<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinMobile extends Model
{
    protected $fillable = ['jadwal_mobile_id','utd_id','status','keterangan'];
}
