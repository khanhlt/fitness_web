<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Registration;
use App\Http\Controllers\DateTime;



class RegistrationController extends Controller
{
    public function registration(Request $request)
	{
		$userID = Auth::user()->id;
		$data = $request->checkbox;
		$date = date('Y-m-d H:i:s');

		foreach ($data as $key ) {
			# code...

			$registration = new registration;
			$registration = Registration::where('course_id','=',$registration->course_id)->first();
			if ($registration == NULL) {

				echo "No";

							} else {
				$registration->user_id = $userID;
			$registration->course_id = $key;
			$registration->time = $date;

			$registration->save();

							}
			

			// DB::table('registration')->where('user_id',$id)->insert('course_id',$key);
		}

		return view('reg',['data'=> $data]);
		
	}
}
