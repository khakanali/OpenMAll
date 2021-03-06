<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVbannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('vbanner', function (Blueprint $table) {
            $table->increments('id');
			/* album:vbanner = 1:m */
			$table->integer('album_id')->unsigned();

			/* Path to where the signboard image resides */
			$table->string('path');
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
        Schema::drop('vbanner');
    }
}
