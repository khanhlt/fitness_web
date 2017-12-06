<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\CourseComment;
use App\Course;

class CourseController extends Controller
{
  public function show_all()
	{
		$courses = Course::all();
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

	public function listcourse(Request $request)
	{
		
		if (($request->ages <= 40) && (($request->weight) >= ($request->height -90)) )
		{
			$course = Course::select()->where('level','=','1')->get();
			return view('mypage',['course'=> $course]);
			// return view('mypage')->with('course' => $course);
		} else
		{
			if ($request->ages >50 )
			{
				$course = Course::select()->where('level','=','2')->get();
			return view('mypage',['course'=> $course]);
			} else {
				$course = Course::select()->where('level','=','3')->get();
			return view('mypage',['course'=> $course]);
			}
		}
	}
}
