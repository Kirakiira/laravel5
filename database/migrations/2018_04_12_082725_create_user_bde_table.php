<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserBdeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_bde', function(Blueprint $table)
		{
			$table->integer('id_user', true);
			$table->string('user_name', 50);
			$table->string('user_lastname', 50);
			$table->string('user_password', 50);
			$table->string('user_mail', 50);
			$table->integer('id_type_user')->index('FK_User_BDE_id_type_user');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_bde');
	}

}
