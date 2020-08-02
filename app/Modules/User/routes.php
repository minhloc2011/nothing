<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Modules\User\Controllers'], function () {
    Route::get('/{username}', 'UserController@index');
    Route::get('/{username}/follows', 'UserController@index');
    Route::get('/{username}/friends', 'UserController@index');
    Route::get('/{username}/tags', 'UserController@index');
});
