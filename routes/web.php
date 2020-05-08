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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/gaji', function () {
//     return view('pages.gaji.form-gaji');
// });

Route::get('/gajis', 'GajiController@index')->name('gaji.index');
Route::get('/gajis/create', 'GajiController@create')->name('gaji.create');
Route::post('/gajis', "GajiController@store")->name('gaji.store');
Route::delete('/gajis/hapus/{gaji}', 'GajiController@destroy')->name('gaji.destroy');
Route::patch('/gajis/{gaji}', 'GajiController@update')->name('gaji.update');
Route::get('/gajis/{gaji}/edit', 'GajiController@edit')->name('gaji.edit');