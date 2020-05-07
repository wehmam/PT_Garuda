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

Route::get('/bagians', 'BagianController@index')->name('bagians.index');

Route::get('/bagians/create', 'BagianController@create')->name('bagians.create');

Route::post('/bagians', 'BagianController@store')->name('bagians.store');

Route::get('/bagians/{bagian}/edit', 'BagianController@edit')->name('bagians.edit');

Route::patch('/bagians/{bagian}', 'BagianController@update')->name('bagians.update');

Route::delete('/bagians/{bagian}', 'BagianController@destroy')->name('bagians.destroy');