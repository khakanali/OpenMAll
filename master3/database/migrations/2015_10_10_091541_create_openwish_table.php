<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpenwishTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/* Definition of a OpenWish record.
		 * Individual contribution towards this is stored in 
		 * openwishcontrib */

		/* OpenWish:OpenWishContrib = 1:m */

		DB::statement("SET storage_engine=MYISAM");
		Schema::create('openwish', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();	
			$table->integer('product_id')->unsigned();	

			/* Duration of this OpenWish: in days */
			$table->integer('duration')->unsigned();	

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
		Schema::drop('openwish');
	}

}
