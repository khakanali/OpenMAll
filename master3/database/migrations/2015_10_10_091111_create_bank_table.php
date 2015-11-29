<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('bank', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('code');
			$table->string('account_name1');
			$table->string('account_number1');
			$table->string('account_name2');
			$table->string('account_number2');
			$table->string('iban');
			$table->string('swift');
			$table->string('url');
			$table->string('description');
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
		Schema::drop('bank');
	}

}
