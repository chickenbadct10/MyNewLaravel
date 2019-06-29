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


Route::get('/loai', 'LoaiController@index')->name('loai.index');
Route::get('/loai/themmoi', 'LoaiController@create')->name('loai.create');
Route::post('/loai/store', 'LoaiController@store')->name('loai.store');
Route::get('/loai/edit/{id}', 'LoaiController@edit')->name('loai.edit');
Route::put('/loai/update/{id}', 'LoaiController@update')->name('loai.update');
Route::delete('/loai/delete/{id}', 'LoaiController@destroy')->name('loai.destroy');

Route::get('/chude', 'ChuDeController@index')->name('chude.index');
Route::get('/chude/themmoi', 'ChuDeController@create')->name('chude.create');
Route::post('/chude/store', 'ChuDeController@store')->name('chude.store');
Route::get('/chude/edit/{id}', 'ChuDeController@edit')->name('chude.edit');
Route::put('/chude/update/{id}', 'ChuDeController@update')->name('chude.update');
Route::delete('/chude/delete/{id}', 'ChuDeController@destroy')->name('chude.destroy');
