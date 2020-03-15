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

Route::get('/addposts','PostsController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/view', 'DashboardController@show');
Route::get('/otherpost/{postid}','DashboardController@post')->name('posts.show');


Route::post('/createpost', 'PostsController@create');
Route::get('/profile/{userid}', 'ProfilesController@index')->name('profiles.show');
Route::get('/post/{postid}','PostsController@show')->name('posts.show');
Route::get('/post/{id}/edit','PostsController@editform');//alternate route idea is name ALTERNATE.ROUTE
Route::PUT('/post/{id}/editsubmit','PostsController@edit')->name('post.update');//for another udpdate method with post remove method put from form and change route to post also
Route::DELETE('/post/{id}/delete','PostsController@destroy')->name('post.destroy');

//Route::post('/search','DashboardController@search');



Route::get('/update/{id}','PostsController@updateview')->name('alternate.route');
