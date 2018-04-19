<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserLikePictureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_like_picture', function(Blueprint $table)
		{
			$table->foreign('id_picture', 'FK_user_like_picture_id_picture')->references('id_picture')->on('pictures')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_user', 'FK_user_like_picture_id_user')->references('id_user')->on('user_bde')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_like_picture', function(Blueprint $table)
		{
			$table->dropForeign('FK_user_like_picture_id_picture');
			$table->dropForeign('FK_user_like_picture_id_user');
		});
	}

}
