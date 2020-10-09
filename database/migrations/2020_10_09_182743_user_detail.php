<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('UserDetail', function (Blueprint $table) {
            $table->unsignedBigInteger('UserId');
            $table->string('UserNIK', 255);
            $table->longText('UserAddress');
            $table->string('UserPhone', 50);
            $table->string('UserImage', 255);
            $table->foreign('UserId')->references('UserId')->on('MsUser');
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
        Schema::dropIfExists('UserDetail');
    }
}
