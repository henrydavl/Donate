<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('utd_id');
            $table->enum('tipe', ['i','m']);
            $table->bigInteger('join_mobile_id');
            $table->bigInteger('voucher_id');
            $table->enum('is_used_voucher',['0','1']);
            $table->string('statetrans',2);
            $table->timestamp('timeQuiz')->nullable();
            $table->timestamp('timeScan')->nullable();
            $table->timestamp('timeTransEnd')->nullable();
            $table->text('ket');
            $table->text('ketTolak');
            $table->text('ketBatal');
            $table->bigInteger('pAwal');
            $table->double('tinggiUser');
            $table->double('beratUser');
            $table->double('suhuUser');
            $table->double('tekananA_user');
            $table->double('tekananB_user');
            $table->integer('denyutNadi_user');
            $table->enum('ccDarah',['1','2','3','4']);
            $table->enum('kantongDarah',['s','d','t','q']);
            $table->bigInteger('phbTrans');
            $table->integer('nhbTrams');
            $table->integer('nhctTrams');
            $table->enum('macDonTrans',['s','p']);
            $table->enum('metDonTrans',['b','a','au']);
            $table->enum('hbmcsa',['1','2','3']);
            $table->enum('hbmcsb',['1','2','3']);
            $table->bigInteger('paftapTrans');
            $table->enum('pengambilanTrans',['l','t','s']);
            $table->integer('ccstopTrans');
            $table->enum('reaksiDonTrans',['h','p','m','l']);
            $table->text('ketReaksiDonor');
            $table->bigInteger('noKantongDarah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
