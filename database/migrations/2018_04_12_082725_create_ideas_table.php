<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdeasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ideas', function(Blueprint $table)
		{
			$table->integer('id_idea', true);
			$table->text('idea_text', 65535);
			$table->string('idea_name', 50);
			$table->string('idea_picture', 50);
			$table->date('idea_date');
			$table->integer('id_user')->index('FK_Ideas_id_user');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ideas');
	}

}
