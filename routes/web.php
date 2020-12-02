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
Route::GET('/',function(){
	return redirect()->route('user.index');
});

Route::GET('/daftar_event','AppController@user_index')->name('user.index');
Route::POST('/participant/add','AppController@participant_add')->name('participant.add');


Auth::routes();


Route::get('/home', 'AppController@index')->name('home')->middleware('auth');
Route::GET('/event/detail/{id}','AppController@detail')->name('event.detail')->middleware('auth');
