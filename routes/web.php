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
// consumerのサインアップ
Route::get('con/signup', 'ConsumerController@signupView');
Route::post('con/signup', 'ConsumerController@signup');
Route::get('con/signup_2', 'ConsumerController@signup2View');
Route::post('con/signup_2', 'ConsumerController@signup2');
// consumerログイン後
Route::get('con', 'ConsumerController@index');

// businessルーティング
// businessログイン後
Route::get('bus', 'BusinessController@index');

// Auth導入時に追加されるルーティング
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
