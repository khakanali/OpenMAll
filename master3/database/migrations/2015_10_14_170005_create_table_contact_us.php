<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableContactUs extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		DB::statement("SET storage_engine=MYISAM");
		Schema::create("contact_us", function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->string('phone', 15);
			$table->string('email', 50);
			$table->text('remarks')->nullable();
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
		Schema::drop("contact_us");
	}
}
