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

Route::get('/profile/{id}', 'ProfileController@view')->name('profile');

Route::get('/editprofile/{id}', 'EditProfileController@edit')->name('editprofile');

Route::get('/updateprofile/{id}', 'EditProfileController@update')->name('updateprofile');

Route::get('course', 'CourseController@show_all')->name('course');

Route::get('course/{id}', 'CourseController@show');

Route::post('listcourse','CourseController@listcourse')->name('listcourse');

Route::post('/comment/{id}', 'CourseCommentController@postComment');

Route::post('reg_course','RegistrationController@registration')->name('reg_course');