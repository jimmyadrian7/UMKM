<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsUsers', function (Blueprint $table) {
            $table->increments('UserId');
            $table->integer('UserId2');
            $table->string('UserName', 255);
            $table->string('UserEmail', 255)->unique();
            $table->string('UserPassword')->nullable(false);
            $table->timestamps();('JoinDate');
            $table->enum('UserType', ['pedagang', 'pembeli', 'admin', 'kurir']);
            $table->foreign('UserId2')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('MsUsers');
    }
}
