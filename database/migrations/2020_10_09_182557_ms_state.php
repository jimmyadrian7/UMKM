<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsState extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsState', function (Blueprint $table) {
            $table->bigIncrements('StateId');
            $table->string('StateName', 255);
            $table->unsignedBigInteger('CountryId');
            $table->foreign('CountryId')->references('CountryId')->on('MsCountry');
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
        Schema::dropIfExists('MsState');
    }
}
