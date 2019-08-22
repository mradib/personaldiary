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

Route::group(['middleware'=> 'chkUser'],function(){
    Route::get('/dashboard','mancontroller@index')->name('userlist');
    Route::get('/user/{id}/edit','mancontroller@edit')->name('edit');
    Route::post('/user/{id}/update','mancontroller@update')->name('update');
    Route::get('/user/{id}/delete','mancontroller@delete')->name('delete');
    Route::get('/posts','postcontroller@index')->name('post.userlist');
    Route::get('/posts','postcontroller@post')->name('post');
});

Route::get('/login','logincontroller@index')->name('login.userlist');
Route::post('/login','logincontroller@login')->name('login');
Route::get('/logout','logincontroller@logout')->name('logout');
