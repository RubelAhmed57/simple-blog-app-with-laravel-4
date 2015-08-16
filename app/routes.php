<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(array('prefix' => 'admin','before' =>'auth'), function()
{
		Route::resource('articles', 'AdminArticlesController',array('except' => array('show')));
		
}
);
Route::group(array('prefix' => 'admin'), function()
{
		Route::get('login', array( 'as' => 'admin.login', 'uses' => 'AdminAuthController@getLogin'));
		Route::post('login', array( 'as' => 'admin.login.post', 'uses' => 'AdminAuthController@postLogin'));
		Route::get('logout', array( 'as' => 'admin.logout', 'uses' => 'AdminAuthController@getLogout'));
}
);


		Route::get('/', array( 'as' => 'home', 'uses' => 'ArticlesController@getIndex'));
		Route::get('article/{id}', array( 'as' => 'article', 'uses' => 'ArticlesController@getpost'));

