<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id','utd_id','tipe','join_mobile_id','statetrans','timeQuiz','timeScan','timeTransEnd','ket','ketTolak', 'ketBatal','pawal','tinggiUser',
        'beratUser','suhuUser','ptekanan','tekananA_user','tekananB_user','denyutNadi_user','ccDarah','kantongDarah','phbTrans', 'nhbTrans','nhctTrans','macDonTrans',
        'metDonTrans','hbmcsa','hbmcsb','paftapTrans','pengambilanTrans','ccstopTrans','reaksiDonTrans','ketReaksiDonor','noKantongDarah',
        'q1_jamtidur','q2_obat','q3_mens','q4_sick','darah_isused',
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
