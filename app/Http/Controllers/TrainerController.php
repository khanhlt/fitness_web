<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\Registration;

class TrainerController extends Controller
{
    public function list()
    {
        $trainer = User::where('purpose','=','trainer')->get();
        return view('ListTrainer',['trainer'=>$trainer]);
    }
    
    public function course($id)
    {
        $registration = Registration::where('user_id','=',$id)->get();
        return view('CourseTrainer',['registration'=>$registration]);
    }
}
