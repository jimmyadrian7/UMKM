<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsBanner', function (Blueprint $table) {
            $table->bigIncrements('BannerId');
            $table->date('BannerStartDate')->nullable();
            $table->date('BannerEndDate')->nullable();
            $table->string('BannerImage', 255);
            $table->enum('BannerRelatedStatus', ['Category','Link','Product'])->nullable();
            $table->string('BannerRelated', 255)->nullable();
            $table->boolean('MainBanner')->nullable();
            $table->enum('StatusId', ['Active','Deleted']);
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
        Schema::dropIfExists('MsBanner');
    }
}
