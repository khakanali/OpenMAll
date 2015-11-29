<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableSellerHelp extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		DB::statement("SET storage_engine=MYISAM");
		Schema::create("seller_help", function (Blueprint $table) {
			$table->increments('id');
			$table->integer('order_id');
			$table->string('name', 100);
			$table->string('phone', 15);
			$table->string('email', 50);
			$table->string('company_name', 50);
			$table->string('business_reg_no', 15);
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
		Schema::drop("seller_help");
	}
}
