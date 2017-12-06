<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Posts;

class UserController extends Controller
{
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
        return view('posts/blogposts')->withPosts($posts)->withTitle($title);
    }

    public function user_posts_all(Request $request)
    {
        //
        $user = $request->user();
        $posts = Posts::where('author_id', $user->id)->orderBy('created_at', 'desc')->paginate(5);
        $title = $user->name;
        return view('posts/blogposts')->withPosts($posts)->withTitle($title);
    }

    public function user_posts_draft(Request $request)
    {
        //
        $user = $request->user();
        $posts = Posts::where('author_id', $user->id)->where('active', '0')->orderBy('created_at', 'desc')->paginate(5);
        $title = $user->name;
        return view('posts/blogposts')->withPosts($posts)->withTitle($title);

    }
}
