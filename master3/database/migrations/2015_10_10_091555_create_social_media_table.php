<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSocialMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/* This a table to record all the social media a merchant employs
		 * to market his business or service */

		DB::statement("SET storage_engine=MYISAM");	
		Schema::create('social_media', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->string('name');
			$table->string('description');
			$table->string('url');
			$table->string('username');
			$table->string('password');
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
		Schema::drop('social_media');
	}

}
