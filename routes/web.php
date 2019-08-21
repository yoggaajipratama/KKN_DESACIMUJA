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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
