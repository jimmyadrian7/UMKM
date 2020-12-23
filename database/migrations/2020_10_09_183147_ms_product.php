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
            $table->enum('StatusId', ['PO', 'Out Of Stock','Ready', 'Deleted'])->default('Ready');
            $table->foreign('CategoryId')->references('CategoryId')->on('MsCategories');
            $table->foreign('StoreId')->references('StoreId')->on('MsStore');
        });

        Schema::table('MsProduct', function (Blueprint $table) {
            $table->unique(['ProductName','StoreId']);
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
