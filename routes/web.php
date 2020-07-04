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

use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\JawabanController;

Route::get('/', function () {
    return view('master');
});

Route::get('/pertanyaan', 'PertanyaanController@index'); // Menampilkan halaman form
Route::get('/pertanyaan/create', 'PertanyaanController@create'); // Menyimpan data
Route::post('/pertanyaan', 'PertanyaanController@store'); // Menampilkan Semua
Route::get('/jawaban/create', 'JawabanController@create'); // Menyimpan Data Jawaban
Route::get('/jawaban', 'JawabanController@index'); // Menampilkan halaman form
Route::post('/jawaban', 'JawabanController@store'); // Menampilkan Semua
?>
