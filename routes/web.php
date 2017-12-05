<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//user profile
Route::get('/profile/{id}', 'ProfileController@view')->name('profile');

Route::get('/editprofile/{id}', 'EditProfileController@edit')->name('editprofile');

Route::get('/updateprofile/{id}', 'EditProfileController@update')->name('updateprofile');


/* blog */
// check for logged in user
Route::group(['middleware' => ['auth']], function()
{
	// show new post form
	Route::get('new-post', 'PostController@create');
	// save new post
	Route::post('new-post', 'PostController@store');
	// edit post form
	Route::get('edit/{slug}', 'PostController@edit');
	// update post
	Route::post('update', 'PostController@update');
	// delete post
	Route::get('delete/{id}', 'PostController@destroy');
	// display user's all posts
	Route::get('my-all-posts', 'UserController@user_posts_all');
	// display user's drafts
	 Route::get('my-drafts','UserController@user_posts_draft');
	 // add comment
	 Route::post('comment/add','PostCommentController@store');
	 // delete comment
	 Route::post('comment/delete/{id}','PostCommentController@destroy');
});

/* display all posts */
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');


/* course */
Route::get('course', 'CourseController@show_all')->name('course');

Route::get('course/{id}', 'CourseController@show');

Route::post('/comment/{id}', 'CourseCommentController@postComment');
