<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    /**
     * Update user profile
     */

    public function view($id) {
	   $user = User::find($id);
       return view('profile',[$user->id]);

    }
}
