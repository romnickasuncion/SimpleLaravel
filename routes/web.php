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

Route::get('/sampleRoute', function () {
    return view('sample');
});

Route::get('/newRoute', function () {
    return view('sample.newSample');
});

Route::get('/users', 'SampleController@index');

Route::post('/users', 'SampleController@store');

Route::get('/users/{user_id}/edit', 'SampleController@edit');

Route::post('/users/{user_id}/update', 'SampleController@update');

Route::get('/users/{user_id}/delete', 'SampleController@delete');