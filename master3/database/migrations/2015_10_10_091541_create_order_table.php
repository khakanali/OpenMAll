<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('order', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('courier_id')->unsigned();
			$table->float('price',8,2)->unsigned();
			$table->timestamp('checkout_tstamp');
			$table->timestamp('delivery_tstamp');
			$table->timestamp('receipt_tstamp');
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
		Schema::drop('order');
	}

}
