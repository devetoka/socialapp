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

//Landing Page (Home Page)
Route::get('/', 'HomepageController@index')->name('homepage');

Route::get('/social', function(){
	return view('/timbu-social');
})->name('timbu-social');
//*****POST ROUTE DETAILS*******//

//Post Comment
Route::post('/post-comment', function(){
	return view('/post-comment');
});

//Upload Files
Route::post('/Upload', function(){
	return view('/upload');
});

//*****USER ROUTE DETAILS*****//

//Delete User Account
Route::delete('/delete-user-account', function(){
	return view('/delete-user-account');
});

//Update User Profile
Route::put('/update-user-profile', function(){
	return view('/update-user-profile');
});

//User Profile
Route::get('/User-profile', function(){
	return view('/user-profile');
});

//Controls Login, Register, Reset password user

/*
	The following route is responsible for follow/unfollow features

*/
Route::group(['prefix' => 'user'], function () {
	Route::get('/follow/id', 'FollowController@create')->name('user.follow');
});

//end of follow/unfollow

//Route::auth();

Auth::routes();

/* Post Routes */

//Get User Posts

Route::get('/{user}/posts', 'PostController@index');
