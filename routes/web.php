<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now createRecipe something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-all', 'CommentController@index');

Route::resource('comment', 'CommentController');

