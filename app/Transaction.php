<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id','utd_id','tipe','join_mobile_id','voucher_id','is_used_voucher','statetrans','timeQuiz','timeScan','timeTransEnd','ket','ketTolak',
        'ketBatal','pAwal','tinggiUser','beratUser','suhuUser','tekananA_user','tekananB_user','denyutNadi_user','ccDarah','kantongDarah','phbTrans',
        'nhbTrams','nhctTrams','macDonTrans','metDonTrans','hbmcsa','hbmcsb','padtapTrans','pengambilanTrans','ccstopTrans','reaksiDonTrans','ketReaksiDonor',
        'noKantongDarah',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function utd(){
        return $this->belongsTo('App\Utd');
    }

    public function joinmobile(){
        return $this->belongsTo('App\JoinMobile');
    }

    public function voucher(){
        return $this->belongsTo('App\Voucher');
    }
}
