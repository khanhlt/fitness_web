<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('email')->nullable()->unique('users_user_email_unique');
			$table->string('user_name', 40)->nullable()->unique('user_name');
			$table->string('password');
			$table->string('purpose')->nullable();
			$table->date('birthday')->nullable();
			$table->string('address')->nullable();
			$table->string('job')->nullable();
			$table->integer('weight')->nullable();
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}
