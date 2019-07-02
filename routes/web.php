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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mahasiswas', 'MahasiswaController@index');
Route::get('/mahasiswas/tambah', 'MahasiswaController@tambah');
Route::get('/mahasiswas/store', 'MahasiswaController@store');
Route::get('/mahasiswas/{id}/edit', 'MahasiswaController@edit');
Route::get('/mahasiswas/{id}/update', 'MahasiswaController@update');
Route::get('/mahasiswas/{id}/hapus', 'MahasiswaController@destroy');

Route::get('/mhs', 'DaftarController@index');
Route::get('/mhs/tambah', 'DaftarController@tambah');
Route::get('/mhs/store', 'DaftarController@store');

Route::get('/data', 'TerimaController@index');