<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'id', 'nama'
    ];

    public function cities()
    {
        return $this->hasMany('App\City');
    }
}
