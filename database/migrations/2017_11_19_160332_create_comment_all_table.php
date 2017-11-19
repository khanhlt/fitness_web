<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentAllTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment_all', function(Blueprint $table)
		{
			$table->increments('comment_all_id');
			$table->integer('user_id');
			$table->integer('courses_id');
			$table->string('comment_image');
			$table->string('comment_content');
			$table->integer('like');
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
		Schema::drop('comment_all');
	}

}
