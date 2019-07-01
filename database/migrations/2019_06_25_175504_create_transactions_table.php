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
            $table->bigInteger('utd_id')->nullable();
            $table->enum('tipe', ['i','m'])->nullable();
            $table->bigInteger('join_mobile_id')->nullable();
            $table->enum('statetrans', ['0','1','2','3','4','5','6','7','8','9','10','11'])->nullable();
            $table->timestamp('timeQuiz')->nullable();
            $table->timestamp('timeScan')->nullable();
            $table->timestamp('timeTransEnd')->nullable();
            $table->text('ket')->nullable();
            $table->text('ketTolak')->nullable();
            $table->text('ketBatal')->nullable();
            $table->bigInteger('pAwal')->nullable();
            $table->double('tinggiUser')->nullable();
            $table->double('beratUser')->nullable();
            $table->double('suhuUser')->nullable();
            $table->double('tekananA_user')->nullable();
            $table->double('tekananB_user')->nullable();
            $table->integer('denyutNadi_user')->nullable();
            $table->enum('ccDarah',['1','2','3','4'])->nullable();
            $table->enum('kantongDarah',['s','d','t','q'])->nullable();
            $table->bigInteger('phbTrans')->nullable();
            $table->integer('nhbTrans')->nullable();
            $table->integer('nhctTrans')->nullable();
            $table->enum('macDonTrans',['s','p'])->nullable();
            $table->enum('metDonTrans',['b','a','au'])->nullable();
            $table->enum('hbmcsa',['1','2','3'])->nullable();
            $table->enum('hbmcsb',['1','2','3'])->nullable();
            $table->bigInteger('paftapTrans')->nullable();
            $table->enum('pengambilanTrans',['l','t','s'])->nullable();
            $table->integer('ccstopTrans')->nullable();
            $table->enum('reaksiDonTrans',['h','p','m','l'])->nullable();
            $table->text('ketReaksiDonor')->nullable();
            $table->bigInteger('noKantongDarah')->nullable();
            $table->integer('q1_jamtidur');
            $table->enum('q2_obat',['0','1']);
            $table->enum('q3_mens',['0','1']);
            $table->text('q4_sick');
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
