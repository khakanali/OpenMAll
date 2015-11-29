<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('address', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->integer('postcode');
			$table->string('line1');
			$table->string('line2');
			$table->string('line3');
			$table->string('line4');
			$table->enum('type',array('default','billing','delivery'))->nullable();
			$table->enum('deleted',array("0","1"))->default("0");
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
		Schema::drop('address');
	}

}
