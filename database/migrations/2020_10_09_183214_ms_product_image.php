<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsProductImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsProductImage', function (Blueprint $table) {
            $table->bigIncrements('ProductImageId');
            $table->unsignedBigInteger('ProductId');
            $table->string('ProductImage', 255);
            $table->enum('StatusId', ['Active','Deleted']);
            $table->foreign('ProductId')->references('ProductId')->on('MsProduct');
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
        Schema::dropIfExists('MsProductImage');
    }
}
