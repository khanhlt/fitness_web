<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   protected $table = 'course';

  public function like()
	{
		return $this->hasMany('App\CourseLike');
	}

	public function comment()
	{
		return $this->hasMany('App\CourseComment');
	}

	public function content()
	{
		return $this->hasMany('App\CourseContent');
	}	

}
