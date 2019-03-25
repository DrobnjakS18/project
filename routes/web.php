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

Route::get('/reg','Lab1@getReg');
Route::post('/reg','Lab1@storeUser');
Route::get('/home','HomePage@index');
Route::get('/datum_filter/{id}','HomePage@datum_filter');

Route::group(['middleware' => ['login']], function () {
    Route::get('/rez/{id}/{id_kor}','HomePage@rezervazija')->name('rez');
    Route::get('/profile/{id}','HomePage@profile')->name('profile');
    Route::get('/del_rez/{id}','HomePage@del_rez')->name('del_rez');
});

Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin','Admin@index');
    Route::post('/admin','Admin@store');
});










//Route::get('/muske_patike/{id}','Lab1@index');
