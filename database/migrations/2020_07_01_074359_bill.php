<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill',function(Blueprint $table){
			$table->increments('id_bill');
			$table->integer('id_time')->unsigned();
			$table->integer('id_customer')->unsigned();
			$table->integer('id_field')->unsigned();
			$table->date('bookingdate');
			$table->foreign('id_time')->references('id_time')->on('time');
			$table->foreign('id_customer')->references('id_customer')->on('customer');
			$table->foreign('id_field')->references('id_field')->on('field');
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
    }
}
