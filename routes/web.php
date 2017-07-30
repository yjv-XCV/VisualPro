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
	Route::get('/create', 'OfficeController@createPage');				//create project page
	Route::post('/create', 'OfficeController@create');					//create project
	Route::get('/edit', 'OfficeController@editPage');						//edit project page
	Route::post('/edit', 'OfficeController@edit');							//submit changes
	Route::get('/archieve', 'OfficeController@showArchieved');	//list archieved project
	Route::post('/archieve', 'OfficeController@archieve');			//archieve a project
});

Route::group(['prefix' => 'visual', 'namespace' => 'Visual'], function(){
	Route::get('/console', 'VisualController@console');
	Route::get('/display', 'VisualController@display');
});