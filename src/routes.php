<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', 'PostController@index');

    Route::get('/create', 'PostController@create');
    Route::post('/create', 'PostController@store');

    Route::get('/{id}/edit', 'PostController@edit')->name('blog.package.edit');
    Route::post('/{id}/edit', 'PostController@update');
    Route::delete('/{id}/delete', 'PostController@destroy')->name('blog.package.delete');
});