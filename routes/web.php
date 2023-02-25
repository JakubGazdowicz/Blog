<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Blog
Route::get('/', 'BlogController@index')->name('home.index');
Route::get('/gallery', 'BlogController@gallery')->name('gallery');

Route::get('/contact', 'BlogController@contact')->name('contact');
Route::get('/contact/mail', 'ContactController@mail')->name('sendMail');

Route::get('/blog/{id}/show', 'BlogController@show')->name('post.show');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'blog'], function() {
        Route::post('{id}/like', 'PostLikesController@like')->name('like');
        Route::post('{id}/dislike', 'PostLikesController@dislike')->name('dislike');
        Route::post('{id}/comment', 'CommentController@store')->name('comment.store');
        Route::delete('{id}/comment/destroy', 'CommentController@destroy')->name('comment.destroy');
    });


// Admin
    Route::group([
        'prefix' => 'adminPanel',
        'middleware' => 'isAdmin',
        'as' => 'adminPanel.',
    ], function () {
        Route::get('', 'AdminPanelController@index')
            ->name('index');

        Route::post('store', 'AdminPanelController@store')
            ->name('store');

        Route::get('{id}/edit', 'AdminPanelController@edit')
            ->name('edit');

        Route::put('{id}/update', 'AdminPanelController@update')
            ->name('update');

        Route::delete('{id}/destroy', 'AdminPanelController@destroy')
            ->name('destroy');
    });
});

Auth::routes();

