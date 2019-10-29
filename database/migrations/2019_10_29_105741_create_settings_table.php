<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('setting_key')->nullable();
			$table->text('value')->nullable();
			$table->timestamps();
			$table->string('input_type')->nullable()->default('1')->comment('1:input,2:多行文本3:数字,4:时间,5:select');
			$table->boolean('type')->nullable()->default(1)->comment('1:系统,2:网站,3:seo');
			$table->string('tip')->nullable();
			$table->integer('order')->nullable()->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('settings');
	}

}
