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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{id}', 'ProfileController@view')->name('profile');

Route::get('/editprofile/{id}', 'EditProfileController@edit')->name('editprofile');

Route::get('/updateprofile/{id}', 'EditProfileController@update')->name('updateprofile');

Route::get('course', 'CourseController@show_all')->name('course');

Route::get('course/{id}', 'CourseController@show');

Route::post('listcourse','CourseController@listcourse')->name('listcourse');

Route::post('/comment/{id}', 'CourseCommentController@postComment');

Route::get('ListRegistion','RegistrationController@list')->name('ListRegistion');

Route::get('listTrainer','TrainerController@list')->name('listTrainer');
Route::get('courseTrainer/{id}','TrainerController@course')->name('courseTrainer');

Route::get('CourseContent/{id}','CourseContentController@content');
Route::post('CheckActions/{id}','CourseContentController@check_action');

Route::post('reg_course','RegistrationController@registration')->name('reg_course');