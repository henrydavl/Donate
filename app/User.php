<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','role_id','idcard','photoprofile','kotalahir','kotadomisili','alamat','job','birthday','telp','gender','alamatkantor',
        'telpkantor','goldarah','rhesus','ndonor','isvalid','islogin','status','lastlogin','lastlogout','utd_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function transaction(){
        return $this->hasMany('App\Transaction');
    }

    public function utd(){
        return $this->belongsTo('App\Utd');
    }

    public function isRoot(){
        if ($this->role->nama == 'Root' && $this->isvalid == 1 && $this->activation_token == null){
            return true;
        }
        return false;
    }

    public function isAdmin(){
        if ($this->role->nama == 'Administrator' && $this->isvalid == 1 && $this->activation_token == null){
            return true;
        }
        return false;
    }
}
