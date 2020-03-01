<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/posts', 'PostController@index');
Route::post('/post', 'PostController@store');
Route::put('/post/{id}', 'PostController@update');
Route::delete('/post/delete/{id}', 'PostController@delete');

Route::get('/comments', 'CommentController@index');
Route::post('/comment', 'CommentController@store');
Route::put('/comment/{id}', 'CommentController@update');
Route::delete('/comment/delete/{id}', 'CommentController@delete');