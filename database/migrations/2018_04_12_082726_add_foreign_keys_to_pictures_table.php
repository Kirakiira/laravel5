<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pictures', function(Blueprint $table)
		{
			$table->foreign('id_event', 'FK_Pictures_id_event')->references('id_event')->on('events')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_user', 'FK_Pictures_id_user')->references('id_user')->on('user_bde')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pictures', function(Blueprint $table)
		{
			$table->dropForeign('FK_Pictures_id_event');
			$table->dropForeign('FK_Pictures_id_user');
		});
	}

}
