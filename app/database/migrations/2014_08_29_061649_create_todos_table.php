<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	public function up()
	{
		Schema::create('todos', function($table)
		{
			$table->increments('id');
			$table->string('description');
			$table->string('complete');
			$table->string('title')->nullable();
			$table->date('duedate')->nullable();
			$table->string('author')->nullable();
			$table->text('tags')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Scheme::drop('todos');
	}

}
