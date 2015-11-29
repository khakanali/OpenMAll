<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

	/* This contains all global variables in the system, typically only
	 * accessible by admin or superuser. Some of these variables are
	 * overrideable in the individual tables; e.g. smm_selection_max */

    public function up()
    {
		DB::statement("SET storage_engine=MYISAM");
        Schema::create('global', function (Blueprint $table) {
            $table->increments('id');

			/* The maximum number of products a merchant can selects for 
			 * SMM marketing: individual merchants has the facility to
			 * override this */
            $table->smallinteger('smm_quota_max')->default(3);


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
        Schema::drop('global');
    }
}
