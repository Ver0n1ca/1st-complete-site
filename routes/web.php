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



Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::post('/contact','HomeController@contact');
Route::get('/account', 'AccountController@index');
Route::get('/create','Admin\AdminController@create');
Route::get('/mem/comments','AccountController@memCom');
//Route::get('/blog/topic1','BlogController@topic1');
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {  
    Route::get('/', 'HomeController@index');
    Route::match(['get', 'post'],'articles','AdminController@article');
    Route::get('users','AdminController@users');
    Route::get('messages','AdminController@messages');
    Route::post('create','AdminController@create2');
    Route::get('edit/{id}','AdminController@edit');
    Route::match(['get', 'post'],'delete/{id}','AdminController@delete');
    Route::post('update/{id}','AdminController@update');
    Route::get('comments','AdminController@comment');
});
Route::group(['prefix'=>'blog'],function(){
	Route::get('/', 'BlogController@index');
	Route::get('/topic1','BlogController@topic1');
	Route::get('topic2','BlogController@topic2');
	Route::get('topic3','BlogController@topic3');
	Route::get('{slug}', 'BlogController@showPost');

});
