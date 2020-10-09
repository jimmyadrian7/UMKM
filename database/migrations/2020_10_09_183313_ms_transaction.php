<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('MsTransaction', function (Blueprint $table) {
            $table->bigIncrements('TransactionId');
            $table->double('TransactionSubtotal');
            $table->double('TransactionTax');
            $table->double('TransactionDiscount');
            $table->timestamp('TransactionDate', 0);
            $table->unsignedBigInteger('UserId');
            $table->enum('StatusId', ['Pending','Decline','Accept']);
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
        Schema::dropIfExists('MsTransaction');
    }
}
