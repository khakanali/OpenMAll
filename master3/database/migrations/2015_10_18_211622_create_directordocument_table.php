<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectordocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* This is to relate all the director's uploaded NRIC or
		 * passport photos */
		DB::Statement("SET storage_engine=MYISAM");
        Schema::create('directordocument', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('director_id')->unsigned();
            $table->integer('document_id')->unsigned();
            $table->enum('deleted', array('0','1'))->default('0');
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
        Schema::drop('directordocument');
    }
}
