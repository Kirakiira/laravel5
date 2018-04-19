<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cart', function(Blueprint $table)
		{
			$table->foreign('id_order', 'FK_cart_id_order')->references('id_order')->on('orders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_product', 'FK_cart_id_product')->references('id_product')->on('products')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cart', function(Blueprint $table)
		{
			$table->dropForeign('FK_cart_id_order');
			$table->dropForeign('FK_cart_id_product');
		});
	}

}
