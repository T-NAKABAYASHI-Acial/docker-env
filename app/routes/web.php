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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('registration');
});

Auth::routes();

Route::get('events', 'EventController@create');

Route::group(['middleware' => 'auth'], function () {
});
Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::post('create/confirm', 'EventsController@confirm')->name('confirm.event');
    Route::post('create/complete', 'EventsController@complete')->name('complete.event');
    // Route::post('create/{event}', 'EventsController@create')->name('admin.postCreate');
    Route::get('create', 'EventsController@createForm')->name('admins.createForm');
    Route::get('top', 'HomeController@adminTop')->name('admins.top');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('edit/{id}', 'UserController@getEdit')->name('user.edit');
    Route::post('edit/{id}', 'UserController@postEdit')->name('user.postEdit');
    Route::get('events', 'EventsController@events')->name('events');
    Route::get('events/detail/{event_id}', 'EventsController@detail')->name('event.detail');
    Route::post('events/reserve', 'EventsController@reserve')->name('event.reserve');
});