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
Route::group(['middleware' => 'auth'], function(){
    Route::prefix('/admin')->group(function(){
        Route::get('/dashboard', 'KreasiEvent\Admin\DashboardController@index')->name('dashboard.admin');
        Route::resource('/event', 'KreasiEvent\Admin\Event\EventController');
        Route::resource('/eventdua', 'KreasiEvent\Admin\EventDua\EventDuaController');
        Route::resource('/participant', 'KreasiEvent\Admin\Participant\ParticipantUsersController');
    });
});

Route::prefix('/user')->group(function(){
    Route::get('/homepage', 'KreasiEvent\User\HomePageController@index')->name('home.user');
    Route::get('/pendaftaranevent', 'KreasiEvent\User\ParticipantController@index')->name('pendaftaran.index');
    Route::get('/formpendaftaranevent', 'KreasiEvent\User\ParticipantController@create')->name('form.pendaftaranevent');
    Route::post('/formpendaftaranevent', 'KreasiEvent\User\ParticipantController@store')->name('formevent.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
