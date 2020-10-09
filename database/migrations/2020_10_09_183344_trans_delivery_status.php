<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransDeliveryStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('TransDeliveryStatus', function (Blueprint $table) {
            $table->unsignedBigInteger('TransactionId');
            $table->unsignedBigInteger('DeliveryStatusId');
            $table->timestamp('UpdDate', 0);
            $table->foreign('TransactionId')->references('TransactionId')->on('MsTransaction');
            $table->foreign('DeliveryStatusId')->references('DeliveryStatusId')->on('MsDeliveryStatus');
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
        Schema::dropIfExists('TransDeliveryStatus');
    }
}
