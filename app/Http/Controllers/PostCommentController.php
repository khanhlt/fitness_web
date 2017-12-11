<?php

namespace App\Http\Controllers;

use App\Posts;
use App\PostComments;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Request $request)
    {
        //on_post, from_user, body
        $input['from_user'] = $request->user()->id;
        $input['on_post'] = $request->input('on_post');
        $input['body'] = $request->input('body');
        $slug = $request->input('slug');
        PostComments::create($input);
        return redirect($slug)->with('message', 'Comment published');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
