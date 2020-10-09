<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsCart', function (Blueprint $table) {
            $table->bigIncrements('CartId');
            $table->unsignedBigInteger('ProductId');
            $table->unsignedBigInteger('UserId');
            $table->timestamp('UpdDate', 0);
            $table->foreign('ProductId')->references('ProductId')->on('MsProduct');
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
        Schema::dropIfExists('MsCart');
    }
}
