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

Route::get('/home','Comp1Controller@index');

Route::get('home/news','Comp1Controller@news');
Route::get('home/contact','Comp1Controller@contact');
Route::get('home/about','Comp1Controller@about');


// // tambah
// Route::get('/home/tambah','Comp1Controller@tambah');
// Route::post('/home/protambah','Comp1Controller@protambah');

// // update
// Route::get('/home/edit/{id}','Comp1Controller@edit');
// Route::post('/home/updated','Comp1Controller@updated');

// // hapus
// Route::get('/home/hapus/{id}','Comp1Controller@hapus');