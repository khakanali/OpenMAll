<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMerchantdocumentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/* This is to relate a merchant and his business documents */
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('merchantdocument', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('merchant_id')->unsigned();
			$table->integer('document_id')->unsigned();
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
		Schema::drop('merchantdocument');
	}

}
