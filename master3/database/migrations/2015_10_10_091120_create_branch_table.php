<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('branch', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('merchant_id');
			$table->integer('address_id');
			$table->tinyInteger('valid_license');
			$table->tinyInteger('brand_ownership');
			$table->string('contact_name');
			$table->string('name');
			$table->string('description');
			$table->enum('sales_quantity',array('<50','50-100','100-500','>500'))->nullable();
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
		Schema::drop('branch');
	}

}
