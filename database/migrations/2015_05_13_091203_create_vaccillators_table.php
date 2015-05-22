<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccillatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vaccillators', function(Blueprint $table)
		{
			$table->increments('vclr_id');
            $table->string('vclr_first_name');
            $table->string('vclr_last_name');
            $table->string('vclr_qualification');
            $table->string('vclr_address');
            $table->string('vclr_phone');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vaccillators');
	}

}
