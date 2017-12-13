<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('on_post') -> unsigned() ->default(0);
			$table->foreign('on_post') -> references('id') -> on('posts')->onDelete('cascade');
			$table->integer('from_user') -> unsigned() ->default(0);
			$table->foreign('from_user') -> references('id') -> on('users') -> onDelete('cascade');
			$table->text('body');
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
		Schema::drop('post_comments');
	}

}
