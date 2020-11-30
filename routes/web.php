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
    return view('auth/login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// BACKEND
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('dasboard')->group(function () {
        Route::get('admin', 'Backend\dasboardAdmin\dasboardAdminController@index')->name('halaman-admin');
        // EVENT
        Route::get('event', 'Backend\Event\EventController@index')->name('halaman-event');
        Route::get('create-event', 'Backend\Event\EventController@create')->name('event.create');
        Route::post('store-event', 'Backend\Event\EventController@store')->name('event.store'); 
        Route::get('edit-event/{event}', 'Backend\Event\EventController@edit')->name('event.edit');
        Route::post('update-event/{event}', 'Backend\Event\EventController@update')->name('event.update');
        Route::delete('delete-event/{id}', 'Backend\Event\EventController@destroy')->name('event.destroy');
        // EVENTS1
        Route::get('events1', 'Backend\Events\eventsController@index')->name('halaman-events1');
        Route::get('create-events1', 'Backend\Events\eventsController@create')->name('event.creates1');
        Route::post('store-events1', 'Backend\Events\eventsController@store')->name('event.stores1'); 
        Route::get('edit-events1/{events1}', 'Backend\Events\eventsController@edit')->name('event.edits1');
        Route::post('update-events1/{events1}', 'Backend\Events\eventsController@update')->name('event.updates1');
        Route::delete('delete-events1/{id}', 'Backend\Events\eventsController@destroy')->name('event.destroys1');
        // PARTICIPANT
        Route::get('participant', 'Backend\ParticipantUsers\ParticipantUsersController@index')->name('halaman-participant');
        Route::delete('delete-participant/{id}', 'Backend\ParticipantUsers\ParticipantUsersController@destroy')->name('destroy-participant');
    });
});

// FRONTEND
Route::prefix('Homee')->group(function(){
    Route::get('page', 'frontend\HomeController@index')->name('page');
    Route::get('form', 'frontend\FormController@index')->name('form');
    // PARTICIPANT
    Route::get('pendaftaran', 'Backend\ParticipantUsers\ParticipantUsersController@create')->name('pendaftaran');
    Route::post('pendaftaran-store', 'Backend\ParticipantUsers\ParticipantUsersController@store')->name('pendaftaran-store');
});