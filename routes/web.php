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


// // tambah
// Route::get('/home/tambah','Comp1Controller@tambah');
// Route::post('/home/protambah','Comp1Controller@protambah');

// // update
// Route::get('/home/edit/{id}','Comp1Controller@edit');
// Route::post('/home/updated','Comp1Controller@updated');

// // hapus
// Route::get('/home/hapus/{id}','Comp1Controller@hapus');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
