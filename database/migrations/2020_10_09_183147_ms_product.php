<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsProduct', function (Blueprint $table) {
            $table->bigIncrements('ProductId');
            $table->string('ProductName', 255);
            $table->longText('ProductDesc');
            $table->float('ProductStock');
            $table->double('ProductPrice');
            $table->string('ProductWeight', 50);
            $table->unsignedBigInteger('CategoryId');
            $table->unsignedBigInteger('StoreId');
            $table->enum('StatusId', ['PO', 'Out Of Stock','Ready', 'Deleted']);
            $table->foreign('CategoryId')->references('CategoryId')->on('MsCategories');
            $table->foreign('StoreId')->references('StoreId')->on('MsStore');
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
        Schema::dropIfExists('MsProduct');
    }
}
