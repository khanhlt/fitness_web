<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Posts;

class UserController extends Controller
{
    /* User's profile */
    public function show($id)
    {
        $user = User::find($id);
        return view('profile')->withUser($user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('editprofile')->withUser($user);
    }

    public function editPassword($id)
    {
        $user = User::find($id);
        return view('editpassword')->withUser($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $rules = [
            'name' => 'string|max:255|nullable',
            'email' => 'string|email|max:255|unique:users|nullable',
            'user_name' => 'string|unique:users|nullable',
            'birthday' => 'date|nullable',
            'address' => 'string|max:255|nullable',
            'weight' => 'numeric|nullable',
            'job' => 'string|max:255|nullable'];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return view('profile')->withUser($user);
        } else {
            if ($request->input('name') != null)
                $user->name = $request->input('name');
            if ($request->input('email') != null)
                $user->email = $request->input('email');
            if ($request->input('user_name') != null)
                $user->user_name = $request->input('user_name');
            if ($request->input('birthday') != null)
                $user->birthday = $request->input('birthday');
            if ($request->input('address') != null)
                $user->address = $request->input('address');
            if ($request->input('weight') != null)
                $user->weight = $request->input('weight');
            if ($request->input('job') != null)
                $user->job = $request->input('job');
        }
        $user->save();
        $landing = 'profile/' . $user->id;
        return redirect($landing)->with('alert', "Edit profile successful!");
    }

    public function updatePassword(Request $request, $id) {
        $user = Auth::User();
        $rules = ['current_password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6',
            'new_password_confirmation' => 'required|string|min:6'
            ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->with('alert','Password must be at least 6 characters long!');
        }
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->with('alert','Wrong Current Password!');
        } elseif($request->input('new_password') != $request->input('new_password_confirmation')) {
            return redirect()->back()->with('alert','Password confirmation failed!');
        } else {
            $user->password = bcrypt($request->input('new_password'));
            $user->save();
            $landing = 'profile/' . $user->id;
            return redirect($landing)->with('alert','Change password success!');
        }

    }
    /*
     * Display the posts of a particular user
     *
     * @param int $id
     * @return Response
    */
    public function user_posts($id)
    {
        //
        $posts = Posts::where('author_id', $id)->where('active', '1')->orderBy('created_at', 'desc')->paginate(5);
        $title = User::find($id)->name;
        return view('posts/myposts')->withPosts($posts)->withTitle($title);
    }

    public function user_posts_all()
    {
        //
//        $user = $request->user();
        $posts = Posts::/*where('author_id', $user->id)*/orderBy('created_at', 'desc')->paginate(5);
//        $title = $user->name;
        // $user = $request->user();
        $posts = Posts::orderBy('created_at', 'desc')->paginate(5);
        //$title = $user->name;
        return view('posts/blogposts')->withPosts($posts);
    }

//    public function user_posts_draft(Request $request)
//    {
//        //
//        $user = $request->user();
//        $posts = Posts::where('author_id', $user->id)->where('active', '0')->orderBy('created_at', 'desc')->paginate(5);
//        $title = $user->name;
//        return view('posts/blogposts')->withPosts($posts)->withTitle($title);
//
//    }
}
