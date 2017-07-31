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
	Route::get('/', 'OfficeController@show');										//show list of project
	Route::get('/project', 'OfficeController@edit');					//edit project page
	Route::post('/create', 'OfficeController@create');				//create project
	Route::post('/save', 'OfficeController@save');					//submit changes
	Route::get('/archived', 'OfficeController@archived');			//list archived project
	Route::post('/archive', 'OfficeController@archive');			//archive a project
	Route::post('/archived/delete', 'OfficeController@destroy');
	Route::group(['prefix' => 'songbook'], function(){
		Route::get('/', 'SongbookController@show');
		Route::get('/song', 'SongbookController@edit');
		Route::post('/create', 'SongbookController@create');
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