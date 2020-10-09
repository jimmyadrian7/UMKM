<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserAddr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsUserAddr', function (Blueprint $table) {
            $table->bigIncrements('UserAddrId');
            $table->unsignedBigInteger('CityId');
            $table->longText('UserAddress');
            $table->string('ContactNumber', 50);
            $table->enum('StatusId', ['Active', 'Inactive','Deleted', 'Closed']);
            $table->foreign('CityId')->references('CityId')->on('MsCity');
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
        Schema::dropIfExists('MsUserAddr');
    }
}
