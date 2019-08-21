<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    return view('data_print/templates/view_header');
});