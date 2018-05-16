<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableProduct extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('product', function (Blueprint $table) {
				$table->increments('id');
				$table->string('title');
				$table->string('slug');
				$table->string('image');
				$table->string('imagemedium');
				$table->string('imagethumb');
				$table->integer('category')->unsigned();
				$table->text('description');
				$table->integer('user_id')->unsigned();
				$table->foreign('user_id')->references('id')->on('users');
				$table->integer('workflow_id');
				$table->foreign('categories')->references('id')->on('categories');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('product');
	}
}
