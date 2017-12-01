<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseLike extends Model
{
  protected $table = 'course_like';

  public function course()
	{
		return $this->belongsTo('App\Course');
	}
}
