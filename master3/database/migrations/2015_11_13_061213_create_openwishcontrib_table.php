<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenwishcontribTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Table to store individual contribution towards an OpenWish.
		 * OpenWish:OpenWishContrib = 1:m */
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('openwishcontrib', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('openwish_id')->unsigned();

			/* Which social media platform is this contributor coming from? */
			$table->integer('smedia_id')->unsigned();

			/* Contributor's social media account name */
			$table->string('smedia_account');

			/* Contributor's source IP */
			$table->string('contrib_ip');

			/* Contributed amount */
			$table->integer('contrib_amount');

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
        Schema::drop('openwishcontrib');
    }
}
