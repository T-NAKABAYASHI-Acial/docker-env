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

Route::resource('events', 'EventController');

Route::group(['middleware' => 'auth'], function () {
});
Route::get('/', 'HomeController@index')->name('home');

// Route::group(['prefix' => 'admin'], function () {
//     // Route::post('create/{event}', 'EventsController@create')->name('admin.postCreate');
//     Route::get('create/{event}', 'EventsController@createForm')->name('admin.createForm');
// });

Route::group(['prefix' => 'user'], function () {
    Route::get('edit/{id}', 'UserController@getEdit')->name('user.edit');
    Route::post('edit/{id}', 'UserController@postEdit')->name('user.postEdit');
});
