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

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tugas4pweb');
});

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('ets','ViewController@showETS');

Route::get('dictionary','ViewController@showDictionary');
Route::post('definition','ViewController@showDefinition');

//route CRUD tabel 'pegawai'
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD tabel 'tugas'
Route::get('/tugas', 'TugasController@index');
Route::get('/tugas/tambah', 'TugasController@tambah');
Route::post('/tugas/store', 'TugasController@store');
Route::get('/tugas/edit/{id}', 'TugasController@edit');
Route::post('/tugas/update', 'TugasController@update');
Route::get('/tugas/hapus/{id}', 'TugasController@hapus');

//route CRUD tabel 'absen'
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD tabel 'bolpen'
Route::get('/bolpen','BolpenController@index');
Route::get('/bolpen/tambah','BolpenController@tambah');
Route::post('/bolpen/store','BolpenController@store');
Route::get('/bolpen/edit/{kodebolpen}','BolpenController@edit');
Route::post('/bolpen/update','BolpenController@update');
Route::get('/bolpen/hapus/{kodebolpen}','BolpenController@hapus');
Route::get('/bolpen/cari','BolpenController@cari');
Route::get('/bolpen/view/{kodebolpen}','BolpenController@detail');

//route CRUD tabel 'keranjangbelanja'
Route::get('/keranjangbelanja','KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/tambah','KeranjangBelanjaController@tambah');
Route::post('/keranjangbelanja/store','KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/edit/{ID}','KeranjangBelanjaController@edit');
Route::post('/keranjangbelanja/update','KeranjangBelanjaController@update');
Route::get('/keranjangbelanja/hapus/{ID}','KeranjangBelanjaController@hapus');

