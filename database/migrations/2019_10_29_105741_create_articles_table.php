<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('column_id');
			$table->string('title');
			$table->string('subtitle')->nullable();
			$table->integer('view_number')->nullable();
			$table->dateTime('release_date')->nullable()->comment('发布日期');
			$table->string('link')->nullable()->comment('外链');
			$table->text('content')->nullable();
			$table->timestamps();
			$table->boolean('is_index')->nullable()->default(0)->comment('是否在首页,1:是,2否');
			$table->string('introduction', 500)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
