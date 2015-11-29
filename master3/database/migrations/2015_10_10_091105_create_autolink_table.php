<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutolinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("SET storage_engine=MYISAM");
		Schema::create('autolink', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('bought');
			$table->integer('partner_id')->unsigned();
			$table->integer('sold');
			$table->timestamp('linked_tstamp');
			$table->timestamp('last_transaction_tstamp');
			$table->string('description')->nullable();
			$table->text('remarks')->nullable();
			$table->enum('type',array('merchant','dealer','user'))->nullable();
			$table->enum('direction',array('inbound','outbound'))->nullable();
			$table->enum('mode',array('auto','manual'))->nullable();
			$table->enum('status',array('linked','unlinked'))->nullable();
			$table->enum('deleted',array('0','1'))->default('0');
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
		Schema::drop('autolink');
	}

}
