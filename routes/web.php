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



Route::post('/aparatur/save','AparaturController@inputdata');

Route::get('/aparatur/edit/{id}','AparaturController@editdata')->name('tampedit');

Auth::routes();
Route::get('/tambahjabatan', 'AparaturController@tampil_jabatan')->name('jabatan');
Route::post('/tambahjabatan/save', 'AparaturController@jabatan')->name('tambah_jabatan');


Route::get('/daftaraparatur', 'AparaturController@daftar')->name('daftaraparatur');
Route::get('/daftaraparaturlama', 'AparaturController@daftarlama')->name('daftaraparaturlama');
Route::get('/aparatur','AparaturController@index')->name('tampilInput');
Route::get('/home', 'HomeController@index')->name('home');
