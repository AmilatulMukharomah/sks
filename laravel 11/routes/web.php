<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| SCRIPT PUNYA ILA
| JANGAN DIAMBIL >:(
| J3D118160
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route menampilkan data barang
Route::get('barangs', 'BarangController@index')->name('barangs.index');

//route mengakses view form tambah barang
Route::get('/barangs/create', 'BarangController@create')->name('barangs.create');

//route untuk proses simpan data barang
Route::post('/barangs', 'BarangController@store')->name('barangs.store');

//route untuk mengakses detail data
Route::get('/barang/{barang}', 'BarangController@detail')->name('barangs.detail');

//route untuk menampilkan form update
Route::get('/barangs/{barang}/edit', 'BarangController@edit')->name('barangs.edit');

//route untuk update data ke dalam database
Route::put('/barangs/{barang}', 'BarangController@update')->name('barangs.update');

//route untuk menghapus barang
Route::delete('/barangs/{barang}', 'BarangController@delete')->name('barangs.delete');
