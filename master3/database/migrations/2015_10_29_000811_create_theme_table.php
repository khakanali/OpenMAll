<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('theme', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('bg_color')->default('#ffffff');
            $table->string('font_family')->default('sans-serif, arial');
            $table->string('font_color')->default('#000000');
            $table->string('font_style')->default('normal');
            $table->tinyinteger('font_size')->default(12);

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
        Schema::drop('theme');
    }
}
