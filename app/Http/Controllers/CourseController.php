<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CourseComment;
use App\Course;

class CourseController extends Controller
{
  public function show_all()
	{
		$courses = Course::orderBy('number_like','desc')->paginate(10);
		$user_id = Auth::user()->id;
		return view('course')->with(['courses' => $courses, 'user_id' => $user_id]);
	}

	public function show($id)
	{
		$course = Course::find($id);
		$comments = CourseComment::select()->where('course_id', $id)->get();

		$user_id = Auth::user()->id;
		return view('course1')->with(['course' => $course, 'user_id' => $user_id , 'comments' => $comments]);
	}
}
