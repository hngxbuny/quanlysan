<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Field extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field',function(Blueprint $table){
			$table->increments('id_field');
			$table->integer('id_agency')->unsigned();
			$table->integer('id_typefield')->unsigned();
			$table->string('name_field',255);
			$table->boolean('status');
			$table->text('description');
			$table->foreign('id_typefield')->references('id_typefield')->on('typefield');
			$table->foreign('id_agency')->references('id_agency')->on('agency');
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
