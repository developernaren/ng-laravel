<?php


Route::get('/', function () {
    return view('front.index');
});

Route::get('detail', function( ) {
    return view('front.detail');
});

Route::group(['prefix' => 'api'], function() {


    Route::get('product', 'ProductController@index');
    Route::post('product', 'ProductController@create');
    Route::get('product/{slug}', 'ProductController@show');
    Route::post('product/{slug}', 'ProductController@update');
    Route::delete('product/{slug}','ProductController@delete');

    Route::get('cart', 'CartController@index');
    Route::post('cart', 'CartController@create');
    Route::get('cart/{id}', 'CartController@show');
    Route::post('cart/{id}', 'CartController@update');
    Route::delete('cart/{id}','CartController@delete');

    Route::get('user', 'UserController@index');
    Route::post('user', 'UserController@create');
    Route::get('user/{id}', 'UserController@show');
    Route::post('user/{id}', 'UserController@update');
    Route::delete('user/{id}','UserController@delete');

});