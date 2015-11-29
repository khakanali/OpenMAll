<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('currency', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 3)->default('myr');
            $table->string('name');
            $table->string('description');
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
        Schema::drop('currency');
    }
}
