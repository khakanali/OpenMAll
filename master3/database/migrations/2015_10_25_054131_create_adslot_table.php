<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdslotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('adslot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placement');
            $table->string('name');
            $table->string('description');
            $table->string('schedule');
            $table->integer('duration')->unsigned();
            $table->integer('price')->unsigned();
            $table->boolean('recurring')->default(false);

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
        Schema::drop('adslot');
    }
}
