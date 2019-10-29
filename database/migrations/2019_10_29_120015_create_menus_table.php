<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('_lft')->unsigned()->default(0);
			$table->integer('_rgt')->unsigned()->default(0);
			$table->integer('parent_id')->unsigned()->nullable();
			$table->timestamps();
			$table->string('path')->nullable();
			$table->string('redirect')->nullable();
			$table->boolean('alwaysShow')->nullable()->default(0)->comment('1:true,0:false如果设置为true，将始终显示根菜单，无论它的子路径长度是多少');
			$table->string('name')->nullable();
			$table->string('meta')->nullable();
			$table->string('component')->nullable();
			$table->string('remark')->nullable();
			$table->boolean('hidden')->nullable()->default(0)->comment('是否隐藏:1:隐藏,0:不隐藏');
			$table->boolean('props')->nullable()->default(1)->comment('是否传参:1:是,0:否');
			$table->integer('order')->nullable()->default(1);
			$table->string('parameter')->nullable()->comment('参数');
			$table->index(['_lft','_rgt','parent_id'], 'menu__lft__rgt_parent_id_index');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menus');
	}

}
