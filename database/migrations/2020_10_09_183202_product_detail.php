<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Harusnya belum dipakai
        Schema::create('ProductDetail', function (Blueprint $table) {
            $table->unsignedBigInteger('ProductId');
            $table->string('ProductType', 255);
            $table->integer('ProductImage');
            $table->enum('StatusId', ['PO', 'Out Of Stock','Ready', 'Deleted']);
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
        Schema::dropIfExists('ProductDetail');
    }
}
