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
Route::get('/user','regcontroller@index');

Route::post('/user','regcontroller@register')->name('register');

Route::get('/dashboard','mancontroller@index')->name('userlist');
Route::get('/user/{id}/edit','mancontroller@edit')->name('edit');
Route::post('/user/{id}/update','mancontroller@update')->name('update');
Route::get('/user/{id}/delete','mancontroller@delete')->name('delete');