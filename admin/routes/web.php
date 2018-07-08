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
    return view('klaim');
});
Route::get('/laporan_hilang', function () {
    return view('laporan_hilang');
});
Route::get('/laporan_temuan', function () {
    return view('laporan_temu');
});
Route::get('/histori', function () {
    return view('histori');
});
Route::get('/klaim', function () {
    return view('klaim');
});
Route::resource('laporan_hilang', 'HilangController');
Route::resource('laporan_temuan', 'TemuanController');
Route::resource('klaim', 'KlaimController'); 
Route::resource('histori', 'HistoryController');
