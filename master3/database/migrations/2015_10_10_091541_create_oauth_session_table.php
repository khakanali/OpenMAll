<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthSessionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('oauth_session', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('smedia_id')->unsigned();
			$table->string('client_id');
			$table->string('auth_code');
			$table->string('client_secret');
			$table->string('access_token');
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
		Schema::drop('oauth_session');
	}

}
