<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsDelivery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsDelivery', function (Blueprint $table) {
            $table->bigIncrements('DeliveryId');
            $table->string('DeliveryRange', 10);
            $table->double('DeliveryPrice');
            $table->longText('DeliveryDesc');
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
        Schema::dropIfExists('MsDelivery');
    }
}
