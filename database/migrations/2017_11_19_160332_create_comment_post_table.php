<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment_post', function(Blueprint $table)
		{
			$table->increments('comment_post_id');
			$table->integer('user_id');
			$table->integer('post_id');
			$table->string('blog_comment_content');
			$table->string('blog_comment_image');
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
		Schema::drop('comment_post');
	}

}
