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
		$courses = Course::orderBy('number_like','desc')->paginate(5);
		return view('course')->with(['courses' => $courses]);
	}

	public function show($id)
	{
		$course = Course::find($id);
		$comments = CourseComment::select()->where('course_id', $id)->get();

		$user_id = Auth::user()->id;
		return view('courseDetail')->with(['course' => $course, 'user_id' => $user_id , 'comments' => $comments]);
	}

	public function listcourse(Request $request)
	{
		if (($request->ages <= 40) && (($request->weight) >= ($request->height -90)) )
		{
			$course = Course::where('level','=','1')->paginate(7);
			$course->setPath('mypage');
			// return view('mypage',['course'=> $course]);
		}
		else
		{
			if ($request->ages >50 )
			{

				$course = Course::where('level','=','2')->paginate(7);
				$course->setPath('mypage');
				// return view('mypage',['course'=> $course]);
			}
			else
            {
				

				$course = Course::where('level','=','3')->paginate(7);
				$course->setPath('mypage');
				// return view('mypage',['course'=> $course]);
			}
		}
		return view('mypage',['course'=> $course]);
	}

	public function fail()
    {
        return redirect()->back()->with('altert','You are not logging in!');
    }
}
