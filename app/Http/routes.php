<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', ['middleware' => 'auth', function () {
    return view('home');
}]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('ukt',[
    'middleware' => 'auth',
    'uses' => 'UKTController@show'
]);
Route::post('ukt',[
    'middleware' => 'auth',
    'uses' => 'UKTController@showUKT'
]);
Route::get('ukt/add/{jalurID}',[
    'midleware' => 'auth',
    'uses' => 'UKTController@add'
]);
Route::post('ukt/add/{jalurID}',[
    'midleware' => 'auth',
    'uses' => 'UKTController@prosesAdd'
]);

Route::get('tagihan/ukt',[
    'midleware' => 'auth',
    'uses' => 'TagihanController@show'
]);
Route::get('tagihan/ukt/add',[
    'midleware' => 'auth',
    'uses' => 'TagihanController@add'
]);

Route::get('pengajuan',[
    'midleware' => 'auth',
    'uses' => 'PengajuanController@show'
]);
Route::get('pengajuan/add',[
    'midleware' => 'auth',
    'uses' => 'PengajuanController@add'
]);
Route::post('pengajuan/add',[
    'midleware' => 'auth',
    'uses' => 'PengajuanController@prosesAdd'
]);
Route::get('/pengajuan/detail/{id}',[
    'midleware' => 'auth',
    'uses' => 'PengajuanController@detail'
]);
Route::get('/pengajuan/detail/{id}/add',[
    'midleware' => 'auth',
    'uses' => 'PengajuanController@detailAdd'
]);
Route::post('/pengajuan/detail/{id}/add',[
    'midleware' => 'auth',
    'uses' => 'PengajuanController@prosesDetailAdd'
]);

Route::get('gaji',function(){
    return view('gaji.gaji');
});
