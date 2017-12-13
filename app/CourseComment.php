<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseComment extends Model
{
    protected $table = 'course_comment';

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
