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


Route::get('/', 'EmployeeController@home')->name('home');
Route::get('/employee/{id}', 'EmployeeController@employee')->name('employee');

Route::get('/edit/{id}', 'EmployeeController@edit')->name('edit');
Route::post('/update{id}', 'EmployeeController@update')->name('update');

Route::get('/destroy/{id}', 'EmployeeController@destroy')->name('destroy');

Route::get('/newEmployee', 'EmployeeController@newEmployee') -> name('newEmployee');
Route::post('/store', 'EmployeeController@store') -> name('store');
