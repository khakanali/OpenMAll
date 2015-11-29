<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create("user", function(Blueprint $table){
			$table->increments('id');
			$table->integer('occupation_id');
			$table->string('first_name');
			$table->string('last_name');
			$table->date('birthdate');
			$table->string('mobile_no');
			$table->string('email');
			$table->string('password');
			$table->enum('gender',array('male','m','female','f'))->nullable();
			$table->enum('annual_income',array('<30k','30-49k','50-59k','60-75k','75-99k','100-119k','120-149k','150-299k','>300k'))->nullable();
			$table->enum('salutation',array('Mr','Mrs','Ms','Ir','Dr','Dato','Tan Sri','Dato Seri'))->nullable();
			$table->enum('type',array('buyer','merchant','admin'))->nullable();
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
		Schema::drop("user");
	}

}
