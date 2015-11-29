<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* album:product = 1:n
		 * This is different from merchant:product = 1:m, because m > n
		 * i.e. album contains only a subset of the total product */

		DB::statement("SET storage_engine=MYISAM");
        Schema::create('albumproduct', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('album_id')->unsigned();
			$table->integer('product_id')->unsigned();
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
        Schema::drop('albumproduct');
    }
}
