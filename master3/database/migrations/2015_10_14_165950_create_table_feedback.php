<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableFeedback extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		DB::statement("SET storage_engine=MYISAM");
		Schema::create("feedback", function (Blueprint $table) {
			$table->increments('id');
			$table->integer('role_id')->unsigned();
			$table->string('name', 100);
			$table->string('phone', 15);
			$table->string('email', 50);
			$table->string('company_name', 50);
			$table->string('company_phone', 15);
			$table->string('company_email', 100);
			$table->text('company_address');
			$table->string('address', 15);
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
		Schema::drop("feedback");
	}
}
