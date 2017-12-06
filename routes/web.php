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
use App\Registration;

Route::get('/', function () {
    return view('layouts/app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//user profile
Route::get('/profile/{id}', 'UserController@show')->name('profile');

Route::get('/editprofile/{id}', 'UserController@edit')->name('editprofile');

Route::post('/updateprofile/{id}', 'UserController@update')->name('updateprofile');

Route::get('/editpassword/{id}', 'UserController@editPassword')->name('editpassword');

Route::post('/updatepassword/{id}', 'UserController@updatePassword')->name('updatepassword');

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


// Route::post('/comment/{id}', 'CourseCommentController@postComment');

// Route::get('/like/{id}', 'CourseLikeController@like');

Route::post('listcourse','CourseController@listcourse')->name('listcourse');

Route::post('/comment/{id}', 'CourseCommentController@postComment');

Route::get('ListRegistion','RegistrationController@list')->name('ListRegistion');

Route::get('listTrainer','TrainerController@list')->name('listTrainer');
Route::get('courseTrainer/{id}','TrainerController@course')->name('courseTrainer');

Route::get('CourseContent/{id}','CourseContentController@content');
Route::post('CheckActions/{id}','CourseContentController@check_action');

Route::post('reg_course','RegistrationController@registration')->name('reg_course');

Route::post('/comment/{id}', 'CourseCommentController@postComment');

