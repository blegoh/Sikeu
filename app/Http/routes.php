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

Route::get('ukt/dana',[
    'middleware' => 'auth',
    'uses' => 'UKTController@danaUKT'
]);

Route::post('ukt/edit',[
    'middleware' => 'auth',
    'uses' => 'UKTController@editUKT'
]);

Route::get('ukt/validasi/{jalurMasuk}',[
    'middleware' => 'auth',
    'uses' => 'UKTController@validasi'
]);

Route::get('ukt/validasi/{prodiID}/{jalurMasuk}',[
    'middleware' => 'auth',
    'uses' => 'UKTController@prosesValidasi'
]);

Route::get('ukt/{prodiId}', [
    'middleware' => 'auth',
    'uses' => 'UKTController@detailUKT'
]);

Route::get('ukt/add/{prodiId}/{jalurId}',[
    'middleware' => 'auth',
    'uses' => 'UKTController@add'
]);
Route::post('ukt/add/{prodiId}/{jalurId}',[
    'middleware' => 'auth',
    'uses' => 'UKTController@prosesAdd'
]);

Route::get('tagihan/ukt',[
    'middleware' => 'auth',
    'uses' => 'TagihanController@show'
]);
Route::get('tagihan/ukt/{fakultasID}/{thnAkademik}',[
    'middleware' => 'auth',
    'uses' => 'TagihanController@show'
]);
Route::post('filter/tagihan/ukt',[
    'middleware' => 'auth',
    'uses' => 'TagihanController@filter'
]);

Route::get('tagihan/ukt/add',[
    'midleware' => 'auth',
    'uses' => 'TagihanController@addTagihanUKT'
]);
Route::get('tagihan/wisuda',[
    'middleware' => 'auth',
    'uses' => 'TagihanController@showWisuda'
]);
Route::get('tagihan/um',[
    'middleware' => 'auth',
    'uses' => 'TagihanController@showUM'
]);

Route::get('permohonan',[
    'middleware' => 'auth',
    'uses' => 'PermohonanController@show'
]);

Route::get('pengajuan',[
    'middleware' => 'auth',
    'uses' => 'PengajuanController@show'
]);
Route::get('pengajuan/add',[
    'middleware' => 'auth',
    'uses' => 'PengajuanController@add'
]);
Route::post('pengajuan/add',[
    'middleware' => 'auth',
    'uses' => 'PengajuanController@prosesAdd'
]);
Route::get('/pengajuan/detail/{id}',[
    'middleware' => 'auth',
    'uses' => 'PengajuanController@detail'
]);
Route::get('/pengajuan/finish/{id}',[
    'middleware' => 'auth',
    'uses' => 'PengajuanController@finish'
]);
Route::get('/pengajuan/detail/{id}/add',[
    'middleware' => 'auth',
    'uses' => 'PengajuanController@detailAdd'
]);
Route::post('/pengajuan/detail/{id}/add',[
    'middleware' => 'auth',
    'uses' => 'PengajuanController@prosesDetailAdd'
]);
Route::get('/pengajuan/detail/{id}/edit',[
    'middleware' => 'auth',
    'uses' => 'PengajuanController@detailEdit'
]);
Route::post('/pengajuan/detail/{id}/edit',[
    'middleware' => 'auth',
    'uses' => 'PengajuanController@prosesDetailEdit'
]);
Route::get('/pengajuan/detail/{id}/delete',[
    'middleware' => 'auth',
    'uses' => 'PengajuanController@detailDelete'
]);

Route::get('gaji',function(){
    return view('gaji.gaji');
});

Route::get('service','ServiceController@show');
Route::get('pembayaran','PembayaranController@index');
Route::get('pembayaran/ukt','PembayaranController@ukt');
Route::post('pembayaran/ukt','PembayaranController@showTagihanUkt');
Route::get('/pembayaran/bayar/{jenis}/{id}','PembayaranController@bayar');

Route::get('pdf','UKTController@pdf');

Route::get('kas','KasController@show');