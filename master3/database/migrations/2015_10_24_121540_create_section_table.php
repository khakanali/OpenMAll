<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This stores the individual section witin a profile */
		DB::statement("SET storage_engine=MYISAM");

        Schema::create('section', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('profile_id')->unsigned();
			$table->string('name');

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
        Schema::drop('section');
    }
}
