<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forms_category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('site', array('main', 'es', 'pro', 'aero'));
			$table->string('name');
			$table->integer('order');
			$table->text('description');
			$table->integer('created_by');
			$table->integer('updated_by');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('forms_category');
	}

}
