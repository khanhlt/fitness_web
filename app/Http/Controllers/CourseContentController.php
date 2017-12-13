<?php

namespace App\Http\Controllers;

use App\done_action;
use Illuminate\Http\Request;
use App\CourseContent;
use Illuminate\Support\Facades\Auth;
use App\Registration;


class CourseContentController extends Controller
{
    public function content($id)
    {
        $content= CourseContent::where('course_id','=',$id)->get();
        $done_action = done_action::all();
        return view('mypage.content',['content'=>$content,'done_action'=>$done_action,'id'=>$id]);
    }

    public function check_action(Request $request,$id)
    {
        $userID = Auth::user()->id;
        $data = $request->checkbox;

        if ($data != NULL) {
            # code...
            foreach ($data as $data_item){
            $course = CourseContent::where('id','=',$data_item)->get();
            foreach ($course as $course_1){
                $course_id = $course_1->course_id;
        $this->validate($request,[
           'checkbox[]'=>'required',
        ],
            [
                'required'=>'You have to choose actions',
            ]);

        if(!isset($request->checkbox)){
            return redirect()->route('CourseContent', ['id' => $id])->with('notice1','You have to choose actions');

        }else {
            foreach ($data as $data_item) {
                $course = CourseContent::where('id', '=', $data_item)->get();
                foreach ($course as $course_1) {
                    $course_id = $course_1->course_id;

                }
            }

            $check = Registration::where([
                ['user_id', '=', $userID],
                ['course_id', '=', $course_id]
            ])->get();
            foreach ($check as $check1) {
                $registration_id = $check1->id;
            }
            foreach ($data as $data1) {
                $done_action = new done_action();
                $done_action->registration_id = $registration_id;
                $done_action->course_content_id = $data1;
                $done_action->done = 1;
                $done_action->save();
                return redirect()->route('CourseContent', ['id' => $course_id]);
            }
        }

    }
    elseif ($data == NULL) {
        # code...
       echo "No";
    }

        }
}