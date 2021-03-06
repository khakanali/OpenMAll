<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubcatLevel2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('subcat_level_2', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->integer('subcat_level_1_id');	
			$table->string('name');
			$table->string('description');
			$table->string('logo');
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
		Schema::drop('subcat_level_2');
	}

}
