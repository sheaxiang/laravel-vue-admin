<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ad_classes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('key')->nullable();
			$table->timestamps();
			$table->integer('width')->nullable();
			$table->integer('height')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ad_classes');
	}

}
