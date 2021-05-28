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

Route::get('/', 'myGameboy@home')
      ->name('home');

Route::get('match/{id}', 'myGameboy@match')
      ->name('match');

Route::get('edit/{id}', 'myGameboy@edit')
      ->name('edit');
Route::post('update/{id}', 'myGameboy@update')
      ->name('update');

Route::get('delete/{id}', 'myGameboy@delete')
      ->name('delete');

Route::get('create', 'myGameboy@create')
      ->name('create');
Route::post('store', 'myGameboy@store')
      ->name('store');
