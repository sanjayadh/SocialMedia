<?php

use Illuminate\Support\Facades\Route;

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
Route::get('signup',"LockdownController@getLogin")->name('login');
Route::get('sanjay',"LockdownController@getProfile")->middleware('auth')->name('profile');
Route::get('/logout', 'LockdownController@logout');
Route::get('profile/{username}','LockdownController@profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('friend',function (){
    return view('friend');
});
Route::get('message',function (){
    return view('message');
});
Route::get('notification',function (){
    return view('notification');
});
Route::get('/hey', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::get('/p/{post}', 'PostsController@show');

Route::middleware(['auth'])->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/users/list', 'IndexController@users');

    Route::post('/follow', 'FollowerController@follow')->name('follow');
    Route::post('/unfollow', 'FollowerController@unfollow')->name('unfollow');

});
Route::get('checkprofilesanjay',function (){
    return view('checkprofile');
});

Route::get('imae',function (){
    return view('image');
});
Route::get('image-upload', 'ImageController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageController@imageUploadPost')->name('image.upload.post');

Route::get('/profile', 'ProfileController@index');
Route::get('/{username}', 'ProfileController@show');


