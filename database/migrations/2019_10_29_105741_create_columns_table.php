<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColumnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('columns', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('_lft')->unsigned()->default(0);
			$table->integer('_rgt')->unsigned()->default(0);
			$table->integer('parent_id')->unsigned()->nullable();
			$table->text('content', 65535)->nullable();
			$table->string('redirect_url')->nullable();
			$table->boolean('hidden')->nullable()->default(0)->comment('是否隐藏:1:隐藏,0:不隐藏');
			$table->timestamps();
			$table->integer('order')->nullable()->default(1);
			$table->boolean('is_index')->nullable()->default(0)->comment('是否在首页,1:是,2否');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('columns');
	}

}
