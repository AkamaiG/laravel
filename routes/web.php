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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PostController@index');
Route::get('post/create', 'PostController@create');
Route::get('post/delete/{id}', 'PostController@delete', function ($id) {});
Route::post('post', 'PostController@store');