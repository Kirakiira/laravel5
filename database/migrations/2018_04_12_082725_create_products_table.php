<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id_product', true);
			$table->string('product_name', 50);
			$table->text('product_description', 65535);
			$table->string('product_price', 50);
			$table->integer('product_count');
			$table->integer('id_type_product')->index('FK_Products_id_type_product');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
