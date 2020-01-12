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

// barang
Route::get('/barang', 'BarangController@index');
Route::get('/barang/tambah', 'BarangController@tambah');
Route::post('/barang/store', 'BarangController@store');
Route::get('/barang/edit/{kd_brg}', 'BarangController@edit');
Route::put('/barang/update/{kd_brg}', 'BarangController@update');
Route::get('/barang/hapus/{kd_brg}', 'BarangController@delete');
Route::get('/barang/cetak_pdf', 'BarangController@cetak_pdf');
Route::get('/barang/export_excel', 'BarangController@export_excel');

// user
Route::get('/pelanggan', 'PelangganController@index');
Route::get('/pelanggan/tambah', 'PelangganController@tambah');
Route::post('/pelanggan/store', 'PelangganController@store');
Route::get('/pelanggan/edit/{email}', 'PelangganController@edit');
Route::put('/pelanggan/update/{email}', 'PelangganController@update');
Route::get('/pelanggan/hapus/{email}', 'PelangganController@delete');
Route::get('/pelanggan/cetak_pdf', 'PelangganController@cetak_pdf');
Route::get('/pelanggan/export_excel', 'PelangganController@export_excel');

// auth login & register
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');