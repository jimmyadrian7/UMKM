<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('TransactionDetail', function (Blueprint $table) {
            $table->unsignedBigInteger('TransactionId');
            $table->unsignedBigInteger('ProductId');
            $table->unsignedBigInteger('UserId');
            $table->foreign('TransactionId')->references('TransactionId')->on('MsTransaction');
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
        Schema::dropIfExists('TransactionDetail');
    }
}
