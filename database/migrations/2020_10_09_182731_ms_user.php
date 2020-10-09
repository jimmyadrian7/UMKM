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
        Schema::create('MsUser', function (Blueprint $table) {
            $table->bigIncrements('UserId');
            $table->string('UserName', 255);
            $table->string('UserEmail', 255)->unique();
            $table->string('UserPassword', 255);
            $table->string('VerificationCode', 50);
            $table->boolean('UserDriver');
            $table->boolean('UserSeller');
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
        Schema::dropIfExists('MsUser');
    }
}
