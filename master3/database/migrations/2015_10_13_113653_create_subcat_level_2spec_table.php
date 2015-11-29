<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcatLevel2specTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('subcat_level_2spec', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('subcat_level_2_id')->unsigned();
			$table->integer('spec_id')->unsigned();
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
        Schema::drop('subcat_level_2spec');
    }
}
