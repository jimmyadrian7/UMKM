<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsCity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsCity', function (Blueprint $table) {
            $table->bigIncrements('CityId');
            $table->string('CityName', 255);
            $table->unsignedBigInteger('StateId');
            $table->foreign('StateId')->references('StateId')->on('MsState');
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
        Schema::dropIfExists('MsCity');
    }
}
