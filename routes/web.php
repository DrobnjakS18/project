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


Route::get('/','Lab1@getLogin');
Route::post('/','Lab1@store');
Route::get('/session_del','Lab1@destroy')->name('session_del');

Route::get('/home',);






//Route::get('/muske_patike/{id}','Lab1@index');
