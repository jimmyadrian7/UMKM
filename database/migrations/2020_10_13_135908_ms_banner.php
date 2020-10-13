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
            $table->date('BannerStartDate');
            $table->date('BannerEndDate');
            $table->string('BannerImage', 255);
            $table->enum('BannerRelatedStatus', ['Category','Link','Product']);
            $table->string('BannerRelated', 255);
            $table->boolean('MainBanner');
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
