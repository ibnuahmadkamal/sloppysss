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




Route::get('/','HomestayController@index');
Route::get('/index','HomestayController@index');
//login
Route::get('/login', 'HomestayController@login');
Route::get('/loginowner','HomestayController@loginowner');
Route::get('/loginadmin','HomestayController@loginadmin');

Route::post('/checklogin', 'HomestayController@checklogin');
Route::post('/checkloginowner', 'HomestayController@checkloginowner');
Route::post('/checkloginadmin', 'HomestayController@checkloginadmin');

Route::get('/register','HomestayController@register');
Route::post('/registerPost', 'HomestayController@registerPost');

Route::get('/sucesslogin', 'HomestayController@sucesslogin');
Route::get('/sucessloginadmin', 'HomestayController@sucessloginadmin');

Route::get('/search','HomestayController@search');

//dashboard owner
Route::get('/daftarhm', 'HomestayController@daftarhm');
Route::post('/daftarhmPost', 'HomestayController@daftarhmPost');
Route::post('/simpan','HomestayController@simpan');
Route::get('/buatreview','HomestayController@buatreview');
Route::post('/simpanreview','HomestayController@simpanreview');
Route::get('/hapus/{id}','HomestayController@hapus');
Route::get('/hapusreview/{id}','HomestayController@hapusreview');
Route::get('/edit/{id}','HomestayController@edit');
Route::put('/update/{id}','HomestayController@update');
Route::get('/sucessregister', 'HomestayController@sucessregister');


Route::get('/sucessloginowner', 'HomestayController@sucessloginowner');
Route::get('/dreview', 'HomestayController@dreview');