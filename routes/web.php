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
<<<<<<< HEAD
Route::get('/aparatur','AparaturController@index')->name('tampilInput');
Route::post('/aparatur/save','AparaturController@InputData')->name('inputAparatur');
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 8c704aec75bde158cb87e93ba83bac10a3147cca
