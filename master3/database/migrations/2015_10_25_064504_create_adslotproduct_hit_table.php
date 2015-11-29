<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdslotproductHitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('adslotproduct_hit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adslotproduct_id')->unsigned();
            $table->integer('views')->unsigned();
            $table->integer('clicks')->unsigned();
            $table->integer('buy')->unsigned();
            $table->string('remote_address');
            $table->string('user_agent');

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
        Schema::drop('adslotproduct_hit');
    }
}
