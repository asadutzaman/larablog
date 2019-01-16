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

Route::get('/index', 'pageControll@index')->name('index');
Route::get('/product', 'pageControll@product')->name('product');
Route::get('/cms', 'pageControll@cms')->name('cms');

Route::post('store','pageControll@store');