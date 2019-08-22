<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/biodata', function () {
    return view('data_print/view_print');
});

Route::get('/kategori', function () {
    return view('kategori/view_kategori');
});

Route::get('/tambahjabatan', function(){
	return view('dataInput/inputJabatan');
});

Route::get('/daftaraparatur', 'AparaturController@daftar')->name('daftaraparatur');
Route::get('/daftaraparaturlama', 'AparaturController@daftarlama')->name('daftaraparaturlama');
Route::get('/aparatur','AparaturController@index')->name('tampilInput');
Route::get('/aparatur/save','AparaturController@inputdata')->name('inputAparatur');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
