<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CourseContent;
use App\CourseLike;

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

}
