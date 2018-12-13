<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->integer('quantity');
            $table->unsignedInteger('item_id');
            $table->unsignedInteger('werehouse_id');
            $table->timestamps();

            $table->foreign('item_id')->references('item_id')->on('items');
            $table->foreign('werehouse_id')->references('werehouse_id')->on('werehouses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
