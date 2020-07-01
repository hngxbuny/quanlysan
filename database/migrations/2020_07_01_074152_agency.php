<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency',function(Blueprint $table){
			$table->increments('id_agency');
			$table->integer('id_region')->unsigned();
			$table->string('name_agency',255);
			$table->text('add_agency');
			$table->foreign('id_region')->references('id_region')->on('region');
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
