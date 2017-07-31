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

Route::group(['prefix' => 'office', 'namespace' => 'Office'], function(){
	Route::get('/', 'ProjectController@show');						//show list of project
	Route::get('/project', 'ProjectController@edit');				//edit project page
	Route::post('/create', 'ProjectController@create');				//create project
	Route::post('/newconfig', 'ProjectController@newconfig');
	Route::post('/save', 'ProjectController@save');					//submit changes
	Route::get('/archived', 'ProjectController@archived');			//list archived project
	Route::post('/archive', 'ProjectController@archive');			//archive a project
	Route::post('/archived/delete', 'ProjectController@destroy');
	Route::group(['prefix' => 'songbook'], function(){
		Route::get('/', 'SongbookController@show');
		Route::get('/song', 'SongbookController@edit');
		Route::post('/create', 'SongbookController@create');
		Route::post('/newalbum', 'SongbookController@newalbum');
		Route::post('/newartist', 'SongbookController@newartist');
		Route::post('/updatealbum', 'SongbookController@updatealbum');
		Route::post('/updateartist', 'SongbookController@updateartist');
		Route::post('/deletealbum', 'SongbookController@deletealbum');
		Route::post('/deleteartist', 'SongbookController@deleteartist');
		Route::post('/addlyrics', 'SongbookController@addlyrics');
		Route::post('/save', 'SongbookController@save');
		Route::get('/archived', 'SongbookController@archived');
		Route::post('/archive', 'SongbookController@archive');
		Route::post('/archived/delete', 'SongbookController@destroy');
	});
});

Route::group(['prefix' => 'visual', 'namespace' => 'Visual'], function(){
	Route::get('/console', 'VisualController@console');
	Route::get('/display', 'VisualController@display');
});