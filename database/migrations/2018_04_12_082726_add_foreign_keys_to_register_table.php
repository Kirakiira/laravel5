<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRegisterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('register', function(Blueprint $table)
		{
			$table->foreign('id_event', 'FK_register_id_event')->references('id_event')->on('events')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_user', 'FK_register_id_user')->references('id_user')->on('user_bde')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('register', function(Blueprint $table)
		{
			$table->dropForeign('FK_register_id_event');
			$table->dropForeign('FK_register_id_user');
		});
	}

}
