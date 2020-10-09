<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsStore', function (Blueprint $table) {
            $table->bigIncrements('StoreId');
            $table->string('StoreName', 255);
            $table->longText('UserAddress');
            $table->string('StoreOpenDay', 255);
            $table->time('StoreOpenHour', 0);
            $table->time('StoreClosedHour', 0);
            $table->unsignedBigInteger('UserId');
            $table->string('StoreImage', 255);
            $table->enum('StatusId', ['Active', 'Inactive','Deleted', 'Closed']);
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
        Schema::dropIfExists('MsStore');
    }
}
