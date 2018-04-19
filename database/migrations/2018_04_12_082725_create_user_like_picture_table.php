<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserLikePictureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_like_picture', function(Blueprint $table)
		{
			$table->integer('id_user');
			$table->integer('id_picture')->index('FK_user_like_picture_id_picture');
			$table->primary(['id_user','id_picture']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_like_picture');
	}

}
