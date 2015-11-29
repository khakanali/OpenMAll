<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDownloadAppTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		DB::statement("SET storage_engine=MYISAM");
		Schema::create("download_apps", function (Blueprint $table) {
			$table->increments('id');
			$table->string('full_name', 50);
			$table->string('contact_number', 15);
			$table->string('email', 50);
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
		Schema::drop("download_apps");
	}
}
