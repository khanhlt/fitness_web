<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
  protected $table = 'course_content';

  public function course()
	{
		return $this->belongsTo('App\Course');
	}
  
	public function done_action()
	{
		return $this->belongsTo('App\done_action');

	public function content()
	{
		return $this->content;
	}
}
