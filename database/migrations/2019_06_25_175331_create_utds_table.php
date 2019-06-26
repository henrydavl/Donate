<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nama');
            $table->string('city_id',4);
            $table->text('alamat');
            $table->enum('status', ['0','1']);
            $table->enum('akred', ['p','m','u']);
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
        Schema::dropIfExists('utds');
    }
}
