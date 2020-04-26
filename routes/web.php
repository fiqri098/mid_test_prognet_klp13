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

Route::get('/listmahasiswa', 'MahasiswasController@index');
Route::get('/listmahasiswa/{mahasiswa}/edit', 'MahasiswasController@edit');
Route::patch('/listmahasiswa/{mahasiswa}', 'MahasiswasController@update');
Route::delete('/listmahasiswa/{mahasiswa}', 'MahasiswasController@destroy');
Route::get('/buatmahasiswa', 'MahasiswasController@create');
Route::POST('/buatmahasiswa', 'MahasiswasController@store');

route::get('/', function() {
    return view('dashboard');
});
