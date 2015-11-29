<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductdealerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This is to implement Product:Dealer relationship for Wholesale
		 * pricing: Product:Dealer = m:n */
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('productdealer', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('product_id')->unsigned();
			$table->integer('dealer_id')->unsigned();
			$table->integer('special_unit')->unsigned();
			$table->integer('special_price')->unsigned();

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
        Schema::drop('productdealer');
    }
}
