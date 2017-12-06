<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseContent;
use Illuminate\Support\Facades\Auth;
use App\Registration;


class CourseContentController extends Controller
{
    public function content($id)
    {
        $content= CourseContent::where('course_id','=',$id)->get();
        return view('mypage.content',['content'=>$content,'course_id'=>$id]);
    }

    public function check_action(Request $request,$id)
    {
    	$userID = Auth::user()->id;
        $data = $request->checkbox;
        $check = Registration::where('course_id','=',$key)->first();
        foreach ($data as $key) {
        	# code...
        	echo $key;
        }
        
        
    }
}
