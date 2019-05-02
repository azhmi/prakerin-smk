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


Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/siswa', 'SiswaController@index');

Route::get('/siswa/add', 'SiswaController@create');
Route::get('/siswa/edit/{id}', 'SiswaController@edit');
Route::get('/siswa/magang/saya', 'SiswaController@mymagang');
Route::patch('/siswa/edit/{id}/save', 'SiswaController@update');
Route::delete('/siswa/delete/{id}', 'SiswaController@destroy');


Route::get('/tempat-magang', 'TempatmagangController@index');
Route::get('/tempat-magang/history/{id}', 'TempatmagangController@history');
Route::get('/tempat-magang/add', 'TempatmagangController@create');
Route::delete('/tempat-magang/delete/{id}', 'TempatmagangController@destroy');
Route::get('/tempat-magang/edit/{id}', 'TempatmagangController@show');
Route::patch('/tempat-magang/edit/{id}/save', 'TempatmagangController@update');
Route::post('/tempat-magang/add/save', 'TempatmagangController@store');


Route::get('/pembimbing', 'PembimbingController@index');


Route::get('/pembimbing/mysiswa', 'PembimbingController@mysiswa');


Route::get('/pembimbing/add', 'PembimbingController@create');


Route::get('/pembimbing/edit/{id}' , 'PembimbingController@show');
Route::post('/pembimbing/add/save', 'PembimbingController@store');
Route::patch('/pembimbing/edit/{id}/save/', 'PembimbingController@update');
Route::delete('/pembimbing/delete/{id}', 'PembimbingController@destroy');


Route::post('/bukti-pembayaran/add/save', 'BuktipembayaranController@store');

Route::patch('/bukti-pembayaran/edit/{id}/save', 'BuktipembayaranController@update');

Route::get('/bukti-pembayaran/verifikasi', 'BuktipembayaranController@index');

Route::patch('/bukti-pembayaran/verifikasi/{id}', 'BuktipembayaranController@verifikasi');



Route::get('/magang', 'MagangController@index');
Route::get('/magang/add', 'MagangController@create');
Route::post('/magang/add/save', 'MagangController@store');
Route::get('/magang/edit/{id}', 'MagangController@show');
Route::patch('/magang/edit/{id}/save', 'MagangController@update');

Route::delete('/magang/delete/{id}', 'MagangController@destroy');


Route::get('/nilai', 'NilaiController@index');
Route::get('/nilai/add/{id}', 'NilaiController@create');
Route::get('/nilai/edit/{id}', 'NilaiController@show');
Route::post('/nilai/add/{id}/save', 'NilaiController@store');
Route::patch('/nilai/edit/{id}/save', 'NilaiController@update');
Route::delete('/nilai/delete/{id}', 'NilaiController@destroy');
Route::get('/berkas/unduh/', 'SiswaController@berkas');
Route::get('/sertifikat/unduh/', 'SiswaController@a');