<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuyerbankTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('buyerbank', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('buyer_id');
			$table->integer('bank_id');
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
		Schema::drop('buyerbank');
	}

}
