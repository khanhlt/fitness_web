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
    return view('welcome');
});

Auth::routes();

Route::get('course', 'CourseController@show_all')->name('course');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('listTrainer', 'TrainerController@list')->name('listTrainer');

Route::get('ListRegistion', 'RegistrationController@list')->name('ListRegistion');

//user profile
Route::get('/profile/{id}', 'UserController@show')->name('profile');

Route::get('/editprofile/{id}', 'UserController@edit')->name('editprofile');

Route::post('/updateprofile/{id}', 'UserController@update')->name('updateprofile');

Route::get('/editpassword/{id}', 'UserController@editPassword')->name('editpassword');

Route::post('/updatepassword/{id}', 'UserController@updatePassword')->name('updatepassword');

Route::get('all-posts', 'UserController@user_posts_all')->name('all-posts');

/* blog */
//show new post form
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
Route::get('all-posts', 'UserController@user_posts_all')->name('all-posts');
// display user's drafts
Route::get('my-drafts', 'UserController@user_posts_draft');
// add comment
Route::post('comment/add', 'PostCommentController@store');
// delete commE6ent
Route::post('comment/delete/{id}', 'PostCommentController@destroy');


/* display all posts */
Route::get('user/{id}/posts', 'UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('/{slug}', ['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');


/* course */
Route::get('course/fail', 'CourseController@fail')->name('fail');

Route::get('course/{id}', 'CourseController@show');

Route::get('courseTrainer/{id}', 'TrainerController@course')->name('courseTrainer');

Route::get('/like/{id}', 'CourseLikeController@like');

Route::post('listcourse', 'CourseController@listcourse')->name('listcourse');

Route::post('/comment/{id}', 'CourseCommentController@postComment');


Route::get('CourseContent/{id}', 'CourseContentController@content')->name('CourseContent');

Route::post('CheckActions', 'CourseContentController@check_action')->name('CheckActions');

Route::post('reg_course', 'RegistrationController@registration')->name('reg_course');

Route::post('/comment/{id}', 'CourseCommentController@postComment');

