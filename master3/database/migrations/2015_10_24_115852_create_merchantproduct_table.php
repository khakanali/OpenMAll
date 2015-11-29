<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			/* This table implement product:merchant = m:n relationship
			 * It also relates the special price of a product to a particular
			 * merchant for a particular quantity */

			DB::statement("SET storage_engine=MYISAM");
			Schema::create('merchantproduct', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('merchant_id')->unsigned();
				$table->integer('product_id')->unsigned();
				/* Should be at productdealer table
				$table->integer('special_unit')->unsigned();
				$table->integer('special_price')->unsigned();
				 */

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
			Schema::drop('merchantproduct');
		}
	}
