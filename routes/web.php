<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;

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


Route::get('/loai', 'LoaiController@index')->name('backend.loai.index');
Route::get('/loai/themmoi', 'LoaiController@create')->name('backend.loai.create');
Route::post('/loai/store', 'LoaiController@store')->name('backend.loai.store');
Route::get('/loai/edit/{id}', 'LoaiController@edit')->name('backend.loai.edit');
Route::put('/loai/update/{id}', 'LoaiController@update')->name('backend.loai.update');
Route::delete('/loai/delete/{id}', 'LoaiController@destroy')->name('backend.loai.destroy');
//Route danh sách chủ đề
Route::get('/chude', 'ChuDeController@index')->name('backend.chude.index');
Route::get('/chude/themmoi', 'ChuDeController@create')->name('backend.chude.create');
Route::post('/chude/store', 'ChuDeController@store')->name('backend.chude.store');
Route::get('/chude/edit/{id}', 'ChuDeController@edit')->name('backend.chude.edit');
Route::put('/chude/update/{id}', 'ChuDeController@update')->name('backend.chude.update');
Route::delete('/chude/delete/{id}', 'ChuDeController@destroy')->name('backend.chude.destroy');

//Route dành cho backend
Route::get('/admin/','BackendController@dashboard')->name('backend.dashboard');
