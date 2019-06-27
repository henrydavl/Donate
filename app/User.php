<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','idcard','photoprofile','kotalahir','kotadomisili','alamat','job','birthday','telp','gender','alamatkantor',
        'telpkantor','goldarah','rhesus','ndonor','isvalid','islogin','status','lastlogin','lastlogout',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
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
