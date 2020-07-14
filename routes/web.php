<?php

use Illuminate\Support\Facades\Route;

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

//subkategori
Route::get('/', 'SubkategoriController@index');
Route::resource('crud', 'SubkategoriController');
Route::get('/', 'SubkategoriController@index');
//produk/bmn
Route::get('/produk', 'ProdukController@index');
Route::resource('produk', 'ProdukController');
//satuan
Route::get('/satuan', 'SatuanController@index');
Route::resource('satuan', 'SatuanController');
//speckproduk
Route::get('/speck', 'SpeckProdukController@index');
Route::resource('speck', 'SpeckProdukController');
//DBL
Route::get('/dbl', 'DblController@index');
Route::resource('dbl', 'DblController');
//dbr
Route::get('/dbr', 'DbrController@index');
Route::resource('dbr', 'DbrController');
//kondisi
Route::get('/kondisi', 'KondisiController@index');
Route::resource('kondisi', 'KondisiController');
//ruang
Route::get('/ruang', 'RuangController@index');
Route::resource('ruang', 'RuangController');
//unit
Route::get('/unit', 'UnitController@index');
Route::resource('unit', 'UnitController');
//kopiproduk
Route::get('/kopiproduk', 'KopiProdukController@index');
Route::resource('kopiproduk', 'KopiProdukController');




// Route::get('/barang', 'ProdukController@index');
// Route::get('/barang/import_excel', 'ProdukController@import_excel');

// Route::get('/', 'ProdukController@index');
// Route::get('/siswa/export_excel', 'SiswaController@export_excel');
// Route::post('/siswa/import_excel', 'ProdukController@import_excel');
// Route::resource('test', 'ProdukController');