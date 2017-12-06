<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;

// use Illuminate\Http\Request;
// use App\Registration;

// class RegistrationController extends Controller
// {
//     public function list()
//     {
//         $userID = Auth::user()->id;
//         $date = date('Y-m-d H:i:s');
//         $registration = Registration::where('user_id','=',$userID)->get();
//         return view('mypage.registration',['registration'=>$registration],['userID'=>$userID],['date'=>$date]);
//     }

//         public function registration(Request $request)
//     {
//         $userID = Auth::user()->id;
//         $data = $request->checkbox;
//         $date = date('Y-m-d H:i:s');
//         $cart = array();
//         $cart_deleted = array();
//         // $cart2 = array();
//         foreach ($data as $key ) {
//             # code...

//             $registration = new registration;
//             $registration = Registration::where('course_id','=',$key)->first();
//             if ($registration != NULL) {
//                 array_push($cart_deleted, $registration);


//             } else {
//                 $registration1 = new registration;
//                 $registration1->user_id = $userID;
//                 $registration1->course_id = $key;
//                 $registration1->time = $date;
//                 array_push($cart, $registration1);
//                 $registration1->save();

//             }
//             // foreach ($cart as $cart_item) {
//             // 	$course_add = new course;
//             // 	$course_add = Course::where('course_id','=',$cart_item)->first();
//             // 	array_push($cart,$course_add);

//             // }
//         }

//         return view('reg',['cart'=> $cart,'cart_deleted'=>$cart_deleted]);

//     }

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
