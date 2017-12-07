<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoneAction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('done_action', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('registration_id');
            $table->integer('course_content_id');
            $table->integer('done');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return 
     */
    public function down()
    {

        Schema::drop('done_action');
    }
}
