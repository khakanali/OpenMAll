<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('product', function (Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->string('name');
			$table->integer('brand_id')->unsigned();

			/* Primary category_id */
			$table->integer('category_id')->unsigned();

			/* This is the level nth of subcategory */
			$table->integer('subcat_id')->unsigned();
			$table->integer('subcat_level')->unsigned()->default(1);

			/* We support 5 product photos */
			$table->string('photo_1');
			$table->string('photo_2');
			$table->string('photo_3');
			$table->string('photo_4');
			$table->string('photo_5');

			/* These are images for advertisment slots */
			$table->string('adimage_1');
			$table->string('adimage_2');
			$table->string('adimage_3');
			$table->string('adimage_4');
			$table->string('adimage_5');

			/* OShop and description should be at merchant table 
			$table->string('oshop');
			$table->string('description');
			 */

			$table->boolean('free_delivery')->default(false);

			/* Delivery price */
			$table->integer('del_worldwide')->unsigned();
			$table->integer('del_west_malaysia')->unsigned();
			$table->integer('del_sabah_labuan')->unsigned();
			$table->integer('del_sarawak')->unsigned();

			/* Delivery coverage */
			$table->integer('cov_country_id')->unsigned();
			$table->integer('cov_state_id')->unsigned();
			$table->integer('cov_city_id')->unsigned();

			$table->integer('retail_price')->unsigned();
			$table->integer('original_price')->unsigned();
			$table->integer('available')->unsigned();

			/* O-Warehouse */
			$table->integer('owarehouse_moq')->unsigned();
			$table->integer('owarehouse_price')->unsigned();

			/* Merchant:Product  = m:n, => merchantproduct table */
			/* SpcialPrice => merchantproduct table */     

			/* Product:Wholesale (Unit/Price) = 1:n, => wholesale table */
			/* Wholesale price can affect multiple dealers:
			 * 		Product:Dealer = m:n, => productdealer table 

			/* Category:Specification = 1:m */
			/* Subcategory L1:Specification = 1:m */
			/* Subcategory L2:Specification = 1:m */
			/* Subcategory L3:Specification = 1:m */

			$table->text('product_details');
			$table->enum('type', array('product', 'voucher'));

			/* Dictates whether this product is selected for SMM marketing */
			$table->smallinteger('smm_quota_max')->default(1);
			$table->boolean('smm_selected')->default(false);

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
		Schema::drop('product');
	}
}
