<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirectoryTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('directory', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('occupation_id')->unsigned();
			$table->string('company');
			$table->string('business_reg_no');
			$table->string('name')->nullable();
			$table->string('phone');
			$table->string('address');
			$table->string('email');
			$table->enum('deleted', array('0', '1'))->default("0");
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop("directory");}
}
