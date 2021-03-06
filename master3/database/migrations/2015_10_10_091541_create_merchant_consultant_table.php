<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMerchantConsultantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('merchant_consultant', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
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
		Schema::drop('merchant_consultant');
	}

}
