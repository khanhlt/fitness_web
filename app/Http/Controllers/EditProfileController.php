<?php

namespace App\Http\Controllers;

use App\User;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EditProfileController extends Controller
{
	public function edit($id) {

      $user = User::find($id);

    	return view('editprofile',[$user->id]);
	}

  public function update(Request $request, $id) {
      $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'user_name' => 'required|string|unique:users',
        'birthday' => 'date',
        'address' => 'string|max:255',
        'weight' => 'numeric',
        'job' => 'string|max:255'];

      $validator = Validator::make($request->all(), $rules);
    if($validator->fails()) {
        return view('profile');
      } else {
        $user = User::find($id);
        $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->user_name = $request->input('user_name');
        // $user->birthday = $request->input('birthday');
        // $user->address = $request->input('address');
        // $user->weight = $request->input('weight');
        // $user->job = $request->input('job');

        $user->save();
        // Session:flash('success', 'Your profile was updated!');
      }
        return view('profile', [$user->id]);
  }
}
