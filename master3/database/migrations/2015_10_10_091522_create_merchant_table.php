<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMerchantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('merchant', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('company_name');
			$table->string('gst');
			$table->string('business_reg_no');
			$table->integer('country_id')->unsigned();
			$table->enum('business_type',array('sole_proprietorship','partnership','limited_liability_partnership','private_limited_company','public_limited_company','company_limited_by_guarantee','foreign_company'))->nullable();

			/* merchant:director = 1:m */
			/* merchant:document = 1:m */
			/* merchant:website  = 1:m */

			$table->integer('address_id')->unsigned();

			$table->string('contact_person');
			$table->string('office_no');
			$table->string('mobile_no');

			/* Name and address of the O-Shop */
			$table->string('oshop_name');
			$table->integer('oshop_address_id')->unsigned();

			/* We support 5 logos for the O-Shop */
			$table->string('oshop_logo_1');
			$table->string('oshop_logo_2');
			$table->string('oshop_logo_3');
			$table->string('oshop_logo_4');
			$table->string('oshop_logo_5');

			/* These are images for O-Shop advertisment */
			$table->string('oshop_adimage_1');
			$table->string('oshop_adimage_2');
			$table->string('oshop_adimage_3');
			$table->string('oshop_adimage_4');
			$table->string('oshop_adimage_5');

			$table->text('description');
			$table->text('history');

			$table->boolean('license')->default(false);
			$table->enum('coverage',array('klang_valley','peninsula_malaysia','east_malaysia','internationally'))->nullable();
			$table->boolean('ownership')->default(false);
			$table->integer('category_id')->unsigned();
			$table->integer('planned_sales')->unsigned();

			$table->integer('bank_id')->unsigned();

			$table->text('return_policy');
			$table->text('remarks');
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
		Schema::drop('merchant');
	}

}
