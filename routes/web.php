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
Route::get('/daftaraparatur', function(){
	return view('data_print/daftaraparatur');
});

Route::get('/tambahjabatan', function(){
	return view('dataInput/inputJabatan');
});

Route::get('/aparatur','AparaturController@index')->name('tampilInput');
<<<<<<< HEAD
Route::post('/aparatur/save','AparaturController@inputdata')->name('inputAparatur');
=======
Route::get('/aparatur/save','AparaturController@inputdata')->name('inputAparatur');

>>>>>>> 09b7ea2b211b7a50438a4db4e9ae1f3e9c069f73
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
