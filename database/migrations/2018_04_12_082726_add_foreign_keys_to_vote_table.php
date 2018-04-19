<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vote', function(Blueprint $table)
		{
			$table->foreign('id_idea', 'FK_vote_id_idea')->references('id_idea')->on('ideas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_user', 'FK_vote_id_user')->references('id_user')->on('user_bde')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vote', function(Blueprint $table)
		{
			$table->dropForeign('FK_vote_id_idea');
			$table->dropForeign('FK_vote_id_user');
		});
	}

}
