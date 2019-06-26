<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_mobiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipe',['a','s']);
            $table->string('city_id',4);
            $table->text('lokasi');
            $table->timestamp('startmob')->nullable();
            $table->timestamp('endmob')->nullable();
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
        Schema::dropIfExists('jadwal_mobiles');
    }
}
