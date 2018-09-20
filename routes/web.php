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

Route::get('login','SessionController@create')->name('login');
Route::post('login','SessionController@store')->name('login');
Route::get('logout','SessionController@destroy')->name('logout');



Route::get('homework/{course}','PageController@homework')->name('homework');



Route::get('/','PageController@index')->name('home');
Route::get('/phpadmin','PageController@phpadmin')->name('phpadmin');
Route::post('/perception','PerceptionController@perception');
Route::get('/{user}','PageController@index')->name('index');