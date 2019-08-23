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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('top');
});

// consumerルーティング
Route::get('con', 'ConsumerController@index');
Route::get('con/login', 'ConsumerController@loginView');
Route::post('con/login', 'ConsumerController@login');
Route::get('con/auth_2', 'ConsumerController@login2View');
Route::post('con/auth_2', 'ConsumerController@login2');

// businessルーティング
Route::get('bus', 'BusinessController@index');
Route::get('bus/login', 'BusinessController@loginView');
Route::post('bus/login', 'BusinessController@login');

// Auth導入時に追加されるルーティング
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
