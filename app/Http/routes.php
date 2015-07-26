<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@create');
Route::get('project/create', array('uses' => 'ProjectsController@create', 'as' => 'project.create'));
Route::post('projects','ProjectsController@store');
Route::get('projects', 'ProjectsController@index');
Route::get('/projects/{id}','ProjectsController@show');
Route::get('projects/{id}', 'ProjectsController@like');