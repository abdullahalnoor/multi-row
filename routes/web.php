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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','CategoryController@home')->name('/');
Route::get('category','CategoryController@index')->name('category');
Route::get('category-add','CategoryController@create')->name('category-form');
Route::post('category-store','CategoryController@store')->name('category-store');
Route::post('category-delete-all','CategoryController@deletOneMore')->name('category-select-delete');
Route::get('category-delete/{id}','CategoryController@delete')->name('category-delete');
Route::get('category-edit/{id}','CategoryController@edit')->name('category-edit');
