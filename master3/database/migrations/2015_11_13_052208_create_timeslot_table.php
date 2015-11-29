<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeslotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Table to store the timeslots that make up a product voucher */
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('timeslot', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('voucher_id');

			$table->date('from');
			$table->date('to');
			$table->integer('price');
			$table->integer('pax_per_table');

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
        Schema::drop('timeslot');
    }
}
