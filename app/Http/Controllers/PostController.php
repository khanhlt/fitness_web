<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use Redirect;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class PostController extends Controller
{
    public function index()
    {

        //fetch 5 posts from database which are active and latest
        $posts = Posts::where('active', 1)->orderBy('created_at', 'desc')->paginate(5);

        //page heading
        $title = 'Latest Posts';

        //return home.blade.php template from resources/views folder
        return view('home')->withPosts($posts)->withTitle($title);

    }

    public function create(Request $request)
    {
        return view('posts.create');
    }

    public function store(PostFormRequest $request)
    {
        $post = new Posts();
//        $post->title = $request->get('title');
        $post->title = Input::get('title');
        $post->body = Input::get('body');
        $post->slug = str_slug($post->title);
        $post->author_id = auth()->user()->id;
        if ($request->has('save')) {
            $post->active = 0;
            $message = 'Post saved successfully';
        } else {
            $post->active = 1;
            $message = 'Post published successfully';
        }
        $post->save();
        return redirect('edit/' . $post->slug)->with('alert', $message);
    }

    public function show($slug)
    {
        $post = Posts::where('slug', $slug)->first();
        if (!$post) {
            return redirect('/')->withErrors('requested page not found');
        }
        $comments = $post->comments;
        return view('posts.show')->withPost($post)->withComments($comments);
    }

    public function edit(Request $request, $slug)
    {
        $post = Posts::where('slug', $slug)->first();
        return view('posts.edit')->with('post', $post);
    }

    public function update(Request $request)
    {
        //
        $post_id = $request->input('post_id');
        $post = Posts::find($post_id);

        $title = $request->input('title');
        $slug = str_slug($title);
        $duplicate = Posts::where('slug', $slug)->first();
        if ($duplicate) {
            if ($duplicate->id != $post_id) {
                return redirect('edit/' . $post->slug)->withErrors('Title already exists.')->withInput();
            } else {
                $post->slug = $slug;
            }
        }
        $post->title = $title;
        $post->body = $request->input('body');
        if ($request->has('save')) {
            $post->active = 0;
            $message = 'Post saved successfully';
        } else {
            $post->active = 1;
            $message = 'Post updated successfully';
        }
        $post->save();

//        return redirect('edit/' . $post->slug)->withMessage($message);

        // return all posts of user
        $user = $request->user();
        $landing = 'user/'.$user->id.'/posts';
        return redirect($landing)->withMessage($message);
    }

    public function destroy(Request $request, $id)
    {
        //
        $post = Posts::find($id);

        $post->delete();
        $data['message'] = 'Post deleted Successfully';

        return redirect('/')->with($data);
    }
}
