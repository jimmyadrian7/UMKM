<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsAdmin', function (Blueprint $table) {
            $table->bigIncrements('AdminId');
            $table->string('UserName', 255);
            $table->string('UserEmail', 255)->unique();
            $table->string('UserPassword', 255);
            $table->enum('AdminStatus', ['Active', 'Pending','Deleted', 'Determinate'])->default('Pending');
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
        Schema::dropIfExists('MsAdmin');
    }
}
