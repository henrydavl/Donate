<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('role_id')->index()->unsigned();
            $table->text('idcard')->nullable();
            $table->text('photoprofile')->nullable();
            $table->string('kotalahir',4)->nullable();
            $table->string('kotadomisili',4)->nullable();
            $table->text('alamat')->nullable();
            $table->text('job')->nullable();
            $table->date('birthday')->nullable();
            $table->string('telp',14)->nullable();
            $table->enum('gender', ['p','l'])->nullable();
            $table->text('alamatkantor')->nullable();
            $table->string('telpkantor',14)->nullable();
            $table->enum('goldarah', ['A','B','AB','O'])->nullable();
            $table->enum('rhesus', ['+','-'])->nullable();
            $table->bigInteger('ndonor')->nullable();
            $table->enum('isvalid', ['0','1'])->default('0');
            $table->enum('islogin', ['0','1'])->default('0');
            $table->enum('status',['0','1'])->default('0');
            $table->timestamp('lastlogin')->nullable();
            $table->timestamp('lastlogout')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
