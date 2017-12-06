<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\CourseComment;
use App\CourseContent;
use App\Course;


class CourseCommentController extends Controller
{
  public function postComment($id, Request $request)
  {
  	$course = Course::find($id);

    $comment = new CourseComment;
  	$comment->course_id = $id;
  	$comment->user_id = Auth::user()->id;
  	$comment->text = $request->content;
  	$comment->save();

  	return redirect("course");
  }
}
