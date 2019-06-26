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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('model')->group(function () {
    Route::get('index', 'ModelController@index');
    Route::get('get', 'ModelController@get');
    Route::get('store', 'ModelController@store');
    Route::get('update', 'ModelController@update');
    Route::get('delete', 'ModelController@delete');
});

Route::prefix('view')->group(function () {
    Route::get('index', 'ViewController@index');
    Route::get('create', 'ViewController@create');
    Route::post('store', 'ViewController@store');
});

// Home模块下 三级模式
Route::prefix('home')->namespace('Home')->group(function () {
    Route::prefix('index')->group(function () {
        Route::get('index', 'IndexController@index');
    });

    Route::prefix('article')->group(function () {
        Route::get('index', 'ArticleController@index');
        Route::get('create', 'ArticleController@create');
        Route::post('store', 'ArticleController@store');
        Route::get('edit/{id}', 'ArticleController@edit');
    });
});

// Admin 模块
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::prefix('index')->group(function () {
        Route::get('index', 'IndexController@index');
        Route::get('dashboard', 'IndexController@dashboard');
    });

    Route::prefix('user')->group(function () {
        Route::get('index', 'UserController@index');
    });

    Route::prefix('article')->group(function () {
        Route::get('index', 'ArticleController@index');
        Route::get('create', 'ArticleController@create');
        Route::post('store', 'ArticleController@store');
    });


});
