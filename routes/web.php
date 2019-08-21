<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/biodata', function () {
    return view('data_print/view_print');
});
Route::get('/daftaraparatur', function(){
	return view('data_print/daftaraparatur');
});
Route::get('/aparatur','AparaturController@index')->name('tampilInput');
Route::post('/aparatur/save','AparaturController@InputData')->name('inputAparatur');