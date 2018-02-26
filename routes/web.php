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

Route::get('foo', function () {
    return 'Hello World!';
});

//Route::get('/lianzhiguang', 'lianzhiguang@126.com');
//Route::get('/user', 'UsersController@index');

Route::get('/user', function () {
    return 'lianzhiguang@126.com';
});

Route::match(['get', 'post'], '/match', function () {
    return 'match: get or post.';
});

Route::any('any', function () {
    return 'any';
});

Route::redirect('/here', '/there', 301);
