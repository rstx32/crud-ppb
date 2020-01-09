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

Route::get('/barang', 'BarangController@index');
Route::get('/barang/tambah', 'BarangController@tambah');
Route::post('/barang/store', 'BarangController@store');
Route::get('/barang/edit/{kd_brg}', 'BarangController@edit');
Route::put('/barang/update/{kd_brg}', 'BarangController@update');
Route::get('/barang/hapus/{kd_brg}', 'BarangController@delete');
Route::get('/barang/cetak_pdf', 'BarangController@cetak_pdf');