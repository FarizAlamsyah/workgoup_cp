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

Route::get('/','Comp1Controller@index');

Route::get('/news','Comp1Controller@news');
Route::get('/contact','Comp1Controller@contact');
Route::get('/about','Comp1Controller@about');
Route::get('/member','Comp1Controller@member');



Auth::routes();

//backend

Route::get('/utama', 'Companycontroller@index')->name('index');
Route::get('/create', 'Companycontroller@create')->name('create');
Route::post('/store', 'Companycontroller@store')->name('store');
Route::get('/show', 'Companycontroller@show')->name('show');
Route::get('/update', 'Companycontroller@update')->name('update');
Route::get('/destroy', 'Companycontroller@destroy')->name('destroy');
