<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* What is contained in a merchant profile */
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');

			/* This where we choose the resources from */
            $table->integer('album_id')->unsigned();

            $table->integer('theme_id')->unsigned();
            $table->integer('signboard_id')->unsigned();
            $table->integer('bunting_id')->unsigned();
            $table->integer('vbanner_id')->unsigned();

			DB::statement("SET storage_engine=MYISAM");
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
        Schema::drop('profile');
    }
}
