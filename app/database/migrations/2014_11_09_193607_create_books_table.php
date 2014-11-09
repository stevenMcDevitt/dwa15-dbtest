<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		# Create the authors table
		Schema::create('authors', function($table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->date('birth_date');
		});

		# Create the books table
		Schema::create('books', function($table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->string('author');
			$table->integer('published');
			$table->string('cover');
			$table->string('purchase_link');			
		});

		# Create the tags table
		Schema::create('tags', function($table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 64);
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('authors');
		Schema::drop('books');
		Schema::drop('tags');
	}

}
