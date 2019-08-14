<?php

// API Version 1.0
Route::group([
    'prefix' => 'v1',
    'middleware' => ['api'],
], function () {

    Route::prefix('products')->namespace('API')->group(function () {
        Route::get('/', 'ProductController@index');
        Route::get('/search', 'ProductController@search');
    });

    Route::prefix('product')->namespace('API')->group(function () {
        Route::post('/store', 'ProductController@store');
        Route::put('/{id}', 'ProductController@update');
        Route::delete('/{id}', 'ProductController@destroy');
    });

});
