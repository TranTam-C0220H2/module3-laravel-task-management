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
})->name('welcome');
Route::prefix('customer')->group(function () {
    Route::get('index', 'CustomerController@index');
    Route::get('create', 'CCustomer@create');
    Route::post('store', 'CCustomer@store');
    Route::get('{id}/show', 'CCustomer@show');
    Route::get('{id}/edit', 'CCustomer@edit');
    Route::post('{id}/update', 'CCustomer@update');
    Route::delete('{id}/delete', 'CCustomer@delete');
});
Route::prefix('task')->group(function () {
    Route::get('/', 'TaskController@index')->name('task.index');
    Route::get('/create', 'TaskController@create')->name('task.create');
    Route::post('/store', 'TaskController@store')->name('task.store');
    Route::get('/{id}', 'TaskController@show')->name('task.show');
    Route::get('/{id}/edit', 'TaskController@edit')->name('task.edit');
    Route::put('/{id}', 'TaskController@update')->name('task.update');
    Route::delete('/{id}', 'TaskController@destroy')->name('task.destroy');
});
