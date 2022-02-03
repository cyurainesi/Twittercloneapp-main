<?php

use App\Http\Controllers\SearchController;
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

Auth::routes();


Route::get('/home', 'TweetController@index')->name('home');
Route::POST('/tweets','TweetController@store');
Route::get('/trends', 'TweetController@trends')->name('trends');
route::POST('/tweets/{tweet}/remove','TweetController@destory');
Route::post('/tweets/{tweet}/like', 'TweetLikesController@store');

Route::post('/tweets/{tweet}/commets', 'CommentsController@store');
Route::post('/tweets/{tweet}/reply', 'ReplyController@store');
Route::get('/Explore','TweetController@exprlore')->name('explore');
Route::get('/tweets/{id}','TweetController@find')->name('find');

Route::POST('users/{user:username}','FollowController@store');
Route::get('/suggestions', 'FollowController@index')->name('suggestions');
Route::get('/followers/{user:username}', 'FollowController@showfollowers')->name('followers');
Route::get('/following/{user:username}', 'FollowController@showfollowing')->name('following');

Route::get('/profile/{user:username}', 'ProfilesController@show')->name('profile');
Route::get('{user:username}/edit', 'ProfilesController@edit')->name('profileedit');
Route::post('{user:username}', 'ProfilesController@update')->name('profileedit');
Route::POST('/delete/{user:username}','ProfilesController@destroy');

route::POST('/tweets/{tweet}/bookmark','BookMarkController@store');
route::POST('/tweets/{tweet}/bookmark/remove','BookMarkController@destroy');
route::POST('/tweets/bookmark/remove','BookMarkController@destroyall');
route::get('/tweets/bookmark','BookMarkController@index')->name('bookmark');
route::get('/messages','MessagesController@index')->name('messages');

route::get('/tweets/generator/comments/','CommentsController@index')->name('commenst');
Route::post('/comment/{tweetcomment}/like', 'TweetLikesController@likecomment');
route::get('/notificattions','NotificationsController@index')->name('notifications');


Route::POST('/search','SearchController@store');

Route::get('/bye','ProfilesController@byee')->name('bye');
Route::POST('','ProfilesController@sugg');

Route::get('/iradukundajob','ReplyController@create')->name('admin');
