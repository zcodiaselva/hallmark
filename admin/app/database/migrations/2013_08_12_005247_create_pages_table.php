<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('site', array('main', 'es', 'pro', 'aero'));
			$table->integer('category_id');
			$table->string('name');
			$table->string('slug');
			$table->string('html_title');
			$table->string('page_heading');
			$table->boolean('has_body');
			$table->boolean('has_body2');
			$table->text('body');
			$table->text('body2');
			$table->text('temp_body');
			$table->text('temp_body2');
			$table->boolean('has_image1');
			$table->boolean('has_image2');
			$table->boolean('has_image3');
			$table->string('image1');
			$table->string('image2');
			$table->string('image3');
			$table->string('meta_keywords');
			$table->string('meta_description');
			$table->enum('status', array('approved', 'not approved'));
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
		Schema::drop('pages');
	}

}
