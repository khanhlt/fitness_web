<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\CourseLike;
use App\Course;


class CourseLikeController extends Controller
{
  public function like($id) 
  {
  	$course = Course::find($id);
  	$userID = Auth::user()->id;

  	$element = CourseLike::where([
  		['course_id', '=', $id],
  		['user_id',   '=', $userID],
  	])->first();

  	if($element == NULL)
  	{
  		$like = new CourseLike;
		$like->course_id = $id;
		$like->user_id = $userID;
        $like->save();

        $course->number_like++;
        $course->save();
  	}
  	return redirect('course');

  }
}
