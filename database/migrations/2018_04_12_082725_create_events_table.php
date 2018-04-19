<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->integer('id_event', true);
			$table->string('event_title', 50);
			$table->string('event_price', 50);
			$table->date('event_date');
			$table->text('event_text', 65535);
			$table->string('event_picture_url', 50);
			$table->boolean('event_status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
