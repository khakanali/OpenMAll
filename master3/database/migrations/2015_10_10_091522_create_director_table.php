<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('director', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('merchant_id');
			$table->integer('country_id');
			$table->string('name');
			$table->string('nric');
			$table->string('photo_1');
			$table->string('photo_2');
			$table->enum('deleted',array('0','1'))->default("0");
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
		Schema::drop('director');
	}

}
