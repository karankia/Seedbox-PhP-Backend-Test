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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('closed', 'DataController@closed');
    //Server API
    Route::get('servers', 'ServerInvController@index');
    Route::get('servers/{server}', 'ServerInvController@show');
    Route::post('servers', 'ServerInvController@store');
    Route::post('servers/{server}', 'ServerInvController@update');
    Route::delete('servers/{server}', 'ServerInvController@delete');
});


