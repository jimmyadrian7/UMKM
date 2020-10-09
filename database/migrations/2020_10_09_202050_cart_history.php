<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('CartHistory', function (Blueprint $table) {
            $table->bigIncrements('CartHistoryId');
            $table->unsignedBigInteger('ProductId');
            $table->unsignedBigInteger('UserId');
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
        Schema::dropIfExists('CartHistory');
    }
}
