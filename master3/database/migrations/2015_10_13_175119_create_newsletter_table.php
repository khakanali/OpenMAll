<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsletterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("SET storage_engine=MYISAM");
        Schema::create("newsletter", function(Blueprint $table){
            $table->increments('id');
            $table->string('full_name',50);
            $table->string('contact_number',15);
            $table->string('email',50);
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
        Schema::drop("newsletter");
    }
}
