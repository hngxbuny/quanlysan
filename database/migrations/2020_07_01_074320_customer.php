<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer',function(Blueprint $table){
			$table->increments('id_customer');
			$table->string('email_customer',255)->unique();
			$table->string('pass_customer',255);
			$table->char('phone_customer',10)->unique();
			$table->boolean('sex');
			$table->text('add_customer');
			$table->date('birthday_customer');
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
