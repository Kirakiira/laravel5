<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserBdeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_bde', function(Blueprint $table)
		{
			$table->foreign('id_type_user', 'FK_User_BDE_id_type_user')->references('id_type_user')->on('type_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_bde', function(Blueprint $table)
		{
			$table->dropForeign('FK_User_BDE_id_type_user');
		});
	}

}
